<?php


function fin_start_ajax(){ ?>
    <?php // include 'sites/controller/siegelLaden_js.php'; ?>


<?php
}

function fin_onOffice_ajax(){ ?>
<!--    <?php /* include 'controller/ajax/onOffice/onOfficeRequest_js.php'; */?>
    --><?php /* include 'controller/ajax/onOffice/onOfficeAPIs_js.php'; */?>


    <?php
}


function fin_hausverwaltung_ajax(){?>
<?php  include 'controller/ajax/hausverwaltung/closeTheProp_js.php'; ?>
<?php  include 'controller/ajax/hausverwaltung/downloadPropCSV_js.php'; ?>
<?php  include 'controller/ajax/hausverwaltung/listAllProp_js.php'; ?>
<?php  include 'controller/ajax/hausverwaltung/readPropSettings_js.php'; ?>
<?php  include 'controller/ajax/hausverwaltung/reOpenProp_js.php'; ?>
<?php  include 'controller/ajax/hausverwaltung/updatePropSettings_js.php'; ?>


<?php
}

function fin_immoAnlegen_ajax(){?>
<?php  include 'controller/ajax/immoAnlegen/createNewProp_js.php'; ?>


<?php
}


function fin_finCredible_ajax(){?>
    <?php // include 'controller/ajax/finCredible/cancelCreditCheckInvation_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/downloadResultsPDF_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/inviteToCreditCheck_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/readCreditCheckResults_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/resendCreditCheckInvite_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/selectCustomer_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/finCredibleAPI_js.php'; ?>
    <?php  include 'controller/ajax/finCredible/finCredibleBoniOptions_js.php'; ?>


<?php
}


function fin_bonitaet_ajax(){?>

    <?php  include 'controller/ajax/frontendAjaxDownload.php'; ?>


    <?php
}

/*////////////////////////////////////////////////////////////////
//              HAS AJAX REQUESTs PHP FUNCTIONs                 //
//                                                              //
////////////////////////////////////////////////////////////////*/


//Bonicheckcb

include 'controller/callback/finCredible/finCredibleAPI_cb.php';


//ImmoAnlegen
include 'controller/callback/immoAnlegen/createNewProp_cb.php';

//Hausverwaltung
include 'controller/callback/hausverwaltung/readPropSettings_cb.php';

//onOffice
/*include 'controller/callback/onOffice/onOfficeRequest_cb.php';
include 'controller/callback/onOffice/onOfficeAPIs_cb.php';*/

//bonität
include 'controller/callback/frontendAjaxDownload_cb.php';

