<?php



use onOffice\SDK\onOfficeSDK;

	include ON_OFFICE_AUTOLOADER_DIR;
	$fin_Daten = array();

$fin_hashtag_objekt = substr($_GET['uuid'], -36);
$fin_hashtag_kunde = substr($_GET['uuid'], 0, -37);

//get apartment Post-ID
$args = array(
    'post_type' => 'estates',
    'meta_query' => array(
        array(
            'key' => '_uuid' ,
            'value' => $fin_hashtag_objekt,
            'compare' => 'IN',
        )
    )
);
$query = new WP_Query($args);
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        $apartment_post_id = get_the_ID();
    }

//Wenn Immo in Wordpress DB
    if(strlen($_GET['uuid']) == 73){

////onOffice Request
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
                'etage',
                'multiParkingLot'

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

/*echo '<pre>';
        print_r($immos);
        wp_die();*/

        //Request for Picture
        $sdkBilder = new onOfficeSDK();
        $sdkBilder->setApiVersion('stable');


if(!empty($immos['data']['records'][0]['elements']['Id'])){

    $parametersEstatePictures = [
        'estateids' => [
            $immos['data']['records'][0]['elements']['Id']
        ],

        'categories' => ['Titelbild', 'Foto', 'Foto_gross', 'Grundriss', 'Lageplan']
    ];

    $handleReadEstatePics = $sdkBilder->callGeneric(onOfficeSDK::ACTION_ID_GET, 'estatepictures', $parametersEstatePictures);
    $sdkBilder->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
    $bilder = $sdkBilder->getResponseArray($handleReadEstatePics);

}




        //Request for Address
        $sdkCustom = new onOfficeSDK();
        $sdkCustom->setApiVersion('stable');
        $parametersReadCustom = [
            'data' => [

                'uuid',
                "Briefanrede",
                "Vorname",
                "Name",
                "Land",
                "Ort",
                "Plz",
                "Strasse",
                "Email",
                "Anrede"
            ],

            'filter' => [
                'uuid' => [
                    ['op' => '=', 'val' => $fin_hashtag_kunde],
                ]
            ],
        ];
        $handleReadEstateCustom = $sdkCustom->callGeneric(onOfficeSDK::ACTION_ID_READ, 'address', $parametersReadCustom);
        $sdkCustom->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
        $custom = $sdkCustom->getResponseArray($handleReadEstateCustom);
////ENDE onOffice Request
        
//Check ob vom Objekt Daten vorhanden sind && Kunden Daten vorhanden sind
        if(!empty($immos['data']['records'][0]['elements']['Id']) && !empty($custom['data']['records'][0]['elements']['uuid'])){

            //Twig Variables
            //Objekt Daten
            $context['objekttitel'] = $immos['data']['records'][0]['elements']['objekttitel'];
            $context['objektbeschreibung'] = $immos['data']['records'][0]['elements']['objektbeschreibung'];
            $context['objek_Id'] = $immos['data']['records'][0]['elements']['Id'];
            $context['objektnr_extern'] = $immos['data']['records'][0]['elements']['objektnr_extern'];
            $context['objekt_uuid'] = $immos['data']['records'][0]['elements']['uuid'];
            $context['garage'] =  $immos['data']['records'][0]['elements']['multiParkingLot'];
            $context['address_id'] =  $custom['data']['records'][0]['elements']['id'];



            $test = $immos['data']['records'][0]['elements']['multiParkingLot'];


            $context['carport'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['carport']['Count'];
            $context['duplex'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['duplex']['Count'];
            $context['parkingSpace'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['parkingSpace']['Count'];
            $context['garage'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['garage']['Count'];
            $context['multiStoryGarage'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['multiStoryGarage']['Count'];
            $context['undergroundGarage'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['undergroundGarage']['Count'];
            $context['otherParkingLot'] =  $immos['data']['records'][0]['elements']['multiParkingLot']['otherParkingLot']['Count'];

            $garagen_plaetze =  $immos['data']['records'][0]['elements']['multiParkingLot']['carport']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['duplex']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['parkingSpace']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['garage']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['multiStoryGarage']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['undergroundGarage']['Count'] +
                                $immos['data']['records'][0]['elements']['multiParkingLot']['otherParkingLot']['Count'];

            $context['garagen_plaetze'] = $garagen_plaetze;



            //Warmmiete
            $context['warmmiete'] = str_replace('.', ',', $immos['data']['records'][0]['elements']['warmmiete']);

            //Warmmiete English
            $context['warmmiete_english'] = $immos['data']['records'][0]['elements']['warmmiete'];

            $warmmiete_float = (float)$immos['data']['records'][0]['elements']['warmmiete'];

            if( $immos['data']['records'][0]['elements']['anzahl_zimmer'] - floor($immos['data']['records'][0]['elements']['anzahl_zimmer']) >= 0.1  ) {
                $context['anzahl_zimmer'] =  number_format($immos['data']['records'][0]['elements']['anzahl_zimmer'],1,",",".");
            }
            else{
                $context['anzahl_zimmer'] =  number_format($immos['data']['records'][0]['elements']['anzahl_zimmer'],0,",",".");
            }

            //Anzahl Zimmer Englisch
            $context['anzahl_zimmer_english'] = $immos['data']['records'][0]['elements']['anzahl_zimmer'];

            $context['strasse'] = $immos['data']['records'][0]['elements']['strasse'];
            $context['hausnummer'] = $immos['data']['records'][0]['elements']['hausnummer'];
            $context['plz'] = $immos['data']['records'][0]['elements']['plz'];
            $context['ort'] = $immos['data']['records'][0]['elements']['ort'];
            $context['land'] = $immos['data']['records'][0]['elements']['land'];
            $context['etage'] = $immos['data']['records'][0]['elements']['etage'];

            $context['objekt_bild_url'] = $bilder['data']['records'][0]['elements'][0]['url'];

            //Kunden Daten
            $context['kunden_vorname'] = $custom['data']['records'][0]['elements']['Vorname'];
            $context['kunden_name'] = $custom['data']['records'][0]['elements']['Name'];
            $context['kunden_anrede'] = $custom['data']['records'][0]['elements']['Anrede'];
            $context['kunden_email'] = $custom['data']['records'][0]['elements']['Email'];
            $context['kunden_uuid'] = $custom['data']['records'][0]['elements']['uuid'];

            //hashs uuid
            $context['hashtag_objekt'] = $fin_hashtag_objekt;
            $context['hashtag_kunde'] = $fin_hashtag_kunde;
            //Ende Twig Variables

// Bonitäts Post gesucht
            $args = array(
                'post_type' => 'bonitaet',
                'meta_query' => array(
                    array(
                        'key' => 'onoffice_url_hash' ,
                        'value' => $_GET['uuid'],
                        'compare' => 'IN',
                    )
                )
            );
            $query = new WP_Query($args);

            // Wenn Bonipost vorhanden
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $boni_post_id = get_the_ID();
                    $context['boni_post_id'] = $boni_post_id;

                    $status_boni = get_post_meta($boni_post_id , 'boni_abgeschlossen_hauptmieter_1');
                    // abfragen ob die Bonität bereits durchgeführt wurde
                    if($status_boni[0] == '1'){
                        $context['error_status'] = 'boni_abgeschlossen';
                    }
                    else{
                        $context['error_status'] = 'ok';
                    }
                }
            }
            // Wenn Bonipost nicht vorhanden
            else {
                // ein WP-Post bonitaet wird erstellt
                $custom_tax = array(
                    'offen' => '',
                    'geschlossen' => '',
                );
                $bonitaet = array(
                    'post_author'           => 1,
                    //requiered
                    'post_content'          => $fin_hashtag_objekt,
                    'post_content_filtered' => '',
                    //requiered
                    'post_title'            => $context['objekttitel'] . '_' . $context['kunden_name'] . '_' . $context['kunden_vorname'],
                    'post_excerpt'          => '',
                    'post_status'           => 'private',
                    'post_type'             => 'bonitaet',
                    'comment_status'        => 'closed',
                    'ping_status'           => 'closed',
                    'post_password'         => '',
                    'to_ping'               => '',
                    'pinged'                => '',
                    'post_parent'           => 0,
                    'menu_order'            => 0,
                    'guid'                  => '',
                    'context'               => '',
                    'post_date'             => '',
                    'post_date_gmt'         => '',
                    'tax_input'             => $custom_tax,

                );
                // Insert the post into the database
                $boni_post_id = wp_insert_post( $bonitaet );
                $context['boni_post_id'] = $boni_post_id;
                if ($boni_post_id) {


                    //UUIDs Onoffice
                    add_post_meta($boni_post_id, 'onoffice_url_hash', $_GET['uuid']);
                    add_post_meta($boni_post_id, 'onoffice_objekt_hash', $fin_hashtag_objekt);
                    add_post_meta($boni_post_id, 'onoffice_kunden_hash', $fin_hashtag_kunde);
                    add_post_meta($boni_post_id, 'onoffice_address_id', $custom['data']['records'][0]['elements']['id']);

                    //FinCred PropID
                    add_post_meta($boni_post_id, 'finCred_prop_ID', '');
                    add_post_meta($boni_post_id, 'finCredible_prop_ref', '');
                    add_post_meta($boni_post_id, 'finCredible_invite_ID', '');

                    //set Apartment PostID
                    add_post_meta($boni_post_id, 'wp_apartments_post_ID', $apartment_post_id);

                    //Apartment Status
                    add_post_meta($boni_post_id, 'wp_apartments_status', '');

                    //Anzahl Hauptmieter & Personen
                    add_post_meta($boni_post_id, 'anzahl_hauptmieter', '' );
                    add_post_meta($boni_post_id, 'anzahl_garage', 0 );
                    add_post_meta($boni_post_id, 'anzahl_durchgefuehrter_bonis', 0 );
                    add_post_meta($boni_post_id, 'boni_post_abgeschlossen', 0 );
                    add_post_meta($boni_post_id, 'anzahl_bewohner', '' );

                    //Einzugstermin Wunsch & Alternativ
                    add_post_meta($boni_post_id, 'einzugstermin_wunsch', '');
                    add_post_meta($boni_post_id, 'einzugstermin_alternative', '');

                    //Hauptmieter 1
                    add_post_meta($boni_post_id, 'nummer_hauptmieter_1', 1);
                    add_post_meta($boni_post_id, 'anrede_hauptmieter_1', $custom['data']['records'][0]['elements']['Anrede']);
                    add_post_meta($boni_post_id, 'vorname_hauptmieter_1', $custom['data']['records'][0]['elements']['Vorname']);
                    add_post_meta($boni_post_id, 'name_hauptmieter_1', $custom['data']['records'][0]['elements']['Name']);
                    add_post_meta($boni_post_id, 'email_hauptmieter_1', $custom['data']['records'][0]['elements']['Email']);

                    add_post_meta($boni_post_id, 'hat_buerge_hauptmieter_1', 0);
                    add_post_meta($boni_post_id, 'boni_art_hauptmieter_1', '');
                    add_post_meta($boni_post_id, 'boni_gemacht_hauptmieter_1', 0);
                    add_post_meta($boni_post_id, 'boni_abgeschlossen_hauptmieter_1', 0);
                    add_post_meta($boni_post_id, 'boni_versendet_hauptmieter_1', 0);
                    add_post_meta($boni_post_id, 'boni_ergebnis_hauptmieter_1', 0);
                    add_post_meta($boni_post_id, 'boni_invite_url_hauptmieter_1', '');
                    add_post_meta($boni_post_id, 'boni_invite_id_hauptmieter_1', '');
                    add_post_meta($boni_post_id, 'express_manuell_hauptmieter_1', 0);

                    add_post_meta($boni_post_id, 'anrede_buerge_1', '');
                    add_post_meta($boni_post_id, 'vorname_buerge_1', '');
                    add_post_meta($boni_post_id, 'name_buerge_1', '');
                    add_post_meta($boni_post_id, 'email_buerge_1', '');

                    //Hauptmieter 2
                    add_post_meta($boni_post_id, 'nummer_hauptmieter_2', 2);
                    add_post_meta($boni_post_id, 'anrede_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'vorname_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'name_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'email_hauptmieter_2', '');

                    add_post_meta($boni_post_id, 'hat_buerge_hauptmieter_2', 0);
                    add_post_meta($boni_post_id, 'boni_art_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'boni_gemacht_hauptmieter_2', 0);
                    add_post_meta($boni_post_id, 'boni_abgeschlossen_hauptmieter_2', 0);
                    add_post_meta($boni_post_id, 'boni_versendet_hauptmieter_2', 0);
                    add_post_meta($boni_post_id, 'boni_ergebnis_hauptmieter_2', 0);
                    add_post_meta($boni_post_id, 'boni_invite_url_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'boni_invite_id_hauptmieter_2', '');
                    add_post_meta($boni_post_id, 'express_manuell_hauptmieter_2', 0);

                    add_post_meta($boni_post_id, 'anrede_buerge_2', '');
                    add_post_meta($boni_post_id, 'vorname_buerge_2', '');
                    add_post_meta($boni_post_id, 'name_buerge_2', '');
                    add_post_meta($boni_post_id, 'email_buerge_2', '');

                    //Hauptmieter 3
                    add_post_meta($boni_post_id, 'nummer_hauptmieter_3', 3);
                    add_post_meta($boni_post_id, 'anrede_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'vorname_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'name_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'email_hauptmieter_3', '');

                    add_post_meta($boni_post_id, 'hat_buerge_hauptmieter_3', 0);
                    add_post_meta($boni_post_id, 'boni_art_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'boni_gemacht_hauptmieter_3', 0);
                    add_post_meta($boni_post_id, 'boni_abgeschlossen_hauptmieter_3', 0);
                    add_post_meta($boni_post_id, 'boni_versendet_hauptmieter_3', 0);
                    add_post_meta($boni_post_id, 'boni_ergebnis_hauptmieter_3', 0);
                    add_post_meta($boni_post_id, 'boni_invite_url_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'boni_invite_id_hauptmieter_3', '');
                    add_post_meta($boni_post_id, 'express_manuell_hauptmieter_3', 0);

                    add_post_meta($boni_post_id, 'anrede_buerge_3', '');
                    add_post_meta($boni_post_id, 'vorname_buerge_3', '');
                    add_post_meta($boni_post_id, 'name_buerge_3', '');
                    add_post_meta($boni_post_id, 'email_buerge_3', '');

                    //Hauptmieter 4
                    add_post_meta($boni_post_id, 'nummer_hauptmieter_4', 4);
                    add_post_meta($boni_post_id, 'anrede_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'vorname_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'name_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'email_hauptmieter_4', '');

                    add_post_meta($boni_post_id, 'hat_buerge_hauptmieter_4', 0);
                    add_post_meta($boni_post_id, 'boni_art_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'boni_gemacht_hauptmieter_4', 0);
                    add_post_meta($boni_post_id, 'boni_abgeschlossen_hauptmieter_4', 0);
                    add_post_meta($boni_post_id, 'boni_versendet_hauptmieter_4', 0);
                    add_post_meta($boni_post_id, 'boni_ergebnis_hauptmieter_4', 0);
                    add_post_meta($boni_post_id, 'boni_invite_url_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'boni_invite_id_hauptmieter_4', '');
                    add_post_meta($boni_post_id, 'express_manuell_hauptmieter_4', 0);

                    add_post_meta($boni_post_id, 'anrede_buerge_4', '');
                    add_post_meta($boni_post_id, 'vorname_buerge_4', '');
                    add_post_meta($boni_post_id, 'name_buerge_4', '');
                    add_post_meta($boni_post_id, 'email_buerge_4', '');

                    //Hauptmieter 5
                    add_post_meta($boni_post_id, 'nummer_hauptmieter_5', 5);
                    add_post_meta($boni_post_id, 'anrede_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'vorname_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'name_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'email_hauptmieter_5', '');

                    add_post_meta($boni_post_id, 'hat_buerge_hauptmieter_5', 0);
                    add_post_meta($boni_post_id, 'boni_art_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'boni_gemacht_hauptmieter_5', 0);
                    add_post_meta($boni_post_id, 'boni_abgeschlossen_hauptmieter_5', 0);
                    add_post_meta($boni_post_id, 'boni_versendet_hauptmieter_5', 0);
                    add_post_meta($boni_post_id, 'boni_ergebnis_hauptmieter_5', 0);
                    add_post_meta($boni_post_id, 'boni_invite_url_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'boni_invite_id_hauptmieter_5', '');
                    add_post_meta($boni_post_id, 'express_manuell_hauptmieter_5', 0);

                    add_post_meta($boni_post_id, 'anrede_buerge_5', '');
                    add_post_meta($boni_post_id, 'vorname_buerge_5', '');
                    add_post_meta($boni_post_id, 'name_buerge_5', '');
                    add_post_meta($boni_post_id, 'email_buerge_5', '');

                }


                $context['error_status'] = 'ok';



            }

        }
        else{
            $context['error_status'] = 'kein_objekt';
        }
    }
    else{
        $context['error_status'] = 'link_kaputt';
    }

}
// The Loop
//Wenn Immo nicht in Wordpress DB
else {
    $context['error_status'] = 'kein_objekt';
}




