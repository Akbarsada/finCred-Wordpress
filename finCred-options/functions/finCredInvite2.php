<?php


///Funktion für die Bonitätseinladung
function bonitaetEinladung2 ($wp_boni_post_id, $prop_id, $anrede, $firstname, $lastname, $email, $nummer ) {
    require_once(FIN_AUTOLOADER_DIR);
    $client = new \GuzzleHttp\Client();
    global $appartment_id;

    $finCredInvite_ID_Key = 'boni_invite_id_hauptmieter_'.$nummer;
    $finCredInvite_url_Key = 'boni_invite_url_hauptmieter_'.$nummer;
    $finCredInvite_status_Key = 'boni_status_hauptmieter_'.$nummer;
    $finCredInvite_versendet_Key = 'boni_versendet_hauptmieter_'.$nummer;
    $finCredInvite_boni_art_Key = 'boni_art_hauptmieter_'.$nummer;

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
        //html mail
        $headers = array('Content-Type: text/html; charset=UTF-8');
        //TODO Email Reminder nach 6 Stunden
       // $message = '<div style="color: red;"><a href="'.$dataInvite_url. '"></a>Link zur Bonitätsprüfung</div>';
        //wp_mail( $email, 'Titel', $message, $headers );


        update_post_meta( $wp_boni_post_id, $finCredInvite_versendet_Key, 1 );

        header("Location: $dataInvite_url");
    }
    catch (Exception $e) {
        global $context;

      //  $response = $e->getResponse();
     //   $dataInvite_resp =  json_decode($response->getBody(), true);
       // echo $dataInvite_resp['status'];
      //  $context['errorMessage_email'] = $dataInvite_resp['error'];

        var_dump($e);


    }

}
