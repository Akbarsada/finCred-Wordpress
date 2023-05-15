<?php

function readPropSettings_cb(){
	$readPropSettings_array = array();
	$fin_immo_id = $_POST['fin_immo_id'];


	require_once(FIN_AUTOLOADER_DIR);

	$client = new \GuzzleHttp\Client();

	$response = $client->request('GET', get_option('fin_server') . '/properties/'.$fin_immo_id, [
		'headers' => [
			'Authorization' => 'Bearer ' . get_option('fin_api_key'),
			'accept' => 'application/json',
		],
	]);

    $data =  json_decode($response->getBody(), true);



    //Übergabe
    $readPropSettings_array ['property_status'] = $data['status'];
    $readPropSettings_array ['property_id'] = $data['data']['property_id'];
    $readPropSettings_array ['property_ref'] = $data['data']['property_ref'];
    $readPropSettings_array ['platform_id'] = $data['data']['platform_id'];
    $readPropSettings_array ['property_user_id'] = $data['data']['user_id'];
    $readPropSettings_array ['property_description'] = $data['data']['description'];
    $readPropSettings_array ['street'] = $data['data']['street'];
    $readPropSettings_array ['house_number'] = $data['data']['house_number'];
    $readPropSettings_array ['property_top'] = $data['data']['top'];
    $readPropSettings_array ['zipcode'] = $data['data']['zipcode'];
    $readPropSettings_array ['city'] = $data['data']['city'];
    $readPropSettings_array ['country'] = $data['data']['country'];
    $readPropSettings_array ['property_type'] = $data['data']['property_type'];
    $readPropSettings_array ['rent'] = $data['data']['rent'];
    $readPropSettings_array ['rent_currency'] = $data['data']['currency'];
    $readPropSettings_array ['features_list'] = $data['data']['features_list'];
    $readPropSettings_array ['image_url'] = $data['data']['image_url'];
    $readPropSettings_array ['criterias'] = $data['data']['criterias'];
    $readPropSettings_array ['property_completed'] = $data['data']['completed'];
    $readPropSettings_array ['created_at'] = $data['data']['created_at'];
    $readPropSettings_array ['updated_at'] = $data['data']['updated_at'];
    $readPropSettings_array ['invites'] = $data['data']['invites'];

    //Datenbank
    update_option( 'immo_option_status',$data['status'] );
    update_option( 'immo_option_property_id',$data['data']['property_id'] );
    update_option( 'immo_option_property_ref',$data['data']['property_ref'] );
    update_option( 'immo_option_platform_id',$data['data']['platform_id'] );
    update_option( 'immo_option_user_id',$data['data']['user_id'] );
    update_option( 'immo_option_description',$data['data']['description'] );
    update_option( 'immo_option_street',$data['data']['street'] );
    update_option( 'immo_option_house_number',$data['data']['house_number'] );
    update_option( 'immo_option_top',$data['data']['top'] );
    update_option( 'immo_option_zipcode',$data['data']['zipcode'] );
    update_option( 'immo_option_city',$data['data']['city'] );
    update_option( 'immo_option_country',$data['data']['country'] );
    update_option( 'immo_option_property_type',$data['data']['property_type'] );
    update_option( 'immo_option_rent',$data['data']['rent'] );
    update_option( 'immo_option_currency',$data['data']['currency'] );
    update_option( 'immo_option_features_list',$data['data']['features_list'] );
    update_option( 'immo_option_image_url',$data['data']['image_url'] );
    update_option( 'immo_option_criterias',$data['data']['criterias'] );
    update_option( 'immo_option_completed',$data['data']['completed'] );
    update_option( 'immo_option_created_at',$data['data']['created_at'] );
    update_option( 'immo_option_updated_at',$data['data']['updated_at'] );
    update_option( 'immo_option_invites',$data['data']['invites'] );



	wp_send_json_success( $readPropSettings_array );
	return true;
	wp_die();
}
// add_action('wp_ajax_nopriv_readPropSettings_cb', 'readPropSettings_cb');
add_action('wp_ajax_readPropSettings_cb', 'readPropSettings_cb');















