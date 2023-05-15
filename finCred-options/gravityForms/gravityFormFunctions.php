<?php
add_filter( 'gform_next_button_1', 'dw_add_span_tags', 10, 2 );
function dw_add_span_tags ( $button, $form ) {
    return $button .= "<span aria-hidden='true' id='next_button_arrow' ></span>";
}

add_filter( 'gform_submit_button', 'dw_add_span_tags_submit', 10, 2 );
function dw_add_span_tags_submit ( $button, $form ) {
    return $button .= "<span aria-hidden='true' id='next_button_arrow' ></span>";
}



add_action( 'gform_pre_submission', 'pre_submission_handler' );
function pre_submission_handler( $form ) {

}

//Action after Submit
add_action( 'gform_after_submission_1', 'set_post_content', 10, 2 );
function set_post_content( $entry, $form ) {


    //Fals Hauptmieter 1
    if(isset($_GET['uuid'])){
        // WP_Query to get the BoniPostID
        $args = array (
            'post_type'              => 'bonitaet',
            'meta_query'             => array(
                array(
                    'key'       => 'onoffice_url_hash',
                    'value'     => $_GET['uuid'],
                ),
            ),
        );

// The Query
        $query = new WP_Query( $args );

// The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                $current_post_id = get_the_ID();

            }
        }
        $nummer_inviter = 1;

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


        $prop_ref = substr(get_post_meta( $current_post_id, 'onoffice_objekt_hash', true ), 0, -3) . '__'.$_POST['input_5'];
        //Prop geschlossen
        if ( in_array( $prop_ref, $propId_completed ) ) {
            $context['error_status'] = 'prop_geschlossen';
        }
        //Prop vorhanden
        elseif ( in_array( $prop_ref, $propId_uncompleted ) ) {
            $prop_id = array_search( $prop_ref , $propId_uncompleted );
            update_post_meta( $current_post_id, 'finCred_prop_ID', $prop_id);
            update_post_meta( $current_post_id, 'finCredible_prop_ref',  $prop_ref);
        }
        //Prop nicht vorhanden
        else {
            //TODO Mietbelastungsquote aus DB holen
            //get_post_meta( $appartment_id, '_MIETBELASTUNGSQUOTE', true )
            if(empty($mietbelastungs_quote)){
                $mietbelastungs_quote = 'RMIN40';
            }

            $appartment_id = get_post_meta( $current_post_id, 'wp_apartments_post_ID', true );
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
            update_post_meta( $current_post_id, 'finCred_prop_ID', $prop_id);
            update_post_meta( $current_post_id, 'finCredible_prop_ref',  $prop_ref);

        }

