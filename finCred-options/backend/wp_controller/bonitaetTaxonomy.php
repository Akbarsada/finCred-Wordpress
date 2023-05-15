<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy offen
 function create_immo_open_taxonomy() {

    $labels = [
        'name'              => _x( 'Bonitätsprüfung offen', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Bonitätsprüfung offen', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Bonitätsprüfung offen', 'eugen' ),
        'all_items'         => __( 'Alle offenen Bonitätsprüfungen', 'eugen' ),
        'parent_item'       => __( 'Parent Bonitätsprüfung offen', 'eugen' ),
        'parent_item_colon' => __( 'Parent Bonitätsprüfung offen:', 'eugen' ),
        'edit_item'         => __( 'Edit Land', 'eugen' ),
        'update_item'       => __( 'Update Land', 'eugen' ),
        'add_new_item'      => __( 'Add New Land', 'eugen' ),
        'new_item_name'     => __( 'New Type Name', 'eugen' ),
        'menu_name'         => __( 'offen', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Bonitätsprüfung offen', 'eugen' ),
        'hierarchical'       => false,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_quick_edit' => true,
        'show_admin_column'  => true,
        'show_in_rest'       => true,
    ];

    register_taxonomy( 'offen', [ 'bonitaet' ], $args );

}
add_action( 'init',  'create_immo_open_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy abgeschlossen
 function create_immo_closed_taxonomy() {

    $labels = [
        'name'              => _x( 'Bonitätsprüfung geschlossen', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Bonitätsprüfung geschlossen', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Bonitätsprüfung geschlossen', 'eugen' ),
        'all_items'         => __( 'Alle geschlossenen Bonitätsprüfungen', 'eugen' ),
        'parent_item'       => __( 'Parent Bonitätsprüfung geschlossen', 'eugen' ),
        'parent_item_colon' => __( 'Parent Bonitätsprüfung geschlossen:', 'eugen' ),
        'edit_item'         => __( 'Edit Land', 'eugen' ),
        'update_item'       => __( 'Update Land', 'eugen' ),
        'add_new_item'      => __( 'Add New Land', 'eugen' ),
        'new_item_name'     => __( 'New Type Name', 'eugen' ),
        'menu_name'         => __( 'geschlossen', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Bonitätsprüfung geschlossen', 'eugen' ),
        'hierarchical'       => false,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_quick_edit' => true,
        'show_admin_column'  => true,
        'show_in_rest'       => true,
    ];
    register_taxonomy( 'geschlossen', [ 'bonitaet' ], $args );

}
add_action( 'init',  'create_immo_closed_taxonomy' );
