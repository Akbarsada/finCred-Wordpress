<?php
function download_pdf(){

    $fin_Daten = array();
    $boni_post_id = $_GET['post'];


    $download_file = EUGEN_OPT_PLUGIN_DIR .'pdf/AUSGABE_'.$boni_post_id.'.pdf';
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($download_file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');


    header('Content-Length: ' . filesize($download_file));
    ob_end_clean();
    readfile($download_file);
    exit;

    $fin_Daten ['onOffice_secret'] = $boni_post_id;
    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
add_action('wp_ajax_nopriv_download_pdf', 'download_pdf');
add_action('wp_ajax_download_pdf', 'download_pdf');