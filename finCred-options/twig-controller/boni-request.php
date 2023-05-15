<?php

require_once(FIN_AUTOLOADER_DIR);
$client = new \GuzzleHttp\Client();

// IN APARTMENTS NACH FINCRED PROPID SUCHEN UND DIE DAZUGEHÖRIGE WP-POST-ID IN DIE VARIABLE
// $appartment_id GEBEN
$args = array(
    'post_type' => 'estates',
    'meta_query' => array(
        array(
            'key' => '_uuid' ,
            'value' => $_GET['hashtag_objekt'],
                'compare' => 'IN',
            )
    )
);
$query = new WP_Query($args);
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        $appartment_id = get_the_ID();
    }
} else {

    echo 'hier';
    // no posts found
}

/////////////////////////////////////////////////////////////////////////////////////////////

// ALLE PROPERTY REFERENZEN  (die Prop-Refs werden mit der Onoffice UUID gesetzt) werten VON FINCREDIBLE HERUNTERLADEN UND SIE
// JE NACH completed STAND IN DIE BEIDEN KEY-VALUE ARRAYS
// (wobei die FIN CREDIBLE PROP ID der KEY ist und die ONOFFICE UUID das VALUE ist)
// $propId_completed UND $propId_uncompleted GEBEN
$response = $client->request('GET', get_option( 'fin_server').'properties', [
	'headers' => [
        'Authorization' => 'Bearer ' . get_option( 'fin_api_key' ),
		'accept' => 'application/json',
	],
]);

$datas =  json_decode($response->getBody(), true);


$propId_completed = array();
$propId_uncompleted = array();
foreach($datas['data'] as $data) {

    if($data['completed'] == 1){
        $propId_completed += [$data['property_id'] => $data['property_ref']];
    }
    if($data['completed'] == 0){
        $propId_uncompleted += [$data['property_id'] => $data['property_ref']];
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////

// IN DIESER ABZWEIGUNG WIRD IM ERSTEN SCHRITT GEPRÜFT OB DIE BONITÄT completed IST, ALSO ABGESCHLOSSEN
// WENN JA -> WIRD DIE DAZUGEHÖRIGE FIN CREDIBLE PROPERTY ID aus dem Array $propId_completed HERAUSGELESEN
// dadurch wissen wir ob eine Immobilie in FinCred angelegt worden ist und wie die PropID der Immobilie lautet
// denn für den Bonitätscheck wird eine PropId benötigt
/*$fin_hashtag_kunde = substr(get_post_meta( $appartment_id, '_uuid', true ), 0, -3);*/
$prop_ref = substr(get_post_meta( $appartment_id, '_uuid', true ), 0, -3) . '__'.$_GET['anzahlMieter'];
$mietbelastungs_quote = get_post_meta( $appartment_id, '_mietbelastuns_quote', true );

$hauptmieter_1_email =  get_post_meta( $_GET['boni_post_id'], 'email_hauptmieter_1', true );
$hauptmieter_1_anrede =  get_post_meta( $_GET['boni_post_id'], 'anrede_hauptmieter_1', true );
$hauptmieter_1_firstname =  get_post_meta( $_GET['boni_post_id'], 'vorname_hauptmieter_1', true );
$hauptmieter_1_lastname =  get_post_meta( $_GET['boni_post_id'], 'name_hauptmieter_1', true );

$buerge_hauptmieter_1_email =  get_post_meta( $_GET['boni_post_id'], 'email_buerge_1', true );
$buerge_hauptmieter_1_anrede =  get_post_meta( $_GET['boni_post_id'], 'anrede_buerge_1', true );
$buerge_hauptmieter_1_firstname =  get_post_meta( $_GET['boni_post_id'], 'vorname_buerge_1', true );
$buerge_hauptmieter_1_lastname =  get_post_meta( $_GET['boni_post_id'], 'name_buerge_1', true );

if(empty($mietbelastungs_quote)){
    $mietbelastungs_quote = 'RMIN40';
}


if(!empty($appartment_id)) {
						if ( in_array( $prop_ref, $propId_completed ) ) {
							echo "Property ist geschlossen";
						}

						elseif ( in_array( $prop_ref, $propId_uncompleted ) ) {

							$prop_id = array_search( $prop_ref , $propId_uncompleted );
							//die Bonitäts-Einladung wird gleich rausgeschickt, da eine Immobilie
							// bereits auf FinCredible angelgt wurdeund eine Prop-ID vorhanden ist
                            bonitaetEinladung( $_GET['boni_post_id'], $prop_id, $hauptmieter_1_anrede, $hauptmieter_1_firstname, $hauptmieter_1_lastname, $hauptmieter_1_email, 1  );
                            update_post_meta( $_GET['boni_post_id'], 'finCred_prop_ID', $prop_id);
                            update_post_meta( $_GET['boni_post_id'], 'finCredible_prop_ref',  $prop_ref);


						}

					// Wenn die UUID nicht in dem Array ist dann wurde noch keine Immobilie anglegt und im ersten Schritt
					// wird ersteinmal eine Immobilie angelegt bevor die Bonitätsprüfung durchgeführt wird.

						else {


								$response = $client->request( 'POST', get_option( 'fin_server' ) . 'properties/create', [
									'form_params' => [

										// require & unique
										'property_ref' => $prop_ref,
										// require
										'description'  => get_the_title( $appartment_id ),
										'country'      => get_post_meta( $appartment_id, '_land', true ),
										'city'         => get_post_meta( $appartment_id, '_ort', true ),
										'zipcode'      => get_post_meta( $appartment_id, '_plz', true ),
										'street'       => get_post_meta( $appartment_id, '_strasse', true ),
										'house_number' => get_post_meta( $appartment_id, '_hausnummer', true ),
										'top'          => get_post_meta( $appartment_id, '_etage', true ),
										'currency'     => 'EUR',
										'rent'         => round(get_post_meta( $appartment_id, '_warmmiete', true ) / $_GET['anzahlMieter'], 2),
										'criterias'    => $mietbelastungs_quote
									],
									'headers'     => [
										'Authorization' => 'Bearer ' . get_option( 'fin_api_key' ),
										'accept'        => 'application/json',
										'content-type'  => 'application/x-www-form-urlencoded',
									],
								] );

							$data = json_decode( $response->getBody(), true );


							$prop_id                = $data['data']['createdId'];
							$prop_id_request_status = $data['status'];

							update_post_meta( $_GET['boni_post_id'], 'finCred_prop_ID', $prop_id);
							update_post_meta( $_GET['boni_post_id'], 'finCredible_prop_ref',  $prop_ref);

                            //TODO if hat Bürge

                            if(get_post_meta( $_GET['boni_post_id'], 'hat_buerge_hauptmieter_1', true ) == 1){
                                bonitaetEinladung( $_GET['boni_post_id'], $prop_id, $buerge_hauptmieter_1_anrede, $buerge_hauptmieter_1_firstname, $buerge_hauptmieter_1_lastname, $buerge_hauptmieter_1_email, 1  );
                            }
                            else{
                                // jetzt wird die Bonitäts-Einladung rausgeschickt functions/finCredInvite.php
                                bonitaetEinladung( $_GET['boni_post_id'], $prop_id, $hauptmieter_1_anrede, $hauptmieter_1_firstname, $hauptmieter_1_lastname, $hauptmieter_1_email, 1  );

                            }

						}

}

else {
	echo 'keine Immobilie in Wordpress';

}





