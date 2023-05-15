<?php
function frontend_buerge1_php(){

    $fin_Daten = array();

    $boni_post_id = $_POST['boni_post_id'];



    //Anzahl Hauptmieter & Personen
    update_post_meta( $boni_post_id , 'anzahl_hauptmieter', $_POST['anzahlMieter']);
    update_post_meta( $boni_post_id , 'anzahl_bewohner', $_POST['anzahlBewohner']);

    //Einzugstermin Wunsch & Alternativ
    update_post_meta( $boni_post_id , 'einzugstermin_wunsch', $_POST['einzugstermin_wunsch']);
    update_post_meta( $boni_post_id , 'einzugstermin_alternative', $_POST['einzugstermin_alternative']);

    //Hauptmieter 1 / nur Bürge
    update_post_meta( $boni_post_id , 'hat_buerge_hauptmieter_1', $_POST['hat_buerge_hp1']);
    // update_post_meta( $boni_post_id , 'boni_art_hauptmieter_1', $_POST['boni_art_hp1']);

    update_post_meta( $boni_post_id , 'anrede_buerge_1', $_POST['anrede_brg1']);
    update_post_meta( $boni_post_id , 'vorname_buerge_1', $_POST['vorname_brg1']);
    update_post_meta( $boni_post_id , 'name_buerge_1', $_POST['nachname_brg1']);
    update_post_meta( $boni_post_id , 'email_buerge_1', $_POST['email_brg1']);

       //Hauptmieter 2
       update_post_meta( $boni_post_id , 'anrede_hauptmieter_2', $_POST['anrede_hp2']);
       update_post_meta( $boni_post_id , 'vorname_hauptmieter_2', $_POST['vorname_hp2']);
       update_post_meta( $boni_post_id , 'name_hauptmieter_2', $_POST['nachname_hp2']);
       update_post_meta( $boni_post_id , 'email_hauptmieter_2', $_POST['email_hp2']);

       update_post_meta( $boni_post_id , 'anrede_buerge_2', $_POST['anrede_brg2']);
       update_post_meta( $boni_post_id , 'vorname_buerge_2', $_POST['vorname_brg2']);
       update_post_meta( $boni_post_id , 'name_buerge_2', $_POST['nachname_brg2']);
       update_post_meta( $boni_post_id , 'email_buerge_2', $_POST['email_brg2']);

       //Hauptmieter 3
       update_post_meta( $boni_post_id , 'anrede_hauptmieter_3', $_POST['anrede_hp3']);
       update_post_meta( $boni_post_id , 'vorname_hauptmieter_3', $_POST['vorname_hp3']);
       update_post_meta( $boni_post_id , 'name_hauptmieter_3', $_POST['nachname_hp3']);
       update_post_meta( $boni_post_id , 'email_hauptmieter_3', $_POST['email_hp3']);

       update_post_meta( $boni_post_id , 'anrede_buerge_3', $_POST['anrede_brg3']);
       update_post_meta( $boni_post_id , 'vorname_buerge_3', $_POST['vorname_brg3']);
       update_post_meta( $boni_post_id , 'name_buerge_3', $_POST['nachname_brg3']);
       update_post_meta( $boni_post_id , 'email_buerge_3', $_POST['email_brg3']);

       //Hauptmieter 4
       update_post_meta( $boni_post_id , 'anrede_hauptmieter_4', $_POST['anrede_hp4']);
       update_post_meta( $boni_post_id , 'vorname_hauptmieter_4', $_POST['vorname_hp4']);
       update_post_meta( $boni_post_id , 'name_hauptmieter_4', $_POST['nachname_hp4']);
       update_post_meta( $boni_post_id , 'email_hauptmieter_4', $_POST['email_hp4']);

       update_post_meta( $boni_post_id , 'anrede_buerge_4', $_POST['anrede_brg4']);
       update_post_meta( $boni_post_id , 'vorname_buerge_4', $_POST['vorname_brg4']);
       update_post_meta( $boni_post_id , 'name_buerge_4', $_POST['nachname_brg4']);
       update_post_meta( $boni_post_id , 'email_buerge_4', $_POST['email_brg4']);

       //Hauptmieter 5
       update_post_meta( $boni_post_id , 'anrede_hauptmieter_5', $_POST['anrede_hp5']);
       update_post_meta( $boni_post_id , 'vorname_hauptmieter_5', $_POST['vorname_hp5']);
       update_post_meta( $boni_post_id , 'name_hauptmieter_5', $_POST['nachname_hp5']);
       update_post_meta( $boni_post_id , 'email_hauptmieter_5', $_POST['email_hp5']);

       update_post_meta( $boni_post_id , 'anrede_buerge_5', $_POST['anrede_brg5']);
       update_post_meta( $boni_post_id , 'vorname_buerge_5', $_POST['vorname_brg5']);
       update_post_meta( $boni_post_id , 'name_buerge_5', $_POST['nachname_brg5']);
       update_post_meta( $boni_post_id , 'email_buerge_5', $_POST['email_brg5']);

/*       $fin_Daten['boni_post_id'] = $_POST['boni_post_id'];
       $fin_Daten['hashtag_objekt'] = $_POST['hashtag_objekt'];
       $fin_Daten['hashtag_kunde'] = $_POST['hashtag_kunde'];
       $fin_Daten['warmmiete'] = $_POST['warmmiete'];
       $fin_Daten['anzahlMieter'] = $_POST['anzahlMieter'];*/


    switch (true) {

        case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 1 ):
            eugen_invite($boni_post_id, 1);
            break;
        case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 2 ):
            eugen_invite($boni_post_id, 1);
            eugen_invite($boni_post_id, 2);
            break;
        case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 3 ):
            eugen_invite($boni_post_id, 1);
            eugen_invite($boni_post_id, 2);
            eugen_invite($boni_post_id, 3);
            break;
        case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 4 ):
            eugen_invite($boni_post_id, 1);
            eugen_invite($boni_post_id, 2);
            eugen_invite($boni_post_id, 3);
            eugen_invite($boni_post_id, 4);
            break;
        case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 5 ):
            eugen_invite($boni_post_id, 1);
            eugen_invite($boni_post_id, 2);
            eugen_invite($boni_post_id, 3);
            eugen_invite($boni_post_id, 4);
            eugen_invite($boni_post_id, 5);
            break;
    }

    $fin_Daten['site_url'] = site_url();


    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
add_action('wp_ajax_nopriv_frontend_buerge1_php', 'frontend_buerge1_php');
add_action('wp_ajax_frontend_buerge1_php', 'frontend_buerge1_php');