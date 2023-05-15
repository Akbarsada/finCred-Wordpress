<?php
$context['manuell'] = 'manuell';

use onOffice\SDK\onOfficeSDK;

include ON_OFFICE_AUTOLOADER_DIR;
$fin_Daten = array();

//das bekomme ich von der Url
$boni_post_id = $_GET['boni_post_id'];
$nummer_inviter = $_GET['nummer_inviter'];

//das hole ich mir aus der Datenbank WP
$boni_versendet = get_post_meta( $boni_post_id, 'boni_versendet_hauptmieter_'.$nummer_inviter, true );
$fin_hashtag_objekt = get_post_meta( $boni_post_id, 'onoffice_objekt_hash', true );
$anzahl_hauptmieter = get_post_meta( $boni_post_id, 'anzahl_bewohner', true );
$anzahl_bewohner = get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true );



//Request for Object
$sdkObject = new onOfficeSDK();
$sdkObject->setApiVersion('stable');

$parametersReadEstate = [
    'data' => [
        'uuid',
        'objekttitel',
        'objektbeschreibung',
        'Id',
        'objektnr_extern',
        'ind_2830_Feld_ObjTech251',
        'strasse',
        'hausnummer',
        'plz',
        'ort',
        'land',
//				'top',
        'warmmiete',
        'anzahl_zimmer',
        'etage'

    ],

    'filter' => [
        'uuid' => [
            ['op' => '=', 'val' => $fin_hashtag_objekt]

        ],
        'ind_2830_Feld_ObjTech251' => [
            ['op' => '=', 'val' => 1],
        ]
    ],
];

$handleReadEstate = $sdkObject->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadEstate);
$sdkObject->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
$immos = $sdkObject->getResponseArray($handleReadEstate);


//Request für Bilder
$sdkBilder = new onOfficeSDK();
$sdkBilder->setApiVersion('stable');

$parametersEstatePictures = [
    'estateids' => [
        $immos['data']['records'][0]['elements']['Id']
    ],

    'categories' => ['Titelbild', 'Foto', 'Foto_gross', 'Grundriss', 'Lageplan']
];

$handleReadEstatePics = $sdkBilder->callGeneric(onOfficeSDK::ACTION_ID_GET, 'estatepictures', $parametersEstatePictures);
$sdkBilder->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
$bilder = $sdkBilder->getResponseArray($handleReadEstatePics);

