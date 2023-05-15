<?php



//Metaboxes



add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    global $pagenow;

    if ( 'post.php' === $pagenow && isset($_GET['post']) && 'bonitaet' === get_post_type( $_GET['post'] ) ) {
        //css main style
        wp_enqueue_style('fin_css_main_style',  EUGEN_OPT_PLUGIN_URL.'asset/css/materialize.min.css');
        wp_enqueue_style('fin_css_main_style');

        wp_enqueue_style('boni_custom_css_main_style',  EUGEN_OPT_PLUGIN_URL.'asset/css/boni_css.css');
        wp_enqueue_style('boni_custom_css_main_style');


        wp_register_script('bfin_js_main_script',   EUGEN_OPT_PLUGIN_URL.'asset/js/materialize.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('bfin_js_main_script');
        //js custom script
        wp_register_script('boni_custom_js_main_script',   EUGEN_OPT_PLUGIN_URL.'asset/js/backend_js.js', '', '1.0.0', true);
        wp_enqueue_script('boni_custom_js_main_script');

    }
}


add_action('init', 'my_rem_editor_from_post_type');
function my_rem_editor_from_post_type() {
    remove_post_type_support( 'bonitaet', 'editor' );
}

add_action( 'admin_menu', 'misha_add_metabox' );
// or add_action( 'add_meta_boxes', 'misha_add_metabox' );
// or add_action( 'add_meta_boxes_{post_type}', 'misha_add_metabox' );





function misha_add_metabox() {

    add_meta_box(
        'misha_metabox', // metabox ID
        'Informationen', // title
        'misha_metabox_callback', // callback function
        'bonitaet', // add meta box to custom post type (or post types in array)
        'normal', // position (normal, side, advanced)
        'default' // priority (default, low, high, core)
    );

}

// it is a callback function which actually displays the content of the meta box
function misha_metabox_callback( $post ) {

include 'meta_box.php';

}