<?php

require_once(FIN_AUTOLOADER_DIR);
$client = new \GuzzleHttp\Client();

// IN APARTMENTS NACH FINCRED PROPID SUCHEN UND DIE DAZUGEHÖRIGE WP-POST-ID IN DIE VARIABLE
// $appartment_id GEBEN
/*$prop_id = get_post_meta( $_GET['boni_post_id'], 'finCred_prop_ID', true );

$prop_ref = get_post_meta( $_GET['boni_post_id'], 'finCredible_prop_ref', true );*/
$appartment_id = get_post_meta( $_GET['boni_post_id'], 'wp_apartments_post_ID', true );

$anzahl_hauptmieter = get_post_meta( $_GET['boni_post_id'], 'anzahl_hauptmieter', true );



///////////////////////////////////





//set PropID
require_once(FIN_AUTOLOADER_DIR);
$client = new \GuzzleHttp\Client();

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


$prop_ref = substr(get_post_meta( $_GET['boni_post_id'], 'onoffice_objekt_hash', true ), 0, -3) . '__'.$anzahl_hauptmieter;




if ( in_array( $prop_ref, $propId_completed ) ) {
    echo "Property ist geschlossen";
}

elseif ( in_array( $prop_ref, $propId_uncompleted ) ) {


    $prop_id = array_search( $prop_ref , $propId_uncompleted );

    update_post_meta( $_GET['boni_post_id'], 'finCred_prop_ID', $prop_id);
    update_post_meta( $_GET['boni_post_id'], 'finCredible_prop_ref',  $prop_ref);


}
else {
    //TODO Mietbelastungsquote aus DB holen
    //get_post_meta( $appartment_id, '_MIETBELASTUNGSQUOTE', true )
    if(empty($mietbelastungs_quote)){
        $mietbelastungs_quote = 'RMIN40';
    }

    $appartment_id = get_post_meta( $_GET['boni_post_id'], 'wp_apartments_post_ID', true );
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
            'rent'         => round(get_post_meta( $appartment_id, '_warmmiete', true ) / $_POST['input_5'], 2),
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

}







////////////////////////////////////////////














$mietbelastungs_quote = get_post_meta( $appartment_id, '_mietbelastuns_quote', true );

$hauptmieter_email =  get_post_meta( $_GET['boni_post_id'], 'email_hauptmieter_'.$_GET['nummer_inviter'], true );
$hauptmieter_anrede =  get_post_meta( $_GET['boni_post_id'], 'anrede_hauptmieter_'.$_GET['nummer_inviter'], true );
$hauptmieter_firstname =  get_post_meta( $_GET['boni_post_id'], 'vorname_hauptmieter_'.$_GET['nummer_inviter'], true );
$hauptmieter_lastname =  get_post_meta( $_GET['boni_post_id'], 'name_hauptmieter_'.$_GET['nummer_inviter'], true );


$buerge_hauptmieter_email =  get_post_meta( $_GET['boni_post_id'], 'email_buerge_'.$_GET['nummer_inviter'], true );
$buerge_hauptmieter_anrede =  get_post_meta( $_GET['boni_post_id'], 'anrede_buerge_'.$_GET['nummer_inviter'], true );
$buerge_hauptmieter_firstname =  get_post_meta( $_GET['boni_post_id'], 'vorname_buerge_'.$_GET['nummer_inviter'], true );
$buerge_hauptmieter_lastname =  get_post_meta( $_GET['boni_post_id'], 'name_buerge_'.$_GET['nummer_inviter'], true );

if(empty($mietbelastungs_quote)){
    $mietbelastungs_quote = 'RMIN40';
}


if(!empty($appartment_id)) {

    if(get_post_meta( $_GET['boni_post_id'], 'hat_buerge_hauptmieter_'.$_GET['nummer_inviter'], true ) == 0){
        bonitaetEinladung2( $_GET['boni_post_id'], $prop_id, $hauptmieter_anrede, $hauptmieter_firstname, $hauptmieter_lastname, $hauptmieter_email, $_GET['nummer_inviter']  );
    }
    else{
        //Mail an Bürgen!!!
        bonitaetEinladung2( $_GET['boni_post_id'], $prop_id, $buerge_hauptmieter_anrede, $buerge_hauptmieter_firstname, $buerge_hauptmieter_lastname, $buerge_hauptmieter_email, $_GET['nummer_inviter']  );
    }
}

else {
	echo 'keine Immobilie in Wordpress';
}





