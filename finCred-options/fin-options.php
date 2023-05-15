<?php
/*
PLUGIN NAME: Eugen Bonität
Version: 1.0.0
Description: Plugin zur Durchführung der FINCredible Bonität
Author: Tunnel23 rak
Author Mail: r.akbarsada@tunnel23.com
Text Domain: eugen
Domain Path: /src/assets/languages
Requires PHP: 7.3
*/


define( 'EUGEN_OPT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EUGEN_OPT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'PDF_AUTOLOADER_URL', plugin_dir_url( __FILE__ ).'pdf_composer/autoload.php' );
define( 'PDF_AUTOLOADER_DIR', plugin_dir_path( __FILE__ ).'pdf_composer/autoload.php' );

define( 'PDF_MERGER_AUTOLOADER_URL', plugin_dir_url( __FILE__ ).'vendor/autoload.php' );
define( 'PDF_MERGER_AUTOLOADER_DIR', plugin_dir_path( __FILE__ ).'vendor/autoload.php' );

define( 'FIN_AUTOLOADER_URL', plugin_dir_url( __FILE__ ).'finCred_comp/autoload.php' );
define( 'FIN_AUTOLOADER_DIR', plugin_dir_path( __FILE__ ).'finCred_comp/autoload.php' );


//Includes
//PDF Liberies

/*
 * init fpdf
 */
require_once(EUGEN_OPT_PLUGIN_DIR . 'fpdf/fpdf.php');

/*
 * init fpdi
 */
require_once(EUGEN_OPT_PLUGIN_DIR . 'fpdi/src/autoload.php');


//Includes
//for BACKEND

/*
 * init backend page
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/option_page.php');

/*
 * enque styles and scripts
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/backend_style_init.php');

/*
 * init backend ajax
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/backend_ajax_init.php');

/*
 * init invite-check REST API
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/wp_controller/invite_check_api.php');

/*
 * init custom Templates
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'create-template.php');

//Includes
//invite functions

/*
 * init FinCred Invite Function
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'functions/finCredInvite.php');

/*
 * init FinCred Invite Function TEMPORARY
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'functions/finCredInvite2.php');

/*
 * init FinCred Invite Function
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'functions/eugen_Invite.php');

/*
 * init FinCred Invite Function
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'functions/manuellInvite.php');

/*
 * init FinCred Boni Stand Function
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'functions/boni_stand.php');


//Includes
//Wordpress Functions

/*
 * init bonität Metaboxes
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/wp_controller/bonitaetMetaboxes.php');

/*
 * init appartment PostType
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/wp_controller/postTypes.php');

/*
 * init appartment Taxonomy
 */
/*require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/wp_controller/appartmentTaxonomy.php');*/

/*
 * init bonität Taxonomy
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'backend/wp_controller/bonitaetTaxonomy.php');


//Includes
//for FRONTEND Styles

/*
 * enque styles and scripts FRONTEND
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'frontend/frontend_style_init.php');

/*
 * init frontend ajax
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'frontend/frontend_ajax_init.php');


/*
 * init GravityFroms Functions
 */
require_once( EUGEN_OPT_PLUGIN_DIR . 'gravityForms/gravityFormFunctions.php');



