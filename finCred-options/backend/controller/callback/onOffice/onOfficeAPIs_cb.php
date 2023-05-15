<?php
function onOffice_api_key_cb(){
    $fin_Daten = array();

    update_option( 'onOffice_anzahl_objekte', intval($_POST['onOffice_anzahl_objekte']) );
    update_option( 'onOffice_token', $_POST['onOffice_token'] );
    update_option( 'onOffice_secret', $_POST['onOffice_secret'] );

    $fin_Daten ['onOffice_anzahl_objekte'] = get_option( 'onOffice_anzahl_objekte');
    $fin_Daten ['onOffice_token'] = get_option( 'onOffice_token');
    $fin_Daten ['onOffice_secret'] = get_option( 'onOffice_secret' );

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
// add_action('wp_ajax_onOffice_api_key_cb', 'onOffice_api_key_cb');
add_action('wp_ajax_onOffice_api_key_cb', 'onOffice_api_key_cb');