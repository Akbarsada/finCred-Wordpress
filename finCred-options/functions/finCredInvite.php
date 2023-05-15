<?php

function bonitaetEinladung ($wp_boni_post_id, $prop_id, $anrede, $firstname, $lastname, $email, $nummer ) {
    require_once(FIN_AUTOLOADER_DIR);
    $client = new \GuzzleHttp\Client();
    global $appartment_id;

    $finCredInvite_ID_Key = 'boni_invite_id_hauptmieter_'.$nummer;
    $finCredInvite_url_Key = 'boni_invite_url_hauptmieter_'.$nummer;
    $finCredInvite_status_Key = 'boni_status_hauptmieter_'.$nummer;
    $finCredInvite_versendet_Key = 'boni_versendet_hauptmieter_'.$nummer;
    $finCredInvite_boni_art_Key = 'boni_art_hauptmieter_'.$nummer;

    $status_boni = get_post_meta($wp_boni_post_id , 'boni_abgeschlossen_hauptmieter_'.$nummer, true);
    // abfragen ob die Bonität bereits durchgeführt wurde
    if($status_boni == 1){
        global $context;
        $context['error_status'] = 'boni_abgeschlossen';
    }
    // wenn Bonität noch nicht durchgeführt wurde, eine Bonität durchführen
    else{
        try {
            $response = $client->request( 'POST',  get_option( 'fin_server').'properties/' . $prop_id . '/invite', [
                'form_params' => [
                    'email'        => $email,
                    'firstname'    => $firstname,
                    'lastname'     => $lastname,
                    'billing_type' => 'STANDARD'
                ],
                'headers'     => [
                    'Authorization' => 'Bearer ' . get_option( 'fin_api_key' ),
                    'accept'        => 'application/json',
                    'content-type'  => 'application/x-www-form-urlencoded',
                ],
            ] );

            $dataInvite =  json_decode($response->getBody(), true);
            $dataInvite_createdId = $dataInvite['data']['createdId'];
            // update_post_meta( $_GET['boni_post_id'], 'finCredible_invite_ID',  $dataInvite_createdId);
            update_post_meta( $wp_boni_post_id, $finCredInvite_ID_Key,  $dataInvite_createdId);
            $dataInvite_url = $dataInvite['data']['email_url'];
            update_post_meta( $wp_boni_post_id, $finCredInvite_url_Key,  $dataInvite_url);
            $dataInvite_status = $dataInvite['status'];
            update_post_meta( $wp_boni_post_id, $finCredInvite_status_Key,  $dataInvite_status);
            update_post_meta( $wp_boni_post_id, $finCredInvite_boni_art_Key,  'e');

            //make a key_value pair with $dataInvite_createdId - $dataInvite_createdId
            add_post_meta($wp_boni_post_id, $dataInvite_createdId , $dataInvite_createdId);
            //make a key_value pair with $wp_boni_post_id_dataInvite_createdId - $nummer
            add_post_meta($wp_boni_post_id, $wp_boni_post_id.'_'. $dataInvite_createdId, $nummer);

            //for Twig
            global $context;
            $context[$finCredInvite_url_Key] = $dataInvite_url;
            $context[$finCredInvite_status_Key] = $dataInvite_status;
            $context[$finCredInvite_ID_Key] = $dataInvite_createdId;

            update_post_meta( $wp_boni_post_id, $finCredInvite_versendet_Key, 1 );
            header("Location: $dataInvite_url");
        }
        catch (Exception $e) {
            global $context;
            $response = $e->getResponse();
            $dataInvite_resp =  json_decode($response->getBody(), true);
            $dataInvite_resp['status'];
            $context['finCred_error'] = $dataInvite_resp['error'];
            $context['error_status'] = 'fin_error';

        }
    }






}
