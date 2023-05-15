<?php
function fin_api_key_cb(){
    $fin_Daten = array();


    update_option( 'fin_server', $_POST['fin_server'] );
    update_option( 'fin_api_key', $_POST['fin_api_key'] );

    $fin_Daten ['fin_server'] = get_option( 'fin_server');
    $fin_Daten ['fin_api_key'] = get_option( 'fin_api_key' );

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
// add_action('wp_ajax_fin_api_key_cb', 'fin_api_key_cb');
add_action('wp_ajax_fin_api_key_cb', 'fin_api_key_cb');