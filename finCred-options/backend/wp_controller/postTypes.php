<?php

/*function create_appartment_PostType() {

    $labels = [
        'name'                  => _x( 'Immobilien', 'Post Type General Name', 'eugen' ),
        'singular_name'         => _x( 'Apartment', 'Post Type Singular Name', 'eugen' ),
        'menu_name'             => _x( 'Immobilien', 'Admin Menu text', 'eugen' ),
        'name_admin_bar'        => _x( 'Immobilien', 'Add New on Toolbar', 'eugen' ),
        'archives'              => __( 'Apartment Archives', 'eugen' ),
        'attributes'            => __( 'Apartment Attributes', 'eugen' ),
        'parent_item_colon'     => __( 'Parent Apartment:', 'eugen' ),
        'all_items'             => __( 'Alle Immobilien', 'eugen' ),
        'add_new_item'          => __( 'Add New Apartment', 'eugen' ),
        'add_new'               => __( 'Add New', 'eugen' ),
        'new_item'              => __( 'New Apartment', 'eugen' ),
        'edit_item'             => __( 'Edit Apartment', 'eugen' ),
        'update_item'           => __( 'Update Apartment', 'eugen' ),
        'view_item'             => __( 'View Apartment', 'eugen' ),
        'view_items'            => __( 'View Apartments', 'eugen' ),
        'search_items'          => __( 'Search Apartment', 'eugen' ),
        'not_found'             => __( 'Not found', 'eugen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eugen' ),
        'featured_image'        => __( 'Featured Image', 'eugen' ),
        'set_featured_image'    => __( 'Set featured image', 'eugen' ),
        'remove_featured_image' => __( 'Remove featured image', 'eugen' ),
        'use_featured_image'    => __( 'Use as featured image', 'eugen' ),
        //'insert_into_item'      => __( 'Insert into Apartment', 'eugen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Apartment', 'eugen' ),
        'items_list'            => __( 'Apartments list', 'eugen' ),
        'items_list_navigation' => __( 'Apartments list navigation', 'eugen' ),
        'filter_items_list'     => __( 'Filter Apartments list', 'eugen' ),
    ];
    $args   = [
        'label'               => __( 'Apartment', 'eugen' ),
        'description'         => __( 'The apartments', 'eugen' ),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-home',
        'supports'            => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'author',
            'comments',
            'trackbacks',
            'page-attributes',
            'custom-fields',
        ],
        'taxonomies'          => [],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    ];

    register_post_type( 'apartments', $args );

}

add_action( 'init', 'create_appartment_PostType' , 0 );*/



function create_bonitaets_PostType() {

    $labels = [
        'name'                  => _x( 'Bonitätsprüfungen', 'Post Type General Name', 'eugen' ),
        'singular_name'         => _x( 'Bonitätsprüfung', 'Post Type Singular Name', 'eugen' ),
        'menu_name'             => _x( 'Bonitätsprüfung', 'Admin Menu text', 'eugen' ),
        'name_admin_bar'        => _x( 'Bonitätsprüfungen', 'Add New on Toolbar', 'eugen' ),
        'archives'              => __( 'Bonitätsprüfungen Archives', 'eugen' ),
        'attributes'            => __( 'Bonitätsprüfungen Attributes', 'eugen' ),
        'parent_item_colon'     => __( 'Parent Bonitätsprüfungen:', 'eugen' ),
        'all_items'             => __( 'Alle Bonitätsprüfungen', 'eugen' ),
        'add_new_item'          => __( 'Add New Bonitätsprüfung', 'eugen' ),
        'add_new'               => __( 'Add New', 'eugen' ),
        'new_item'              => __( 'New Bonitätsprüfung', 'eugen' ),
        'edit_item'             => __( 'Edit Bonitätsprüfung', 'eugen' ),
        'update_item'           => __( 'Update Bonitätsprüfung', 'eugen' ),
        'view_item'             => __( 'View Bonitätsprüfung', 'eugen' ),
        'view_items'            => __( 'View Bonitätsprüfungen', 'eugen' ),
        'search_items'          => __( 'Search Bonitätsprüfungen', 'eugen' ),
        'not_found'             => __( 'Not found', 'eugen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eugen' ),
        'featured_image'        => __( 'Featured Image', 'eugen' ),
        'set_featured_image'    => __( 'Set featured image', 'eugen' ),
        'remove_featured_image' => __( 'Remove featured image', 'eugen' ),
        'use_featured_image'    => __( 'Use as featured image', 'eugen' ),
        //'insert_into_item'      => __( 'Insert into Apartment', 'eugen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Bonitätsprüfung', 'eugen' ),
        'items_list'            => __( 'Bonitätsprüfungen list', 'eugen' ),
        'items_list_navigation' => __( 'Bonitätsprüfungen list navigation', 'eugen' ),
        'filter_items_list'     => __( 'Filter Bonitätsprüfungen list', 'eugen' ),

    ];
    $args   = [
        'label'               => __( 'Bonitätsprüfungen', 'eugen' ),
        'description'         => __( 'Bonitätsprüfungen', 'eugen' ),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-money',
        'supports'            => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'author',
            'comments',
            'trackbacks',
            'page-attributes',
            'custom-fields',
        ],
        'taxonomies'          => [],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    ];

    register_post_type( 'bonitaet', $args );

}

add_action( 'init', 'create_bonitaets_PostType' , 0 );


//remove Post Icon

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	remove_menu_page( 'edit.php' );
}
