<?php

add_action( 'gform_after_submission_'. get_option( 'fin_gf_id'), 'inviteToCredit', 10, 2 );
function inviteToCredit( $entry, $form ) {

    require_once(FIN_AUTOLOADER_DIR);


//FinCredible Objekt anlegen
//
//

    $objekt = new \GuzzleHttp\Client();

//Objekt
    $response = $objekt->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/create', [
        'form_params' => [
            'property_ref' => get_option( 'fin_objekttitel'),
            'description' => get_option( 'fin_objektbeschreibung'),
            'country' => get_option( 'fin_land'),
            'city' => get_option( 'fin_ort'),
            'zipcode' => get_option( 'fin_plz'),
            'street' => get_option( 'fin_strasse'),
            'house_number' => get_option( 'fin_hausnummer'),
            'top' => get_option( 'fin_hausnummer'),
            'currency' => '500',
            'rent' => get_option( 'fin_hausnummer'),
            'criterias' => 'RMIN40',
        ],
        'headers' => [
            'Authorization' => 'Bearer '.get_option('fin_api_key'),
            'accept' => 'application/json',
            'content-type' => 'application/x-www-form-urlencoded',
        ],
    ]);

    $objekt_data =  json_decode($response->getBody(), true);

    $objekt_id = $objekt_data['data']['createdId'];

    $objekt_email_url =  $objekt_data['data']['email_url'];

//Mieter 1

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/'.$objekt_id.'/invite', [
            'form_params' => [
                'email' => rgar( $entry, '13' ),
                'firstname' => get_option('fin_Vorname'),
                'lastname' => get_option('fin_Name'),
                'billing_type' => 'BYINVITED'
            ],
            'headers' => [
                'Authorization' => 'Bearer '.get_option('fin_api_key'),
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

        //echo $response->getBody();




//Mieter 2

    if ( ! empty( rgpost( 'input_1_19' ) )){

        $client2 = new \GuzzleHttp\Client();

        $response = $client2->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/'.$objekt_id.'/invite', [
            'form_params' => [
                'email' => rgar( $entry, '19' ),
                'firstname' => rgar( $entry, '17' ),
                'lastname' => rgar( $entry, '18' ),
                'billing_type' => 'BYINVITED'
            ],
            'headers' => [
                'Authorization' => 'Bearer '.get_option('fin_api_key'),
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

       // echo $response->getBody();

    }


//Mieter 3

    if ( ! empty( rgpost( 'input_1_24' ) )){

        $client3 = new \GuzzleHttp\Client();

        $response = $client3->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/'.$objekt_id.'/invite', [
            'form_params' => [
                'email' => rgar( $entry, '24' ),
                'firstname' => rgar( $entry, '23' ),
                'lastname' => rgar( $entry, '22' ),
                'billing_type' => 'BYINVITED'
            ],
            'headers' => [
                'Authorization' => 'Bearer '.get_option('fin_api_key'),
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

       // echo $response->getBody();

    }


//Mieter 4

    if ( ! empty( rgpost( 'input_1_29' ) )){

        $client4 = new \GuzzleHttp\Client();

        $response = $client4->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/'.$objekt_id.'/invite', [
            'form_params' => [
                'email' => rgar( $entry, '29' ),
                'firstname' => rgar( $entry, '27' ),
                'lastname' => rgar( $entry, '28' ),
                'billing_type' => 'BYINVITED'
            ],
            'headers' => [
                'Authorization' => 'Bearer '.get_option('fin_api_key'),
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

       // echo $response->getBody();

    }

//Mieter 5

    if ( ! empty( rgpost( 'input_1_34' ) )){

        $client5 = new \GuzzleHttp\Client();

        $response = $client5->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/'.$objekt_id.'/invite', [
            'form_params' => [
                'email' => rgar( $entry, '34' ),
                'firstname' => rgar( $entry, '32' ),
                'lastname' => rgar( $entry, '33' ),
                'billing_type' => 'BYINVITED'
            ],
            'headers' => [
                'Authorization' => 'Bearer '.get_option('fin_api_key'),
                'accept' => 'application/json',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

       // echo $response->getBody();

    }




}