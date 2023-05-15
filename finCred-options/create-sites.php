<?php

add_action( 'admin_init', 'create_bonicheck_init' );
function create_bonicheck_init() {
    if ( ! get_option( 'boni_check_created' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'boni-check',
            'post_type'      => 'page',
            'post_name'      => 'boni-check',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'boni-check-template.php'
        ) );

        update_option( 'boni_check_created', true );
        update_option( 'boni_check_post_id', $new_page_id );
    }
}
$boni_check_post_id = get_option( 'boni_check_post_id');
add_action('delete_post', 'bonicheck_deleted_post');
function bonicheck_deleted_post($boni_check_post_id){
    update_option( 'boni_check_created', false );
};

//create boni-check weitere
add_action( 'admin_init', 'create_bonicheck_weitere_init' );
function create_bonicheck_weitere_init() {
    if ( ! get_option( 'boni_check_weitere_created' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'boni-check-weitere',
            'post_type'      => 'page',
            'post_name'      => 'boni-check-weitere',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'boni-check-template-weitere.php'
        ) );

        update_option( 'boni_check_weitere_created', true );
        update_option( 'boni_check_weitere_post_id', $new_page_id );
    }
}

$boni_check_weitere_post_id = get_option( 'boni_check_weitere_post_id');
add_action('delete_post', 'bonicheck_weitere_deleted_post');
function bonicheck_weitere_deleted_post($boni_check_weitere_post_id){
    update_option( 'boni_check_weitere_created', false );
};


//create boni-request
add_action( 'admin_init', 'create_boni_request_init' );
function create_boni_request_init() {
    if ( ! get_option( 'boni_check_request_created' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'boni-check-request',
            'post_type'      => 'page',
            'post_name'      => 'boni-check-request',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'boni-request-template.php'
        ) );

        update_option( 'boni_check_request_created', true );
        update_option( 'boni_request_post_id', $new_page_id );
    }
}

$boni_request_post_id = get_option( 'boni_request_post_id');
add_action('delete_post', 'boni_request_deleted_post');
function boni_request_deleted_post($boni_request_post_id){
    update_option( 'boni_check_request_created', false );
};

//create boni-request-weitere
add_action( 'admin_init', 'create_boni_request_weitere_init' );
function create_boni_request_weitere_init() {
    if ( ! get_option( 'boni_check_request_weitere_created' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'boni-request-weitere',
            'post_type'      => 'page',
            'post_name'      => 'boni-request-weitere',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'boni-request-weitere-template.php'
        ) );

        update_option( 'boni_check_request_weitere_created', true );
        update_option( 'boni_request_weitere_post_id', $new_page_id );
    }
}

$boni_request_weitere_post_id = get_option( 'boni_request_weitere_post_id');
add_action('delete_post', 'boni_request_weitere_deleted_post');
function boni_request_weitere_deleted_post($boni_request_weitere_post_id){
    update_option( 'boni_check_request_weitere_created', false );
};

//create boni-check-manuell
add_action( 'admin_init', 'create_boni_check_manuell_init' );
function create_boni_check_manuell_init() {
    if ( ! get_option( 'boni_check_manuell_created' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'boni-check-manuell',
            'post_type'      => 'page',
            'post_name'      => 'boni-check-manuell',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0,
            // Assign page template
            'page_template'  => 'boni-check-template-manuell.php'
        ) );

        update_option( 'boni_check_manuell_created', true );
        update_option( 'boni_check_manuell_post_id', $new_page_id );
    }
}

$boni_check_manuell_post_id = get_option( 'boni_check_manuell_post_id');
add_action('delete_post', 'boni_check_manuell_deleted_post');
function boni_check_manuell_deleted_post($boni_check_manuell_post_id){
    update_option( 'boni_check_manuell_created', false );
};