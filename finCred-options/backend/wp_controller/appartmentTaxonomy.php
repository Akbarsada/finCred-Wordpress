<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Type
 function create_immo_Land_taxonomy() {

    $labels = [
        'name'              => _x( 'Land', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Land', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Land', 'eugen' ),
        'all_items'         => __( 'All Land', 'eugen' ),
        'parent_item'       => __( 'Parent Land', 'eugen' ),
        'parent_item_colon' => __( 'Parent Land:', 'eugen' ),
        'edit_item'         => __( 'Edit Land', 'eugen' ),
        'update_item'       => __( 'Update Land', 'eugen' ),
        'add_new_item'      => __( 'Add New Land', 'eugen' ),
        'new_item_name'     => __( 'New Type Name', 'eugen' ),
        'menu_name'         => __( 'Land', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Land', 'eugen' ),
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

    register_taxonomy( 'land', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_Land_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy City
 function create_immo_Stadt_taxonomy() {

    $labels = [
        'name'              => _x( 'Stadt', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Stadt', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Stadt', 'eugen' ),
        'all_items'         => __( 'All Stadt', 'eugen' ),
        'parent_item'       => __( 'Parent Stadt', 'eugen' ),
        'parent_item_colon' => __( 'Parent Stadt:', 'eugen' ),
        'edit_item'         => __( 'Edit Stadt', 'eugen' ),
        'update_item'       => __( 'Update Stadt', 'eugen' ),
        'add_new_item'      => __( 'Add New Stadt', 'eugen' ),
        'new_item_name'     => __( 'New Stadt Name', 'eugen' ),
        'menu_name'         => __( 'Stadt', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Stadt', 'eugen' ),
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
    register_taxonomy( 'stadt', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_Stadt_taxonomy' );


 ////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy District
function create_immo_district_taxonomy() {

    $labels = [
        'name'              => _x( 'PLZ', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'PLZ', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search PLZ', 'eugen' ),
        'all_items'         => __( 'All PLZ', 'eugen' ),
        'parent_item'       => __( 'Parent PLZ', 'eugen' ),
        'parent_item_colon' => __( 'Parent PLZ:', 'eugen' ),
        'edit_item'         => __( 'Edit PLZ', 'eugen' ),
        'update_item'       => __( 'Update PLZ', 'eugen' ),
        'add_new_item'      => __( 'Add New PLZ', 'eugen' ),
        'new_item_name'     => __( 'New PLZ Name', 'eugen' ),
        'menu_name'         => __( 'PLZ', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'PLZ', 'eugen' ),
        'hierarchical'       => true,
        'child_of'           => 'stadt',
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
    register_taxonomy( 'district', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_district_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Miete
function create_immo_miete_taxonomy() {

    $labels = [
        'name'              => _x( 'Miete', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Miete', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Miete', 'eugen' ),
        'all_items'         => __( 'All Miete', 'eugen' ),
        'parent_item'       => __( 'Parent Miete', 'eugen' ),
        'parent_item_colon' => __( 'Parent Miete:', 'eugen' ),
        'edit_item'         => __( 'Edit Miete', 'eugen' ),
        'update_item'       => __( 'Update Miete', 'eugen' ),
        'add_new_item'      => __( 'Add New Miete', 'eugen' ),
        'new_item_name'     => __( 'New Miete Name', 'eugen' ),
        'menu_name'         => __( 'Miete', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Miete', 'eugen' ),
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
    register_taxonomy( 'miete', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_miete_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Fläche
function create_immo_flaeche_taxonomy() {

    $labels = [
        'name'              => _x( 'Fläche', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Fläche', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Fläche', 'eugen' ),
        'all_items'         => __( 'All Fläche', 'eugen' ),
        'parent_item'       => __( 'Parent Fläche', 'eugen' ),
        'parent_item_colon' => __( 'Parent Fläche:', 'eugen' ),
        'edit_item'         => __( 'Edit Fläche', 'eugen' ),
        'update_item'       => __( 'Update Fläche', 'eugen' ),
        'add_new_item'      => __( 'Add New Fläche', 'eugen' ),
        'new_item_name'     => __( 'New Fläche Name', 'eugen' ),
        'menu_name'         => __( 'Fläche', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Fläche', 'eugen' ),
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
    register_taxonomy( 'flaeche', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_flaeche_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy anzahl Zimmer
function create_immo_anzahl_zimmer_taxonomy() {

    $labels = [
        'name'              => _x( 'Anzahl Zimmer', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Anzahl Zimmer', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Anzahl Zimmer', 'eugen' ),
        'all_items'         => __( 'All Anzahl Zimmer', 'eugen' ),
        'parent_item'       => __( 'Parent Anzahl Zimmer', 'eugen' ),
        'parent_item_colon' => __( 'Parent Anzahl Zimmer:', 'eugen' ),
        'edit_item'         => __( 'Edit Anzahl Zimmer', 'eugen' ),
        'update_item'       => __( 'Update Anzahl Zimmer', 'eugen' ),
        'add_new_item'      => __( 'Add New Anzahl Zimmer', 'eugen' ),
        'new_item_name'     => __( 'New Anzahl Zimmer Name', 'eugen' ),
        'menu_name'         => __( 'Anzahl Zimmer', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Anzahl Zimmer', 'eugen' ),
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
    register_taxonomy( 'anzahl_zimmer', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_anzahl_zimmer_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Loggia
function create_immo_loggia_taxonomy() {

    $labels = [
        'name'              => _x( 'Loggia', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Loggia', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Loggia', 'eugen' ),
        'all_items'         => __( 'All Loggia', 'eugen' ),
        'parent_item'       => __( 'Parent Loggia', 'eugen' ),
        'parent_item_colon' => __( 'Parent Loggia:', 'eugen' ),
        'edit_item'         => __( 'Edit Loggia', 'eugen' ),
        'update_item'       => __( 'Update Loggia', 'eugen' ),
        'add_new_item'      => __( 'Add New Loggia', 'eugen' ),
        'new_item_name'     => __( 'New Loggia Name', 'eugen' ),
        'menu_name'         => __( 'Loggia', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Loggia', 'eugen' ),
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
    register_taxonomy( 'loggia', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_loggia_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Balkon
function create_immo_balkon_taxonomy() {

    $labels = [
        'name'              => _x( 'Balkon', 'taxonomy general name', 'eugen' ),
        'singular_name'     => _x( 'Balkon', 'taxonomy singular name', 'eugen' ),
        'search_items'      => __( 'Search Balkon', 'eugen' ),
        'all_items'         => __( 'All Balkon', 'eugen' ),
        'parent_item'       => __( 'Parent Balkon', 'eugen' ),
        'parent_item_colon' => __( 'Parent Balkon:', 'eugen' ),
        'edit_item'         => __( 'Edit Balkon', 'eugen' ),
        'update_item'       => __( 'Update Balkon', 'eugen' ),
        'add_new_item'      => __( 'Add New Balkon', 'eugen' ),
        'new_item_name'     => __( 'New Balkon Name', 'eugen' ),
        'menu_name'         => __( 'Balkon', 'eugen' ),
    ];
    $args   = [
        'labels'             => $labels,
        'description'        => __( 'Balkon', 'eugen' ),
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
    register_taxonomy( 'balkon', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_balkon_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Terrasse
function create_immo_terrasse_taxonomy() {

	$labels = [
		'name'              => _x( 'Terrasse', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Terrasse', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Terrasse', 'eugen' ),
		'all_items'         => __( 'All Terrasse', 'eugen' ),
		'parent_item'       => __( 'Parent Terrasse', 'eugen' ),
		'parent_item_colon' => __( 'Parent Terrasse:', 'eugen' ),
		'edit_item'         => __( 'Edit Terrasse', 'eugen' ),
		'update_item'       => __( 'Update Terrasse', 'eugen' ),
		'add_new_item'      => __( 'Add New Terrasse', 'eugen' ),
		'new_item_name'     => __( 'New Terrasse Name', 'eugen' ),
		'menu_name'         => __( 'Terrasse', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Terrasse', 'eugen' ),
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
	register_taxonomy( 'terrasse', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_terrasse_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Garten
function create_immo_garten_taxonomy() {

	$labels = [
		'name'              => _x( 'Garten', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Garten', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Garten', 'eugen' ),
		'all_items'         => __( 'All Garten', 'eugen' ),
		'parent_item'       => __( 'Parent Garten', 'eugen' ),
		'parent_item_colon' => __( 'Parent Garten:', 'eugen' ),
		'edit_item'         => __( 'Edit Garten', 'eugen' ),
		'update_item'       => __( 'Update Garten', 'eugen' ),
		'add_new_item'      => __( 'Add New Garten', 'eugen' ),
		'new_item_name'     => __( 'New Garten Name', 'eugen' ),
		'menu_name'         => __( 'Garten', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Garten', 'eugen' ),
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
	register_taxonomy( 'garten', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_garten_taxonomy' );



////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Aufzug
function create_immo_aufzug_taxonomy() {

	$labels = [
		'name'              => _x( 'Aufzug', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Aufzug', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Aufzug', 'eugen' ),
		'all_items'         => __( 'All Aufzug', 'eugen' ),
		'parent_item'       => __( 'Parent Aufzug', 'eugen' ),
		'parent_item_colon' => __( 'Parent Aufzug:', 'eugen' ),
		'edit_item'         => __( 'Edit Aufzug', 'eugen' ),
		'update_item'       => __( 'Update Aufzug', 'eugen' ),
		'add_new_item'      => __( 'Add New Aufzug', 'eugen' ),
		'new_item_name'     => __( 'New Aufzug Name', 'eugen' ),
		'menu_name'         => __( 'Aufzug', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Aufzug', 'eugen' ),
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
	register_taxonomy( 'aufzug', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_aufzug_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Barrierefrei
function create_immo_barrierefrei_taxonomy() {

	$labels = [
		'name'              => _x( 'Barrierefrei', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Barrierefrei', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Barrierefrei', 'eugen' ),
		'all_items'         => __( 'All Barrierefrei', 'eugen' ),
		'parent_item'       => __( 'Parent Barrierefrei', 'eugen' ),
		'parent_item_colon' => __( 'Parent Barrierefrei:', 'eugen' ),
		'edit_item'         => __( 'Edit Barrierefrei', 'eugen' ),
		'update_item'       => __( 'Update Barrierefrei', 'eugen' ),
		'add_new_item'      => __( 'Add New Barrierefrei', 'eugen' ),
		'new_item_name'     => __( 'New Barrierefrei Name', 'eugen' ),
		'menu_name'         => __( 'Barrierefrei', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Barrierefrei', 'eugen' ),
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
	register_taxonomy( 'barrierefrei', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_barrierefrei_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Keller
function create_immo_keller_taxonomy() {

	$labels = [
		'name'              => _x( 'Keller', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Keller', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Keller', 'eugen' ),
		'all_items'         => __( 'All Keller', 'eugen' ),
		'parent_item'       => __( 'Parent Keller', 'eugen' ),
		'parent_item_colon' => __( 'Parent Keller:', 'eugen' ),
		'edit_item'         => __( 'Edit Keller', 'eugen' ),
		'update_item'       => __( 'Update Keller', 'eugen' ),
		'add_new_item'      => __( 'Add New Keller', 'eugen' ),
		'new_item_name'     => __( 'New Keller Name', 'eugen' ),
		'menu_name'         => __( 'Keller', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Keller', 'eugen' ),
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
	register_taxonomy( 'keller', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_keller_taxonomy' );

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Möbeliert
function create_immo_moebeliert_taxonomy() {

	$labels = [
		'name'              => _x( 'Möbeliert', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Möbeliert', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Möbeliert', 'eugen' ),
		'all_items'         => __( 'All Möbeliert', 'eugen' ),
		'parent_item'       => __( 'Parent Möbeliert', 'eugen' ),
		'parent_item_colon' => __( 'Parent Möbeliert:', 'eugen' ),
		'edit_item'         => __( 'Edit Möbeliert', 'eugen' ),
		'update_item'       => __( 'Update Möbeliert', 'eugen' ),
		'add_new_item'      => __( 'Add New Möbeliert', 'eugen' ),
		'new_item_name'     => __( 'New Möbeliert Name', 'eugen' ),
		'menu_name'         => __( 'Möbeliert', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Möbeliert', 'eugen' ),
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
	register_taxonomy( 'moebeliert', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_moebeliert_taxonomy' );

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Parkplatz
function create_immo_parkplatz_taxonomy() {

	$labels = [
		'name'              => _x( 'Parkplatz', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Parkplatz', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Parkplatz', 'eugen' ),
		'all_items'         => __( 'All Parkplatz', 'eugen' ),
		'parent_item'       => __( 'Parent Parkplatz', 'eugen' ),
		'parent_item_colon' => __( 'Parent Parkplatz:', 'eugen' ),
		'edit_item'         => __( 'Edit Parkplatz', 'eugen' ),
		'update_item'       => __( 'Update Parkplatz', 'eugen' ),
		'add_new_item'      => __( 'Add New Parkplatz', 'eugen' ),
		'new_item_name'     => __( 'New Parkplatz Name', 'eugen' ),
		'menu_name'         => __( 'Parkplatz', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Parkplatz', 'eugen' ),
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
	register_taxonomy( 'parkplatz', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_parkplatz_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Seniorengerecht
function create_immo_seniorengerecht_taxonomy() {

	$labels = [
		'name'              => _x( 'Seniorengerecht', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Seniorengerecht', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Seniorengerecht', 'eugen' ),
		'all_items'         => __( 'All Seniorengerecht', 'eugen' ),
		'parent_item'       => __( 'Parent Seniorengerecht', 'eugen' ),
		'parent_item_colon' => __( 'Parent Seniorengerecht:', 'eugen' ),
		'edit_item'         => __( 'Edit Seniorengerecht', 'eugen' ),
		'update_item'       => __( 'Update Seniorengerecht', 'eugen' ),
		'add_new_item'      => __( 'Add New Seniorengerecht', 'eugen' ),
		'new_item_name'     => __( 'New Seniorengerecht Name', 'eugen' ),
		'menu_name'         => __( 'Seniorengerecht', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Seniorengerecht', 'eugen' ),
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
	register_taxonomy( 'seniorengerecht', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_seniorengerecht_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Erstbezug
function create_immo_erstbezug_taxonomy() {

	$labels = [
		'name'              => _x( 'Erstbezug', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Erstbezug', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Erstbezug', 'eugen' ),
		'all_items'         => __( 'All Erstbezug', 'eugen' ),
		'parent_item'       => __( 'Parent Erstbezug', 'eugen' ),
		'parent_item_colon' => __( 'Parent Erstbezug:', 'eugen' ),
		'edit_item'         => __( 'Edit Erstbezug', 'eugen' ),
		'update_item'       => __( 'Update Erstbezug', 'eugen' ),
		'add_new_item'      => __( 'Add New Erstbezug', 'eugen' ),
		'new_item_name'     => __( 'New Erstbezug Name', 'eugen' ),
		'menu_name'         => __( 'Erstbezug', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Erstbezug', 'eugen' ),
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
	register_taxonomy( 'erstbezug', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_erstbezug_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Neuwertig
function create_immo_neuwertig_taxonomy() {

	$labels = [
		'name'              => _x( 'Neuwertig', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Neuwertig', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Neuwertig', 'eugen' ),
		'all_items'         => __( 'All Neuwertig', 'eugen' ),
		'parent_item'       => __( 'Parent Neuwertig', 'eugen' ),
		'parent_item_colon' => __( 'Parent Neuwertig:', 'eugen' ),
		'edit_item'         => __( 'Edit Neuwertig', 'eugen' ),
		'update_item'       => __( 'Update Neuwertig', 'eugen' ),
		'add_new_item'      => __( 'Add New Neuwertig', 'eugen' ),
		'new_item_name'     => __( 'New Neuwertig Name', 'eugen' ),
		'menu_name'         => __( 'Neuwertig', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Neuwertig', 'eugen' ),
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
	register_taxonomy( 'neuwertig', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_neuwertig_taxonomy' );


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register Taxonomy Saniert
function create_immo_saniert_taxonomy() {

	$labels = [
		'name'              => _x( 'Saniert', 'taxonomy general name', 'eugen' ),
		'singular_name'     => _x( 'Saniert', 'taxonomy singular name', 'eugen' ),
		'search_items'      => __( 'Search Saniert', 'eugen' ),
		'all_items'         => __( 'All Saniert', 'eugen' ),
		'parent_item'       => __( 'Parent Saniert', 'eugen' ),
		'parent_item_colon' => __( 'Parent Saniert:', 'eugen' ),
		'edit_item'         => __( 'Edit Saniert', 'eugen' ),
		'update_item'       => __( 'Update Saniert', 'eugen' ),
		'add_new_item'      => __( 'Add New Saniert', 'eugen' ),
		'new_item_name'     => __( 'New Saniert Name', 'eugen' ),
		'menu_name'         => __( 'Saniert', 'eugen' ),
	];
	$args   = [
		'labels'             => $labels,
		'description'        => __( 'Saniert', 'eugen' ),
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
	register_taxonomy( 'saniert', [ 'estates' ], $args );

}
add_action( 'init',  'create_immo_saniert_taxonomy' );