//Check ob vom Objekt Daten vorhanden sind && Kunden Daten vorhanden sind
if(!empty($immos['data']['records'][0]['elements']['Id'])){
    //Objekt Daten
    $context['objekttitel'] = $immos['data']['records'][0]['elements']['objekttitel'];
    $context['objektbeschreibung'] = $immos['data']['records'][0]['elements']['objektbeschreibung'];
    $context['objek_Id'] = $immos['data']['records'][0]['elements']['Id'];
    $context['objektnr_extern'] = $immos['data']['records'][0]['elements']['objektnr_extern'];
    $context['objekt_uuid'] = $immos['data']['records'][0]['elements']['uuid'];

    //Warmmiete
    $context['warmmiete'] = str_replace('.', ',', $immos['data']['records'][0]['elements']['warmmiete']);

    //Warmmiete English
    $context['warmmiete_english'] = $immos['data']['records'][0]['elements']['warmmiete'];
    $warmmiete_float = (float)$immos['data']['records'][0]['elements']['warmmiete'];

    //Anzahl Zimmer
    $context['anzahl_zimmer'] =  str_replace('.', ',', $immos['data']['records'][0]['elements']['anzahl_zimmer']);

    //Anzahl Zimmer Englisch
    $context['anzahl_zimmer_english'] = $immos['data']['records'][0]['elements']['anzahl_zimmer'];
    $context['strasse'] = $immos['data']['records'][0]['elements']['strasse'];
    $context['hausnummer'] = $immos['data']['records'][0]['elements']['hausnummer'];
    $context['plz'] = $immos['data']['records'][0]['elements']['plz'];
    $context['ort'] = $immos['data']['records'][0]['elements']['ort'];
    $context['land'] = $immos['data']['records'][0]['elements']['land'];
    $context['etage'] = $immos['data']['records'][0]['elements']['etage'];
    $context['objekt_bild_url'] = $bilder['data']['records'][0]['elements'][0]['url'];
    $context['einzugstermin_wunsch'] = get_post_meta( $boni_post_id, 'einzugstermin_wunsch', true );
    $context['einzugstermin_alternative'] = get_post_meta( $boni_post_id, 'einzugstermin_alternative', true );

    //Kunden Daten heraussuchen aus WP Datenbank
    //Hauptmieter1
    $context['kunden_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_hauptmieter_1', true );
    $context['kunden_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_hauptmieter_1', true );
    $context['kunden_name_1'] = get_post_meta( $boni_post_id, 'name_hauptmieter_1', true );
    $context['kunden_email_1'] = get_post_meta( $boni_post_id, 'email_hauptmieter_1', true );
    $context['hat_buerge_hauptmieter_1'] = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_1', true );

    $context['buerge_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_buerge_1', true );
    $context['buerge_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_buerge_1', true );
    $context['buerge_name_1'] = get_post_meta( $boni_post_id, 'name_buerge_1', true );
    $context['buerge_email_1'] = get_post_meta( $boni_post_id, 'email_buerge_1', true );

    //Hauptmieter2
    $context['kunden_anrede_2'] = get_post_meta( $boni_post_id, 'anrede_hauptmieter_2', true );
    $context['kunden_vorname_2'] = get_post_meta( $boni_post_id, 'vorname_hauptmieter_2', true );
    $context['kunden_name_2'] = get_post_meta( $boni_post_id, 'name_hauptmieter_2', true );
    $context['kunden_email_2'] = get_post_meta( $boni_post_id, 'email_hauptmieter_2', true );
    $context['hat_buerge_hauptmieter_2'] = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_2', true );

    $context['buerge_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_buerge_2', true );
    $context['buerge_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_buerge_2', true );
    $context['buerge_name_1'] = get_post_meta( $boni_post_id, 'name_buerge_2', true );
    $context['buerge_email_1'] = get_post_meta( $boni_post_id, 'email_buerge_2', true );

    //Hauptmieter3
    $context['kunden_anrede_3'] = get_post_meta( $boni_post_id, 'anrede_hauptmieter_3', true );
    $context['kunden_vorname_3'] = get_post_meta( $boni_post_id, 'vorname_hauptmieter_3', true );
    $context['kunden_name_3'] = get_post_meta( $boni_post_id, 'name_hauptmieter_3', true );
    $context['kunden_email_3'] = get_post_meta( $boni_post_id, 'email_hauptmieter_3', true );
    $context['hat_buerge_hauptmieter_3'] = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_3', true );

    $context['buerge_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_buerge_3', true );
    $context['buerge_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_buerge_3', true );
    $context['buerge_name_1'] = get_post_meta( $boni_post_id, 'name_buerge_3', true );
    $context['buerge_email_1'] = get_post_meta( $boni_post_id, 'email_buerge_3', true );

    //Hauptmieter4
    $context['kunden_anrede_4'] = get_post_meta( $boni_post_id, 'anrede_hauptmieter_4', true );
    $context['kunden_vorname_4'] = get_post_meta( $boni_post_id, 'vorname_hauptmieter_4', true );
    $context['kunden_name_4'] = get_post_meta( $boni_post_id, 'name_hauptmieter_4', true );
    $context['kunden_email_4'] = get_post_meta( $boni_post_id, 'email_hauptmieter_4', true );
    $context['hat_buerge_hauptmieter_4'] = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_4', true );

    $context['buerge_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_buerge_4', true );
    $context['buerge_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_buerge_4', true );
    $context['buerge_name_1'] = get_post_meta( $boni_post_id, 'name_buerge_4', true );
    $context['buerge_email_1'] = get_post_meta( $boni_post_id, 'email_buerge_4', true );

    //Hauptmieter5
    $context['kunden_anrede_5'] = get_post_meta( $boni_post_id, 'anrede_hauptmieter_5', true );
    $context['kunden_vorname_5'] = get_post_meta( $boni_post_id, 'vorname_hauptmieter_5', true );
    $context['kunden_name_5'] = get_post_meta( $boni_post_id, 'name_hauptmieter_5', true );
    $context['kunden_email_5'] = get_post_meta( $boni_post_id, 'email_hauptmieter_5', true );
    $context['hat_buerge_hauptmieter_5'] = get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_5', true );

    $context['buerge_anrede_1'] = get_post_meta( $boni_post_id, 'anrede_buerge_5', true );
    $context['buerge_vorname_1'] = get_post_meta( $boni_post_id, 'vorname_buerge_5', true );
    $context['buerge_name_1'] = get_post_meta( $boni_post_id, 'name_buerge_5', true );
    $context['buerge_email_1'] = get_post_meta( $boni_post_id, 'email_buerge_5', true );

    //hashs uuid
    $context['hashtag_objekt'] = $fin_hashtag_objekt;

}
else{
    $context['error_status'] = 'kein_objekt_onffice';
}

$status_boni = get_post_meta($boni_post_id , 'boni_abgeschlossen_hauptmieter_'.$nummer_inviter, true);
// abfragen ob die Bonität bereits durchgeführt wurde
if($status_boni[0] == 1){
    global $context;
    $context['error_status'] = 'boni_abgeschlossen';

}
else{
    $context['error_status'] = 'ok';
}