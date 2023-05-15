<?php


function frontend_ajax_test(){ ?>
    <?php  include 'controller/ajax/fotnendAjaxTest.php'; ?>
    <?php  include 'controller/ajax/fotnendAjaxWeitere.php'; ?>
    <?php  include 'controller/ajax/fotnendAjaxManuell.php'; ?>
    <?php  include 'controller/ajax/frontendAjaxBurge1.php'; ?>
    <?php  include 'controller/ajax/frontendAjaxBurge2-5.php'; ?>



<?php
}
add_action( 'wp_footer', 'frontend_ajax_test' );

/*////////////////////////////////////////////////////////////////
//              HAS AJAX REQUESTs PHP FUNCTIONs                 //
//                                                              //
////////////////////////////////////////////////////////////////*/


//Bonicheckcb
include 'controller/callback/fotnendAjaxTest_cb.php';
include 'controller/callback/fotnendAjaxWeitere_cb.php';
include 'controller/callback/frontendAjaxBurge1_cb.php';
include 'controller/callback/frontendAjaxBurge2-5_cb.php';

                          

