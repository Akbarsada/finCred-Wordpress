<?php
function add_fin_page() {


    //backend Seite Reiter
    $backend_page = add_menu_page(
        'FinCredible Options', //Page Title
        'FinCredible', //Menu Title
        'manage_options', //Capability
        'fin_options', //Page slug
        'fin_page_html', //Callback Function
        EUGEN_OPT_PLUGIN_URL.'/asset/img/fincred.png',
        2 );

    add_action('admin_print_styles-' . $backend_page, 'backend_fin_style_init');


}
add_action( 'admin_menu', 'add_fin_page' );

function fin_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $default_tab = null;
    $form_tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;

    ?>

    <div class="row" style="margin: 50px;" >

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a  href="?page=fin_options&tab=immo_anlegen" >Immobilie anlegen</a></li>
            <li class="divider"></li>
            <li><a  href="?page=fin_options&tab=list_immo" >Immobilien Liste</a></li>

        </ul>


        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="right brand-logo">
                    <img src="<?php echo EUGEN_OPT_PLUGIN_URL.'asset/img/eugen_logo.png' ?>" height="31px">
                </a>
                <ul class="left hide-on-med-and-down">
                    <li><a  href="?page=fin_options&tab=finCredible" data-target="dropdown1">FinCredible</a></li>
                </ul>
            </div>
        </nav>



                <?php
                switch($form_tab) :

          /*          case 'hausverwaltung':
                       include 'sites/hausverwaltung.php';
                        add_action( 'admin_footer', 'fin_hausverwaltung_ajax' );
                        break;*/
                   /* case 'finCredible':
                        include 'sites/finCredible.php';
                        add_action( 'admin_footer', 'fin_finCredible_ajax' );
                        break;*/
                    case 'onOffice':
                        include 'sites/onOffice.php';
                        add_action( 'admin_footer', 'fin_onOffice_ajax' );
                        break;
                   /* case 'immo_anlegen':
                        include 'sites/immoAnlegen.php';
                        add_action( 'admin_footer', 'fin_immoAnlegen_ajax' );
                        break;
                    case 'list_immo':
                        include 'sites/listImmos.php';
                        add_action( 'admin_footer', 'fin_list_immo_ajax' );
                        break;*/
                    default:
                        include 'sites/finCredible.php';
                        add_action( 'admin_footer', 'fin_finCredible_ajax' );
                        break;

                endswitch;
                ?>

    </div>

<?php
   }