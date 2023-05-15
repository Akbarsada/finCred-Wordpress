<?php
function frontend_buerge2_5_php(){

    $fin_Daten = array();

    $boni_post_id = $_POST['boni_post_id'];
    $nummer_inviter = $_POST['nummer_inviter'];





    update_post_meta( $boni_post_id , 'anrede_buerge_'.$_POST['nummer_inviter'], $_POST['anrede_brg'.$_POST['nummer_inviter']]);
    update_post_meta( $boni_post_id , 'vorname_buerge_'.$_POST['nummer_inviter'], $_POST['vorname_brg'.$_POST['nummer_inviter']]);
    update_post_meta( $boni_post_id , 'name_buerge_'.$_POST['nummer_inviter'], $_POST['nachname_brg'.$_POST['nummer_inviter']]);
    update_post_meta( $boni_post_id , 'email_buerge_'.$_POST['nummer_inviter'], $_POST['email_brg'.$_POST['nummer_inviter']]);
    update_post_meta( $boni_post_id , 'hat_buerge_hauptmieter_'.$_POST['nummer_inviter'], 1);

    eugen_invite($boni_post_id, $_POST['nummer_inviter']);



    $fin_Daten['site_url'] = site_url();
    header("Location: https://staging.eugen.immo/");

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
add_action('wp_ajax_nopriv_frontend_buerge2_5_php', 'frontend_buerge2_5_php');
add_action('wp_ajax_frontend_buerge2_5_php', 'frontend_buerge2_5_php');