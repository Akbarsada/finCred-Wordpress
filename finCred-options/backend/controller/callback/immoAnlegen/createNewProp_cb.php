<?php

function createNewProp_cb(){
    // $form_tab =  $_POST['tab'];

    $createNewProp_array = array();


    //TODO get from onOffice




    $fin_ref = $_POST['fin_ref'];
    $fin_desc = $_POST['fin_desc'];
    $fin_country = $_POST['fin_country'];
    $fin_city = $_POST['fin_city'];
    $fin_plz = $_POST['fin_plz'];
    $fin_street = $_POST['fin_street'];
    $fin_number = $_POST['fin_number'];
    $fin_top = $_POST['fin_top'];
    $fin_miete = $_POST['fin_miete'];
    $fin_prozent = $_POST['fin_prozent'];




    //Kontrolle
    $createNewProp_array ['fin_ref'] = $fin_ref;
    $createNewProp_array ['fin_desc'] = $fin_desc;
    $createNewProp_array ['fin_country'] = $fin_country;
    $createNewProp_array ['fin_city'] = $fin_city;
    $createNewProp_array ['fin_plz'] = $fin_plz;
    $createNewProp_array ['fin_street'] = $fin_street;
    $createNewProp_array ['fin_number'] = $fin_number;
    $createNewProp_array ['fin_top'] = $fin_top;
    $createNewProp_array ['fin_miete'] = $fin_miete;
    $createNewProp_array ['fin_prozent'] = $fin_prozent;




require_once(FIN_AUTOLOADER_DIR);

    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', 'https://api.sandbox.mietcheck.fincredible.at/api/properties/create', [
        'form_params' => [
            'property_ref' => $fin_ref,
            'description' => $fin_desc,
            'country' => $fin_country,
            'city' => $fin_city,
            'zipcode' => $fin_plz,
            'street' => $fin_street,
            'house_number' => $fin_number,
            'top' => $fin_top,
            'currency' => '500',
            'rent' => $fin_miete,
            'criterias' => $fin_prozent
        ],
        'headers' => [
            'Authorization' => 'Bearer 7yuh5loihzplnyjwoagu5wfircz25uf4xvbljlba',
            'accept' => 'application/json',
            'content-type' => 'application/x-www-form-urlencoded',
        ],
    ]);
    $data =  json_decode($response->getBody(), true);
   //
     $createNewProp_array ['fin_response'] = $response->getBody();

    //
    // Create post object

    $custom_tax = array(
        'stadt' => array(
            $fin_city
        ),
        'land' => array(
            $fin_country
        ),
        'plz' => array(
            $fin_plz
        ),
    );

    $appartment = array(

        'post_author'           => 1,
        'post_content'          => $fin_desc,
        'post_content_filtered' => '',
        'post_title'            => wp_strip_all_tags( $fin_ref ),
        'post_excerpt'          => '',
        'post_status'           => 'publish',
        'post_type'             => 'estates',
        'comment_status'        => 'closed',
        'ping_status'           => 'closed',
        'post_password'         => '',
        'to_ping'               => '',
        'pinged'                => '',
        'post_parent'           => 0,
        'menu_order'            => 0,
        'guid'                  => '',
        'context'               => '',
        'post_date'             => '',
        'post_date_gmt'         => '',
        'tax_input'             => $custom_tax,

    );
    // Insert the post into the database
    wp_insert_post( $appartment );


    wp_send_json_success( $createNewProp_array );
    return true;
    wp_die();
}
// add_action('wp_ajax_nopriv_createNewProp_cb', 'createNewProp_cb');
add_action('wp_ajax_createNewProp_cb', 'createNewProp_cb');
