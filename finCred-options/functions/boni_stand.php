<?php
use onOffice\SDK\onOfficeSDK;
///Funktion für die Bonitätseinladung auf Eugen
function bonistand_update ($boni_post_id ) {
require_once(ON_OFFICE_AUTOLOADER_DIR);
require_once(FIN_AUTOLOADER_DIR);
$client = new \GuzzleHttp\Client();

//Bonistand updaten int gennerieren
$bonistand_print = intval(get_post_meta( $boni_post_id, 'anzahl_durchgefuehrter_bonis', true ));
//update_post_meta( $boni_post_id, 'anzahl_durchgefuehrter_bonis',  $bonistand_neu );



//Abfrage Anzahl Hauptmieter
    $anzahl_mieter = intval(get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ));
    $appartment_id = get_post_meta( $boni_post_id, 'wp_apartments_post_ID', true );

   //Variablen
    $appartment_bild = get_post_meta( $appartment_id, 'objekt_bild_url', true );
    $appartment_titel = get_post_meta( $appartment_id, 'objekt_titel', true );
    $appartment_adresse = get_post_meta( $appartment_id, 'objekt_adresse', true );
    $appartment_ort = get_post_meta( $appartment_id, '_ort', true );
    $appartment_plz = get_post_meta( $appartment_id, '_plz', true );
    $appartment_zimmer = round(intval(get_post_meta( $appartment_id, '_anzahl_zimmer', true )),1);
    $appartment_miete = number_format(get_post_meta( $appartment_id, '_warmmiete', true ),2,",",".");


    $anzahl_bewohner = get_post_meta( $boni_post_id, 'anzahl_bewohner', true );
    $anzahl_hauptmieter = get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true );
    $anzahl_bewohner = get_post_meta( $boni_post_id, 'anzahl_bewohner', true );
    $einzugstermin_wunsch = get_post_meta( $boni_post_id, 'einzugstermin_wunsch', true );
    $einzugstermin_alternative = get_post_meta( $boni_post_id, 'einzugstermin_alternative', true );

    //Mieter 1
    if(true){

    $anrede_hauptmieter_1 = get_post_meta( $boni_post_id, 'anrede_hauptmieter_1', true );
    $vorname_hauptmieter_1 = get_post_meta( $boni_post_id, 'vorname_hauptmieter_1', true );
    $name_hauptmieter_1 = get_post_meta( $boni_post_id, 'name_hauptmieter_1', true );
    $email_hauptmieter_1 = get_post_meta( $boni_post_id, 'email_hauptmieter_1', true );

    $hat_buerge_hauptmieter_1 = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_1', true );

    $anrede_buerge_1 = get_post_meta( $boni_post_id, 'anrede_buerge_1', true );
    $vorname_buerge_1 = get_post_meta( $boni_post_id, 'vorname_buerge_1', true );
    $name_buerge_1 = get_post_meta( $boni_post_id, 'name_buerge_1', true );
    $email_buerge_1 = get_post_meta( $boni_post_id, 'email_buerge_1', true );


    $nummer_hauptmieter_1 = get_post_meta( $boni_post_id, 'nummer_hauptmieter_1', true );
    $boni_art_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_art_hauptmieter_1', true );
    $boni_gemacht_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_1', true );
    $boni_versendet_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_1', true );
    $boni_ergebnis_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_1', true );
    $boni_invite_url_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_invite_url_hauptmieter_1', true );
    $boni_invite_id_hauptmieter_1 = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_1', true );

    $boni_e_m_mieter_1 = '';
    if($boni_art_hauptmieter_1 == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_1', true ) == 0){  $boni_e_m_mieter_1 =  '(EXPRESS CHECK)';}
    elseif($boni_art_hauptmieter_1 == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_1', true ) == 0){ $boni_e_m_mieter_1 = '(MANUELLER CHECK)';}
    elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_1', true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}
    }

    //Mieter 2
    if(true){

        $anrede_hauptmieter_2 = get_post_meta( $boni_post_id, 'anrede_hauptmieter_2', true );
        $vorname_hauptmieter_2 = get_post_meta( $boni_post_id, 'vorname_hauptmieter_2', true );
        $name_hauptmieter_2 = get_post_meta( $boni_post_id, 'name_hauptmieter_2', true );
        $email_hauptmieter_2 = get_post_meta( $boni_post_id, 'email_hauptmieter_2', true );

        $hat_buerge_hauptmieter_2 = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_2', true );


        $anrede_buerge_2 = get_post_meta( $boni_post_id, 'anrede_buerge_2', true );
        $vorname_buerge_2 = get_post_meta( $boni_post_id, 'vorname_buerge_2', true );
        $name_buerge_2 = get_post_meta( $boni_post_id, 'name_buerge_2', true );
        $email_buerge_2 = get_post_meta( $boni_post_id, 'email_buerge_2', true );


        $nummer_hauptmieter_2 = get_post_meta( $boni_post_id, 'nummer_hauptmieter_2', true );
        $boni_art_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_art_hauptmieter_2', true );
        $boni_gemacht_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_2', true );
        $boni_versendet_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_2', true );
        $boni_ergebnis_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_2', true );
        $boni_invite_url_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_invite_url_hauptmieter_2', true );
        $boni_invite_id_hauptmieter_2 = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_2', true );

        $boni_e_m_mieter_2 = '';
        if($boni_art_hauptmieter_2 == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_2', true ) == 0){  $boni_e_m_mieter_2 =  '(EXPRESS CHECK)';}
        elseif($boni_art_hauptmieter_2 == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_2', true ) == 0){ $boni_e_m_mieter_2 = '(MANUELLER CHECK)';}
        elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_2', true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}
    }

    //Mieter 3
    if(true){

        $anrede_hauptmieter_3 = get_post_meta( $boni_post_id, 'anrede_hauptmieter_3', true );
        $vorname_hauptmieter_3 = get_post_meta( $boni_post_id, 'vorname_hauptmieter_3', true );
        $name_hauptmieter_3 = get_post_meta( $boni_post_id, 'name_hauptmieter_3', true );
        $email_hauptmieter_3 = get_post_meta( $boni_post_id, 'email_hauptmieter_3', true );

        $hat_buerge_hauptmieter_3 = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_3', true );


        $anrede_buerge_3 = get_post_meta( $boni_post_id, 'anrede_buerge_3', true );
        $vorname_buerge_3 = get_post_meta( $boni_post_id, 'vorname_buerge_3', true );
        $name_buerge_3 = get_post_meta( $boni_post_id, 'name_buerge_3', true );
        $email_buerge_3 = get_post_meta( $boni_post_id, 'email_buerge_3', true );


        $nummer_hauptmieter_3 = get_post_meta( $boni_post_id, 'nummer_hauptmieter_3', true );
        $boni_art_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_art_hauptmieter_3', true );
        $boni_gemacht_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_3', true );
        $boni_versendet_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_3', true );
        $boni_ergebnis_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_3', true );
        $boni_invite_url_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_invite_url_hauptmieter_3', true );
        $boni_invite_id_hauptmieter_3 = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_3', true );

        $boni_e_m_mieter_3 = '';
        if($boni_art_hauptmieter_3 == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_3', true ) == 0){  $boni_e_m_mieter_3 =  '(EXPRESS CHECK)';}
        elseif($boni_art_hauptmieter_3 == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_3', true ) == 0){ $boni_e_m_mieter_3 = '(MANUELLER CHECK)';}
        elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_3', true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}
    }

    //Mieter 4
        if(true){

        $anrede_hauptmieter_4 = get_post_meta( $boni_post_id, 'anrede_hauptmieter_4', true );
        $vorname_hauptmieter_4 = get_post_meta( $boni_post_id, 'vorname_hauptmieter_4', true );
        $name_hauptmieter_4 = get_post_meta( $boni_post_id, 'name_hauptmieter_4', true );
        $email_hauptmieter_4 = get_post_meta( $boni_post_id, 'email_hauptmieter_4', true );

        $hat_buerge_hauptmieter_4 = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_4', true );


        $anrede_buerge_4 = get_post_meta( $boni_post_id, 'anrede_buerge_4', true );
        $vorname_buerge_4 = get_post_meta( $boni_post_id, 'vorname_buerge_4', true );
        $name_buerge_4 = get_post_meta( $boni_post_id, 'name_buerge_4', true );
        $email_buerge_4 = get_post_meta( $boni_post_id, 'email_buerge_4', true );


        $nummer_hauptmieter_4 = get_post_meta( $boni_post_id, 'nummer_hauptmieter_4', true );
        $boni_art_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_art_hauptmieter_4', true );
        $boni_gemacht_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_4', true );
        $boni_versendet_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_4', true );
        $boni_ergebnis_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_4', true );
        $boni_invite_url_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_invite_url_hauptmieter_4', true );
        $boni_invite_id_hauptmieter_4 = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_4', true );

        $boni_e_m_mieter_4 = '';
        if($boni_art_hauptmieter_4 == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_4', true ) == 0){  $boni_e_m_mieter_4 =  '(EXPRESS CHECK)';}
        elseif($boni_art_hauptmieter_4 == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_4', true ) == 0){ $boni_e_m_mieter_4 = '(MANUELLER CHECK)';}
        elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_4', true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}

    }

    //Mieter 5
    if(true){

        $anrede_hauptmieter_5 = get_post_meta( $boni_post_id, 'anrede_hauptmieter_5', true );
        $vorname_hauptmieter_5 = get_post_meta( $boni_post_id, 'vorname_hauptmieter_5', true );
        $name_hauptmieter_5 = get_post_meta( $boni_post_id, 'name_hauptmieter_5', true );
        $email_hauptmieter_5 = get_post_meta( $boni_post_id, 'email_hauptmieter_5', true );

        $hat_buerge_hauptmieter_5 = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_5', true );


        $anrede_buerge_5 = get_post_meta( $boni_post_id, 'anrede_buerge_5', true );
        $vorname_buerge_5 = get_post_meta( $boni_post_id, 'vorname_buerge_5', true );
        $name_buerge_5 = get_post_meta( $boni_post_id, 'name_buerge_5', true );
        $email_buerge_5 = get_post_meta( $boni_post_id, 'email_buerge_5', true );
  

        $nummer_hauptmieter_5 = get_post_meta( $boni_post_id, 'nummer_hauptmieter_5', true );
        $boni_art_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_art_hauptmieter_5', true );
        $boni_gemacht_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_5', true );
        $boni_versendet_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_5', true );
        $boni_ergebnis_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_5', true );
        $boni_invite_url_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_invite_url_hauptmieter_5', true );
        $boni_invite_id_hauptmieter_5 = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_5', true );

        $boni_e_m_mieter_5 = '';
        if($boni_art_hauptmieter_5 == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_5', true ) == 0){  $boni_e_m_mieter_5 =  '(EXPRESS CHECK)';}
        elseif($boni_art_hauptmieter_5 == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_5', true ) == 0){ $boni_e_m_mieter_5 = '(MANUELLER CHECK)';}
        elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_5', true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}
    }


//PDF Deckblatt erstellen erstellen

    require_once(PDF_AUTOLOADER_DIR);

    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];

    $deckblatt = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
            EUGEN_OPT_PLUGIN_DIR . 'asset/font/',
        ]),
        'fontdata' => $fontData + [ // lowercase letters only in font key
                'nexa' => [
                    'R' => 'NexaRegular.ttf',
                    'I' => 'NexaRegular.ttf',
                ]
            ],
        'default_font' => 'nexa'
    ]);

//Haupmiter Variables
    $hauptmieter1 = '';
    $hauptmieter2 = '';
    $hauptmieter3 = '';
    $hauptmieter4 = '';
    $hauptmieter5 = '';

    if($anzahl_mieter == 1){
        $hauptmieter1 = 'HAUPTMIETER 1';
    }

    if($anzahl_mieter == 2){
        $hauptmieter1 = 'HAUPTMIETER 1';
        $hauptmieter2 = 'HAUPTMIETER 2';
    }

    if($anzahl_mieter == 3){
        $hauptmieter1 = 'HAUPTMIETER 1';
        $hauptmieter2 = 'HAUPTMIETER 2';
        $hauptmieter3 = 'HAUPTMIETER 3';
    }

    if($anzahl_mieter == 4){
        $hauptmieter1 = 'HAUPTMIETER 1';
        $hauptmieter2 = 'HAUPTMIETER 2';
        $hauptmieter3 = 'HAUPTMIETER 3';
        $hauptmieter4 = 'HAUPTMIETER 4';
    }

    if($anzahl_mieter == 5){
        $hauptmieter1 = 'HAUPTMIETER 1';
        $hauptmieter2 = 'HAUPTMIETER 2';
        $hauptmieter3 = 'HAUPTMIETER 3';
        $hauptmieter4 = 'HAUPTMIETER 4';
        $hauptmieter5 = 'HAUPTMIETER 5';
    }


    //Bürgen
    //Haupmiter Variables
    $buerge1 = '';
    $buerge2 = '';
    $buerge3 = '';
    $buerge4 = '';
    $buerge5 = '';

    if($hat_buerge_hauptmieter_1 == 1){
        $buerge1 = 'BÜRGE FÜR HAUPTMIETER 1';
    }

    if($hat_buerge_hauptmieter_2 == 1){
        $buerge2 = 'BÜRGE FÜR HAUPTMIETER 2';
    }

    if($hat_buerge_hauptmieter_3 == 1){
        $buerge3 = 'BÜRGE FÜR HAUPTMIETER 3';
    }

    if($hat_buerge_hauptmieter_4 == 1){
        $buerge4 = 'BÜRGE FÜR HAUPTMIETER 4';
    }

    if($hat_buerge_hauptmieter_5 == 1){
        $buerge5 = 'BÜRGE FÜR HAUPTMIETER 5';
    }


    
//Wenn BonitätsPost abgeschlossen
if($bonistand_print == $anzahl_mieter){

    $abschluss_datum = date("d.m.Y");
    //BonitätsPost auf abgeschlossen setzen
            update_post_meta( $boni_post_id, 'boni_post_abgeschlossen',  1 );
            //create Deckblatt

    if (!file_exists(EUGEN_OPT_PLUGIN_DIR.'pdf/deckblatt/'.$boni_post_id)) {
        mkdir(EUGEN_OPT_PLUGIN_DIR.'pdf/deckblatt/'.$boni_post_id, 0777, true);
    }


                $deckblatt->WriteHTML('
            <img src="'.EUGEN_OPT_PLUGIN_URL .'asset/img/eugen_logo.png" width="90" />
           <h1></h1>
            <!-- erste Zeile -->
            <table style="width: 100%">
              <thead>
                <tr>
                  <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">MIETE</th>
                   <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">HAUPTMIETER</th>
                   <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">PERSONEN IM HAUSHALT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$appartment_miete.' € pro Monat</td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$anzahl_hauptmieter.'</td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$anzahl_bewohner.'</td>
                </tr>
               
              </tbody>
            </table>
            <h1></h1>
           <!-- zweite Zeile -->
            <table style="width: 100%">
              <thead>
                <tr>
                  <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">GARAGENSTELLPLÄTZE</th>
                   <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">EINZUGSDATUM</th>
                   <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">ZIMMER</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">1</td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$einzugstermin_wunsch.' (Wunsch)</td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$appartment_zimmer.'</td>
                </tr>
                 <tr>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;"></td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$einzugstermin_alternative.' (Alternativ)</td>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;"></td>
                </tr>
                
              </tbody>
            </table>
            
             <table style="width: 100%">
              <thead>
                <tr>
                  <th style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">DATUM</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 33%; text-align: left; font-size: 10px; letter-spacing: 1px;">'.$abschluss_datum.'</td>                  
                </tr>
              </tbody>
            </table>
            
            
              
                     <!-- erste Reihe -->
            <table style="width: 100%; ">
              <thead>
                <tr>
                  <th style="width: 60%; text-align: left; font-size: 8px; letter-spacing: 1px;">
                   <!-- Bonicheck Bild -->
              <img src="'.EUGEN_OPT_PLUGIN_URL .'asset/img/pdf/bonicheck.svg" width="60%"  />
                  </th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">
                    <!-- Maxel Bild -->
              <img src="'.EUGEN_OPT_PLUGIN_URL .'asset/img/pdf/closeup-phone.png" width="40%" style="margin-top: 50px;"  />
                  </th>
                </tr>
              </thead>   
               <tbody>
                <tr>
                  <td style="width: 50%; text-align: left; "><h6>LEO</h6></td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;"></td>
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; "><h6>Leopoldauer Platz 123 / Stiege 3 / Top 20
</h6></td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;"></td>
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; "><h6>1230 Wien</h6></td>
                   <td style="width: 50%; text-align: left; "></td>
                </tr>
              </tbody>           
            </table>
               <!-- Wohnung Bezeichnung -->
   <!--            <p style="margin-bottom: 5px;">LEO am PARK</p>
          
               <p style="margin-bottom: 5px;">Leopoldauer Platz 123 / Stiege 3 / Top 20</p>
               <p style="margin-bottom: 0px;">1230 Wien</p>-->
     
              
              
               <!-- Hauptmieter -->
            <!-- erste Reihe -->
            <table style="width: 100%; margin-top: 50px;">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$hauptmieter1.'<span style="font-weight: normal;"> '.$boni_e_m_mieter_1.'</span></th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$buerge1.'<span style="font-weight: normal;"></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_hauptmieter_1.' '. $vorname_hauptmieter_1.' '. $name_hauptmieter_1.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_buerge_1.' '. $vorname_buerge_1.' '. $name_buerge_1.'</td>
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_hauptmieter_1.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_buerge_1.'</td>
                </tr>
              </tbody>
            </table>
            
           <!-- zweite Reihe -->
            <table style="width: 100%; margin-top: 20px;">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$hauptmieter2.'<span style="font-weight: normal;"> '.$boni_e_m_mieter_2.'</span></th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$buerge2.'<span style="font-weight: normal;"> </span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_hauptmieter_2.' '. $vorname_hauptmieter_2.' '. $name_hauptmieter_2.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_buerge_2.' '. $vorname_buerge_2.' '. $name_buerge_2.'</td>
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_hauptmieter_2.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_buerge_2.'</td>
                </tr>
              </tbody>
            </table>
            
            <!-- dritte Reihe -->
            <table style="width: 100%; margin-top: 20px;">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$hauptmieter3.'<span style="font-weight: normal;"> '.$boni_e_m_mieter_3.'</span></th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$buerge3.'<span style="font-weight: normal;"> </span></th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_hauptmieter_3.' '. $vorname_hauptmieter_3.' '. $name_hauptmieter_3.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_buerge_3.' '. $vorname_buerge_3.' '. $name_buerge_3.'</td>                   
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_hauptmieter_3.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_buerge_3.'</td>
                  
                </tr>
              </tbody>
            </table>
            
            <!-- vierte Reihe -->
            <table style="width: 100%; margin-top: 20px;">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$hauptmieter4.'<span style="font-weight: normal;"> '.$boni_e_m_mieter_4.'</span></th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$buerge4.'<span style="font-weight: normal;"> </span></th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_hauptmieter_4.' '. $vorname_hauptmieter_4.' '. $name_hauptmieter_4.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_buerge_4.' '. $vorname_buerge_4.' '. $name_buerge_4.'</td>                   
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_hauptmieter_4.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_buerge_4.'</td>
                  
                </tr>
              </tbody>
            </table>
            
             <!-- fünfte Reihe -->
            <table style="width: 100%; margin-top: 20px;">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$hauptmieter5.'<span style="font-weight: normal;"> '.$boni_e_m_mieter_5.'</span></th>
                  <th style="width: 50%; text-align: left; font-size: 8px; letter-spacing: 1px;">'.$buerge5.'<span style="font-weight: normal;"> </span></th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_hauptmieter_5.' '. $vorname_hauptmieter_5.' '. $name_hauptmieter_5.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;">'.$anrede_buerge_5.' '. $vorname_buerge_5.' '. $name_buerge_5.'</td>                   
                </tr>
                 <tr>
                  <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_hauptmieter_5.'</td>
                   <td style="width: 50%; text-align: left; font-size: 12px; letter-spacing: 1px;  text-decoration: underline;">'.$email_buerge_5.'</td>
                  
                </tr>
              </tbody>
            </table>
            
        
            
</div>
            
            ');

                $deckblatt->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/deckblatt/'.$boni_post_id.'/deckblatt_'.$boni_post_id.'.pdf');

				require_once('PDFMerger.php');
               
                $pdf = new \Clegginabox\PDFMerger\PDFMerger;
                $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/deckblatt/'.$boni_post_id.'/deckblatt_'.$boni_post_id.'.pdf', 'all');



                            //PDF von finCred herunterladen und temporär im Ordner finCredResults abgelegt
                            for ($i = 1; $i <= $anzahl_mieter; $i++) {

                                                $current_invite_id =  get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_'.$i, true );
                                                $current_name = get_post_meta( $boni_post_id, 'boni_invite_id_hauptmieter_'.$i, true );

                                                //create FinCred Folder
                                                if (!file_exists(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/'.$boni_post_id .'/'.$i)) {
                                                    mkdir(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/'.$boni_post_id .'/'.$i, 0777, true);
                                                }

                                                //create Zwischenblatt Folder
                                                if (!file_exists(EUGEN_OPT_PLUGIN_DIR.'pdf/zwischenblaetter/'.$boni_post_id .'/'.$i)) {
                                                    mkdir(EUGEN_OPT_PLUGIN_DIR.'pdf/zwischenblaetter/'.$boni_post_id .'/'.$i, 0777, true);
                                                }

                                                //Zwischenblätter
                                                $zwischenblatt = new \Mpdf\Mpdf([
                                                    'fontDir' => array_merge($fontDirs, [
                                                        EUGEN_OPT_PLUGIN_DIR . 'asset/font/',
                                                    ]),
                                                    'fontdata' => $fontData + [ // lowercase letters only in font key
                                                            'nexa' => [
                                                                'R' => 'NexaRegular.ttf',
                                                                'I' => 'NexaRegular.ttf',
                                                            ]
                                                        ],
                                                    'default_font' => 'nexa'
                                                ]);

                                //Mieter Boniart
                                $boniart = '';
                                if(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == "e" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 0){  $boniart =  'EXPRESS CHECK';}
                                elseif(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == "m" && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 0){ $boniart = 'MANUELLER CHECK';}
                                elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 1){ $boniart = 'EXPRESS / MANUELLER CHECK';}

                                //Mieter Boni Ergebnis
                                $boni_ergebnis = '';
                                if(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == "e"){
                                    if(get_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_'.$i, true ) == 1){
                                        $boni_ergebnis =  'positiv';
                                    }
                                }
                                elseif(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == "m"){
                                    $boni_ergebnis = 'Dokumente hochgeladen';
                                }




                                                $zwischenblatt->WriteHTML('
                                        <img src="'.EUGEN_OPT_PLUGIN_URL .'asset/img/eugen_logo.png" width="90" />
                                        <h1 style=" font-family: nexa">
                                                   Zwischenblatt 
                                        </h1>
                                        <p style=" font-family: nexa">
                                        '.
                                                    get_post_meta( $boni_post_id, 'anrede_hauptmieter_'.$i, true ) .' '.
                                                    get_post_meta( $boni_post_id, 'vorname_hauptmieter_'.$i, true ).' '.
                                                    get_post_meta( $boni_post_id, 'name_hauptmieter_'.$i, true )
                                                    .'
                                       </p>
                                        <table style="width: 100%">
                                          <thead>
                                            <tr>
                                              <td style="width: 33%; ">MIETER:IN</td>
                                               <td style="width: 33%; ">'.get_post_meta( $boni_post_id, 'anrede_hauptmieter_'.$i, true ).' '. get_post_meta( $boni_post_id, 'vorname_hauptmieter_'.$i, true ).' '. get_post_meta( $boni_post_id, 'name_hauptmieter_'.$i, true ).'</td>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td style="width: 33%; ">BONITÄT</td>
                                              <td style="width: 33%; ">'.$boniart.'</td>
                                             
                                            </tr>
                                            <tr>
                                              <td style="width: 33%">ERGEBNIS</td>
                                              <td>'.$boni_ergebnis.'</td>
                                             
                                            </tr>
                                       
                                          </tbody>
                                        </table>
                                        <!-- Codes by Quackit.com -->
                                        
                                        ');

                                                $zwischenblatt->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/zwischenblaetter/zwischenblatt_'. $i .'.pdf');
                                                $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/zwischenblaetter/zwischenblatt_'. $i .'.pdf', 'all');


                                        //FinCred //
                                                if(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == 'e' && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 1){
                                                  //  if(true){
                                                    $response = $client->request('GET',  get_option( 'fin_server').'invite/'.$current_invite_id.'/report', [
                                                        'headers' => [
                                                            'Authorization' => 'Bearer ' . get_option( 'fin_api_key' ),
                                                            'accept'        => 'application/json',
                                                        ],
                                                    ]);

                                                    $dataInvite =  json_decode($response->getBody(), true);
                                                    $dataInvite_b64 = $dataInvite['data'];

                                                    $finCrediblePDF =   file_put_contents(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/finCred_result_'. $i .'.pdf', gzdecode(base64_decode($dataInvite_b64)));
                                                    $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/finCred_result_'. $i .'.pdf', 'all');
                                                }
                                                elseif(get_post_meta( $boni_post_id, 'boni_art_hauptmieter_'.$i, true ) == 'm' && get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 0){

                                                    $dir    = EUGEN_OPT_PLUGIN_DIR.'pdf/manuell/'.$boni_post_id.'/'.$i;
                                                    $dirty_files = scandir($dir, SCANDIR_SORT_DESCENDING);
                                                    $files = array_diff($dirty_files, array('.', '..'));
                                                    //create Zwischenblatt Folder
                                                    if (!file_exists(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id)) {
                                                        mkdir(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id, 0777, true);
                                                    }

                                                    $m_i=1;

                                                    foreach ($files as $file){
                                                    $file_with_path = EUGEN_OPT_PLUGIN_DIR.'pdf/manuell/'.$boni_post_id.'/'.$i.'/'.$file;

                                                        if(mime_content_type($file_with_path) == 'image/jpg'  ){
                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');

                                                            //PDF Merger
                                                            $pdf->addPDF($in_pdf, 'all');
                                                            $m_i++;
                                                        }
                                                        elseif( mime_content_type($file_with_path) == 'image/jpeg' ){

                                                            //mpdf
                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');

                                                            //PDF Merger
                                                            $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf', 'all');
                                                            $m_i++;

                                                        }
                                                        elseif( mime_content_type($file_with_path) == 'image/png' ){

                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');



                                                           //PDF Merger
                                                            $pdf->addPDF( EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf', 'all');
                                                            $m_i++;
                                                        }
                                                     elseif(mime_content_type($file_with_path) == 'application/pdf'){

                                                            $pdf->addPDF($file_with_path, 'all');
                                                            $m_i++;
                                                        }
													else{
														//delete it!
														//unlink($file_with_path);
													}

                                                    }
                                                }
                                                elseif(get_post_meta( $boni_post_id, 'express_manuell_hauptmieter_'.$i, true ) == 1){

                                                    //FinCredible
                                                    $response = $client->request('GET',  get_option( 'fin_server').'invite/'.$current_invite_id.'/report', [
                                                        'headers' => [
                                                            'Authorization' => 'Bearer ' . get_option( 'fin_api_key' ),
                                                            'accept'        => 'application/json',
                                                        ],
                                                    ]);

                                                    $dataInvite =  json_decode($response->getBody(), true);
                                                    $dataInvite_b64 = $dataInvite['data'];

                                                    $finCrediblePDF =   file_put_contents(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/'.$boni_post_id.'/'.$i.'finCred_result_'. $i .'.pdf', gzdecode(base64_decode($dataInvite_b64)));
                                                    $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/finCredResults/'.$boni_post_id.'/'.$i.'finCred_result_'. $i .'.pdf', 'all');


                                                    //Manuell

                                                    $dir    = EUGEN_OPT_PLUGIN_DIR.'pdf/manuell/'.$boni_post_id.'/'.$i;
                                                    $dirty_files = scandir($dir, SCANDIR_SORT_DESCENDING);
                                                    $files = array_diff($dirty_files, array('.', '..'));

                                                    //create Zwischenblatt Folder
                                                    if (!file_exists(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id)) {
                                                        mkdir(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id, 0777, true);
                                                    }

                                                    $m_i=1;

                                                    foreach ($files as $file){
                                                        $file_with_path = EUGEN_OPT_PLUGIN_DIR.'pdf/manuell/'.$boni_post_id.'/'.$i.'/'.$file;

                                                        if(mime_content_type($file_with_path) == 'image/jpg'  ){
                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');

                                                            //PDF Merger
                                                            $pdf->addPDF($in_pdf, 'all');
                                                            $m_i++;
                                                        }
                                                        elseif( mime_content_type($file_with_path) == 'image/jpeg' ){

                                                            //mpdf
                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');

                                                            //PDF Merger
                                                            $pdf->addPDF(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf', 'all');
                                                            $m_i++;

                                                        }
                                                        elseif( mime_content_type($file_with_path) == 'image/png' ){

                                                            $in_pdf = new \Mpdf\Mpdf();
                                                            $in_pdf->WriteHTML('
                                                                    <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
                                                                        <img src="'.$file_with_path.'"
                                                                             style="width: 210mm; height: 297mm; margin: 0;" />
                                                                    </div>');
                                                            $in_pdf->Output(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf');



                                                            //PDF Merger
                                                            $pdf->addPDF( EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/'.$boni_post_id.'/temp'.$m_i.'.pdf', 'all');
                                                            $m_i++;
                                                        }
                                                        elseif(mime_content_type($file_with_path) == 'application/pdf'){

                                                            $pdf->addPDF($file_with_path, 'all');
                                                            $m_i++;
                                                        }
                                                        else{
                                                            //delete it!
                                                            //unlink($file_with_path);
                                                        }

                                                    }



                                                }



                            }//Ende Forschleife

                //PDF merging
                $pdf->merge('file', EUGEN_OPT_PLUGIN_DIR.'pdf/AUSGABE_'.$boni_post_id.'.pdf', 'P');

	$attachments = array(EUGEN_OPT_PLUGIN_DIR.'pdf/AUSGABE_'.$boni_post_id.'.pdf');


    //send PDF to onOffice

                //create Objects
                    $sdk = new onOfficeSDK();
                    $sdk->setApiVersion('stable');


                //convert PDF in b64
                    $documentData = file_get_contents(EUGEN_OPT_PLUGIN_DIR.'pdf/AUSGABE_'.$boni_post_id.'.pdf');
                    $documentBase64 = base64_encode($documentData);

                    $data_tmp_upload = [
                        "data" => $documentBase64,
                        "file" => "AUSGABE_'.$boni_post_id.'.pdf"

                    ];

                    $handleTmpId = $sdk->callGeneric(onOfficeSDK::ACTION_ID_DO, 'uploadfile', $data_tmp_upload);
                    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
                    $tmp_upload = $sdk->getResponseArray($handleTmpId);


                    //$filesize = $tmp_upload['data']['records'][0]['elements']['filesize'];
                    $tmpUploadId = $tmp_upload['data']['records'][0]['elements']['tmpUploadId'];
                    $onOffice_address_id = get_post_meta( $boni_post_id, 'onoffice_address_id', true );

                    $data_upload = [
                        "file" => "AUSGABE_'.$boni_post_id.'.pdf",
                        "title" => "AUSGABE_'.$boni_post_id.'.pdf",

                        "tmpUploadId" => $tmpUploadId,
                        "relatedRecordId" => $onOffice_address_id, //Address ID von Steffi
                        "module" => "address"

                    ];


                    $handleUpload = $sdk->callGeneric(onOfficeSDK::ACTION_ID_DO, 'uploadfile', $data_upload);
                    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));

                  //Testing
                    $upload = $sdk->getResponseArray($handleUpload);
                    echo '<h3> Link with Address Record </h3>';
                    echo '<pre>' . json_encode($upload, JSON_PRETTY_PRINT) . '</pre>';
                    //Testing


               /*     //delete All Files in manuell & manuell_inPDF
                    $files_manuell_inPDF = glob(EUGEN_OPT_PLUGIN_DIR.'pdf/manuell_inPDF/*'); // get all file names
                    foreach($files_manuell_inPDF as $file){ // iterate files
                        if(is_file($file)) {
                            unlink($file); // delete file
                        }
                    }*/





}//Ende if-Abfrage

}//Ende Funktion

