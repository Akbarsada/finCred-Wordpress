<?php

function enqueue_plugin_styles() {

if (is_page_template( 'boni-check-template.php' ) ||
    is_page_template( 'boni-request-template.php' ) ||
    is_page_template( 'boni-check-template-weitere.php') ||
    is_page_template( 'boni-check-template-manuell.php' )) {

    wp_enqueue_style('eugen_css_main_frontend_style',  EUGEN_OPT_PLUGIN_URL.'asset/css/plugin_main.css');
    wp_enqueue_style('eugen_css_main_materialize_fonts',  'https://fonts.googleapis.com/icon?family=Material+Icons');

    wp_enqueue_style('fontawsome_css',  '//kit.fontawesome.com');
    wp_enqueue_style('fontgoogle_api',  '//fonts.googleapis.com');

    wp_enqueue_script('boni_js_main_script',   EUGEN_OPT_PLUGIN_URL.'asset/js/materialize.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('custom_script',   EUGEN_OPT_PLUGIN_URL.'asset/js/custom.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('fontawsome_js',   'https://kit.fontawesome.com/181fca8984.js', array('jquery'), '1.0.0', true);
}

}

add_action('wp_enqueue_scripts', 'enqueue_plugin_styles');