//set Database
        //Anzahl Hauptmieter & Personen
        update_post_meta( $current_post_id , 'anzahl_hauptmieter', $_POST['input_5']);
        update_post_meta( $current_post_id , 'anzahl_bewohner', $_POST['input_95']);
        update_post_meta( $current_post_id , 'anzahl_garage', $_POST['input_152']);

        //Einzugstermin Wunsch & Alternativ
        update_post_meta( $current_post_id , 'einzugstermin_wunsch', $_POST['input_117']);
        update_post_meta( $current_post_id , 'einzugstermin_alternative', $_POST['input_7']);

        //Hauptmieter in DB anlegen
        if($_POST['input_5'] >1){
        //Hauptmieter 2
        update_post_meta( $current_post_id , 'anrede_hauptmieter_2', $_POST['input_38']);
        update_post_meta( $current_post_id , 'vorname_hauptmieter_2', $_POST['input_17']);
        update_post_meta( $current_post_id , 'name_hauptmieter_2', $_POST['input_18']);
        update_post_meta( $current_post_id , 'email_hauptmieter_2', $_POST['input_19']);

        if(isset($_POST['input_65.1'])){
        update_post_meta( $current_post_id , 'anrede_buerge_2', $_POST['input_62']);
        update_post_meta( $current_post_id , 'vorname_buerge_2', $_POST['input_63']);
        update_post_meta( $current_post_id , 'name_buerge_2', $_POST['input_64']);
        update_post_meta( $current_post_id , 'email_buerge_2', $_POST['input_66']);
        }
        }

        if($_POST['input_5'] >2){
        //Hauptmieter 3
        update_post_meta( $current_post_id , 'anrede_hauptmieter_3', $_POST['input_35']);
        update_post_meta( $current_post_id , 'vorname_hauptmieter_3', $_POST['input_23']);
        update_post_meta( $current_post_id , 'name_hauptmieter_3', $_POST['input_22']);
        update_post_meta( $current_post_id , 'email_hauptmieter_3', $_POST['input_24']);

        if(isset($_POST['input_68.1'])){
        update_post_meta( $current_post_id , 'anrede_buerge_3', $_POST['input_69']);
        update_post_meta( $current_post_id , 'vorname_buerge_3', $_POST['input_70']);
        update_post_meta( $current_post_id , 'name_buerge_3', $_POST['input_71']);
        update_post_meta( $current_post_id , 'email_buerge_3', $_POST['input_72']);
        }
        }

        if($_POST['input_5'] >3){
        //Hauptmieter 4
        update_post_meta( $current_post_id , 'anrede_hauptmieter_4', $_POST['input_36']);
        update_post_meta( $current_post_id , 'vorname_hauptmieter_4', $_POST['input_27']);
        update_post_meta( $current_post_id , 'name_hauptmieter_4', $_POST['input_28']);
        update_post_meta( $current_post_id , 'email_hauptmieter_4', $_POST['input_29']);


        if(isset($_POST['input_68.1'])){
        update_post_meta( $current_post_id , 'anrede_buerge_4', $_POST['input_75']);
        update_post_meta( $current_post_id , 'vorname_buerge_4', $_POST['input_76']);
        update_post_meta( $current_post_id , 'name_buerge_4', $_POST['input_77']);
        update_post_meta( $current_post_id , 'email_buerge_4', $_POST['input_78']);
        }
        }

        if($_POST['input_5'] >4){
        //Hauptmieter 5
        update_post_meta( $current_post_id , 'anrede_hauptmieter_5', $_POST['input_37']);
        update_post_meta( $current_post_id , 'vorname_hauptmieter_5', $_POST['input_32']);
        update_post_meta( $current_post_id , 'name_hauptmieter_5', $_POST['input_33']);
        update_post_meta( $current_post_id , 'email_hauptmieter_5', $_POST['input_34']);

        if(isset($_POST['input_73.1'])){
        update_post_meta( $current_post_id , 'anrede_buerge_5', $_POST['input_81']);
        update_post_meta( $current_post_id , 'vorname_buerge_5', $_POST['input_82']);
        update_post_meta( $current_post_id , 'name_buerge_5', $_POST['input_83']);
        update_post_meta( $current_post_id , 'email_buerge_5', $_POST['input_84']);
        }
        }

        //Eugen Einladungen verschicken
        switch (true) {
            case (get_post_meta( $current_post_id, 'anzahl_hauptmieter', true ) == 2 ):
                eugen_invite($current_post_id, 2);
                break;
            case (get_post_meta( $current_post_id, 'anzahl_hauptmieter', true ) == 3 ):
                eugen_invite($current_post_id, 2);
                eugen_invite($current_post_id, 3);
                break;
            case (get_post_meta( $current_post_id, 'anzahl_hauptmieter', true ) == 4 ):
                eugen_invite($current_post_id, 2);
                eugen_invite($current_post_id, 3);
                eugen_invite($current_post_id, 4);
                break;
            case (get_post_meta( $current_post_id, 'anzahl_hauptmieter', true ) == 5 ):
                eugen_invite($current_post_id, 2);
                eugen_invite($current_post_id, 3);
                eugen_invite($current_post_id, 4);
                eugen_invite($current_post_id, 5);
                break;
        }



    }
    //Wenn nicht Hauptmieter 1
    else {
        $nummer_inviter = $_GET['nummer_inviter'];
        $current_post_id = $_GET['boni_post_id'];

    }

      //Bonität Hauptmieter 1 auf abgeschlossen setzen
      update_post_meta( $current_post_id , 'boni_abgeschlossen_hauptmieter_'.$nummer_inviter, 1);
      update_post_meta( $current_post_id, 'boni_ergebnis_hauptmieter_'.$nummer_inviter, 1 );
      update_post_meta( $current_post_id, 'boni_gemacht_hauptmieter_'.$nummer_inviter, 1 );
	  update_post_meta( $current_post_id, 'boni_art_hauptmieter_'.$nummer_inviter,  'm');
	  $bonistand_neu = intval(get_post_meta( $current_post_id, 'anzahl_durchgefuehrter_bonis', true )) +1;
	  update_post_meta( $current_post_id, 'anzahl_durchgefuehrter_bonis',  $bonistand_neu );
      bonistand_update ($current_post_id );
        // Restore original Post Data
      wp_reset_postdata();

}

//Create Uploade Folder
add_filter( 'gform_upload_path', 'change_upload_path', 10, 2 );
function change_upload_path( $path_info, $form_id ) {


    //Fals Hauptmieter 1
if(isset($_GET['uuid'])){
    // WP_Query to get the BoniPostID
    $args = array (
        'post_type'              => 'bonitaet',
        'meta_query'             => array(
            array(
                'key'       => 'onoffice_url_hash',
                'value'     => $_GET['uuid'],
            ),
        ),
    );

// The Query
    $query = new WP_Query( $args );

// The Loop
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $current_post_id = get_the_ID();

        }
    }
    $nummer_inviter = 1;

}
else {
    $nummer_inviter = $_GET['nummer_inviter'];
    $current_post_id = $_GET['boni_post_id'];
    bonistand_update ($current_post_id );
}


//Create Uploade-Folder
   
    $path_info['path'] = EUGEN_OPT_PLUGIN_DIR.'pdf/manuell/'.$current_post_id.'/'.$nummer_inviter;
    return $path_info;
}

