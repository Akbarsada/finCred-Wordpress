<?php
function weitere_mieter_php(){

    $fin_Daten = array();

    $boni_post_id = $_POST['boni_post_id'];

    $fin_Daten['boni_post_id'] = $_POST['boni_post_id'];
	$fin_Daten['nummer_inviter'] = $_POST['nummer_inviter'];
    $fin_Daten['site_url'] = site_url();

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
add_action('wp_ajax_nopriv_weitere_mieter_php', 'weitere_mieter_php');
add_action('wp_ajax_weitere_mieter_php', 'weitere_mieter_php');