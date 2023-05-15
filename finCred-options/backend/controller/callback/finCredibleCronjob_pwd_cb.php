<?php
function finCredCron_pwd_cb(){
    $fin_Daten = array();


    update_option( 'fincred_cron_pwd', $_POST['fincred_cron_pwd'] );


    $fin_Daten ['fincred_cron_pwd'] = get_option( 'fincred_cron_pwd');

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
// add_action('wp_ajax_finCredCron_pwd_cb', 'finCredCron_pwd_cb');
add_action('wp_ajax_finCredCron_pwd_cb', 'finCredCron_pwd_cb');