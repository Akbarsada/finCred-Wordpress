<?php
use onOffice\SDK\onOfficeSDK;
function onOfficeRequest_cb(){

   //onOffice Request
    include ON_OFFICE_AUTOLOADER_DIR;





    //onOffice Object
    $sdk = new onOfficeSDK();
    $sdk->setApiVersion('stable');

    $onOfficeRequest_array = array();

    $parametersReadEstate = [
        'addMainLangId' => true,
        'addestatelanguage' => true,
        'estatelanguage' =>  'ENG',
        'data' => [

            'uuid',
            'Id',



            'objekttitel',
            'strasse',
            'hausnummer',
            'plz',
            'ort',
            'warmmiete',
            'wohnflaeche',
            'anzahl_zimmer',
            'anzahl_badezimmer',


            'ind_2366_Feld_ObjFlaeche129',
            'balkon_terrasse_flaeche',
            'ind_2368_Feld_ObjFlaeche130',
            'gartenflaeche',
            'ind_2504_Feld_ObjFlaeche156',



            'gartenflaeche',


            'balkon_terrasse_flaeche',
            'gartenflaeche',
            'anzahl_sep_wc',

            'anzahl_balkone',
            'ind_2366_Feld_ObjFlaeche129',

            'anzahl_terrassen',
            'balkon_terrasse_flaeche',

            'anzahl_logia',
            'ind_2368_Feld_ObjFlaeche130',

            'ind_2372_Feld_ObjFlaeche132',
            'ind_2504_Feld_ObjFlaeche156',

            'gartenflaeche',

            'moebliert',

            'anzahl_stellplaetze',

            'multiParkingLot',

            'fahrstuhl',

            'etage',

            'kellerflaeche',

            'barrierefrei',

            'verfuegbar_ab',

            'max_mietdauer',

            'warmmiete',

            'betr_kosten_inkl_ust',

            'kaution',

            'aussen_courtage',

            'provisionsfrei',

            'ea_hwb_at',

            'ea_hwb_klasse_at',

            'baujahr',

            'heizungsart',

            'ind_2774_Feld_ObjPreise223',

            'ind_2775_Feld_ObjInfra224',

            'objektnr_extern',

            'objektbeschreibung',
            'lage',
            'ausstatt_beschr',
            'sonstige_angaben',
            'ind_1840_Feld_ObjFreitexte15',

            'ind_2742_Feld_ObjVerwaltung217',

            'MP_timum_buchungslink',

            'stammobjekt',

            'klimatisiert',
            'wellnessbereich',
            'abstellraum',
            'fahrradraum',
            'ind_2374_Feld_ObjAusstattung133',
            'ind_2376_Feld_ObjAusstattung134',
            'swimmingpool',
            'ind_2516_Feld_ObjAusstattung161',
            'ind_2398_Feld_ObjAusstattung136',

            'ind_2544_Feld_ObjAusstattung171',
            'ind_2546_Feld_ObjAusstattung172',
            'ind_2548_Feld_ObjAusstattung173',

            'kamin',
            'ind_2540_Feld_ObjAusstattung169',
            'ind_2550_Feld_ObjAusstattung174',
            'ind_2552_Feld_ObjAusstattung175',
            'ind_2554_Feld_ObjAusstattung176',

            'ind_2556_Feld_ObjAusstattung177',
            'ind_2558_Feld_ObjAusstattung178',
            'ind_2560_Feld_ObjAusstattung179',

            'ind_2830_Feld_ObjTech251',

            //Mietbelastungsquote
            'ind_3124_Feld_ObjPreise357'


        ],
        'listlimit' => get_option( 'onOffice_anzahl_objekte'),

        'filter' => [
            'ind_2830_Feld_ObjTech251' => [
                ['op' => '=', 'val' => 1],
            ]

        ],
    ];

    $handleReadEstate = $sdk->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadEstate);
    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
    $immos = $sdk->getResponseArray($handleReadEstate);


//    echo '<pre>';
//    echo print_r($immos);
//    echo '</pre>';
//    wp_die();

    //Request Bilder

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




//Die Bilder werden geloopt
//    $bilder['data']['records'][0]['elements'][0]['url'];
//
//    foreach ( $bilder['data']['records'] as $records   ){
//
//        echo $records['elements'][0]['url'];
//
//    }



    $onOfficeRequest_array ['fin_prozent'] = 'test';
    $onOfficeRequest_array ['immo'] = $immos;

            //create WP_Post
            //1. Step - loop the onOffice Request an create Posts

            global $wp;

            //WP Querry all Custom Posts apartment
            $s_array = array( 'posts_per_page' => -1,
                              'post_type' => 'estates'
                            );
            $new_query = array_merge( $s_array, (array) $wp->query_vars );
            $the_query = new WP_Query( $new_query );
            $onOffice_ID_array = array();

        // Loop all Posts and push all onOffice-IDs into the array $onOffice_ID_array
            if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                           $onOffice_ID =  get_post_meta( get_the_ID(), '_id', true );

                           // $onOffice_ID_array[$onOffice_ID] = get_the_ID();
                            $onOffice_ID_array[get_the_ID()] = $onOffice_ID;
                           // array_push($onOffice_ID_array, intval($onOffice_ID));

                        }
            }






    foreach($immos['data']['records'] as $immo){

//checks
$objekt_titel = (empty(wp_strip_all_tags( $immo['elements']['objekttitel'] )) ? 'Immobilie hat keinen Titel': wp_strip_all_tags( $immo['elements']['objekttitel'] ));
$objekt_beschreibung = (empty(wp_strip_all_tags( $immo['elements']['objekttitel'] )) ? 'Immobilie hat keine Beschreibung': wp_strip_all_tags( $immo['elements']['objektbeschreibung'] ));





                if( in_array($immo['id'], $onOffice_ID_array)){
                //UPDATE POST

                //get the Post_ID from onOffice_ID
                $current_postID =  array_search($immo['id'],$onOffice_ID_array,false);

	                $custom_tax = array(
		                'land' => $immo['elements']['land']

	                );
                    $appartment = array(

                        'ID'                    => $current_postID,
                        'post_author'           => 1,
                        'post_content'          => $objekt_beschreibung,
                        'post_content_filtered' => '',
                        'post_title'            => $objekt_titel,

                         'tax_input'             => $custom_tax,

                    );


                    //update Postmeta


                    update_post_meta($current_postID, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
                    update_post_meta($current_postID, 'objekt_titel', $immo['elements']['objekttitel']);
                    update_post_meta($current_postID, 'objekt_adresse', $immo['elements']['strasse'] . ' ' .$immo['elements']['hausnummer']);
                    update_post_meta($current_postID, '_ort', $immo['elements']['ort']);

                    update_post_meta($current_postID, '_id', $immo['id']);
                    update_post_meta($current_postID, '_id', $immo['id']);
                    update_post_meta($current_postID, '_type', $immo['type']);
                    update_post_meta($current_postID, '_kaufpreis', $immo['elements']['kaufpreis']);
                    update_post_meta($current_postID, '_lage', $immo['elements']['lage']);
                    update_post_meta($current_postID, '_betr_kosten_inkl_ust', $immo['elements']['betr_kosten_inkl_ust']);
                    update_post_meta($current_postID, '_plz', $immo['elements']['plz']);

                    update_post_meta($current_postID, '_land', $immo['elements']['land']);
                    update_post_meta($current_postID, '_etage', $immo['elements']['etage']);
                    update_post_meta($current_postID, '_wohnflaeche', $immo['elements']['wohnflaeche']);
                    update_post_meta($current_postID, '_preisAufAnfrage', $immo['elements']['preisAufAnfrage']);
                    update_post_meta($current_postID, '_anzahl_zimmer', $immo['elements']['anzahl_zimmer']);
                    update_post_meta($current_postID, '_grundstuecksflaeche', $immo['elements']['grundstuecksflaeche']);
                    update_post_meta($current_postID, '_anzahl_badezimmer', $immo['elements']['anzahl_badezimmer']);
                    update_post_meta($current_postID, '_balkon_terrasse_flaeche', $immo['elements']['balkon_terrasse_flaeche']);
                    update_post_meta($current_postID, '_anzahl_stellplaetze', $immo['elements']['anzahl_stellplaetze']);
                    update_post_meta($current_postID, '_nutzflaeche', $immo['elements']['nutzflaeche']);
                    update_post_meta($current_postID, '_anzahl_sep_wc', $immo['elements']['anzahl_sep_wc']);
                    update_post_meta($current_postID, '_anzahl_balkone', $immo['elements']['anzahl_balkone']);
                    update_post_meta($current_postID, '_anzahl_terrassen', $immo['elements']['anzahl_terrassen']);
                    update_post_meta($current_postID, '_anzahl_logia', $immo['elements']['anzahl_logia']);
                    update_post_meta($current_postID, '_moebliert', $immo['elements']['moebliert']);
                    update_post_meta($current_postID, '_multiParkingLot', $immo['elements']['multiParkingLot']);
                    update_post_meta($current_postID, '_multiParkingLot_carport', $immo['elements']['multiParkingLot']['carport']);
                    update_post_meta($current_postID, '_multiParkingLot_duplex', $immo['elements']['multiParkingLot']['duplex']);
                    update_post_meta($current_postID, '_multiParkingLot_parkingSpace', $immo['elements']['multiParkingLot']['parkingSpace']);
                    update_post_meta($current_postID, '_multiParkingLot_garage', $immo['elements']['multiParkingLot']['garage']);
                    update_post_meta($current_postID, '_multiParkingLot_multiStoryGarage', $immo['elements']['multiParkingLot']['multiStoryGarage']);
                    update_post_meta($current_postID, '_multiParkingLot_undergroundGarage', $immo['elements']['multiParkingLot']['undergroundGarage']);
                    update_post_meta($current_postID, '_multiParkingLot_otherParkingLot', $immo['elements']['multiParkingLot']['otherParkingLot']);
                    update_post_meta($current_postID, '_fahrstuhl', $immo['elements']['fahrstuhl']);
                    update_post_meta($current_postID, '_kellerflaeche', $immo['elements']['kellerflaeche']);
                    update_post_meta($current_postID, '_barrierefrei', $immo['elements']['barrierefrei']);
                    update_post_meta($current_postID, '_verfuegbar_ab', $immo['elements']['verfuegbar_ab']);
                    update_post_meta($current_postID, '_aussen_courtage', $immo['elements']['aussen_courtage']);
                    update_post_meta($current_postID, '_provisionsfrei', $immo['elements']['provisionsfrei']);
                    update_post_meta($current_postID, '_ea_hwb_at', $immo['elements']['ea_hwb_at']);
                    update_post_meta($current_postID, '_objektnr_extern', $immo['elements']['objektnr_extern']);
                    update_post_meta($current_postID, '_ausstatt_beschr', $immo['elements']['ausstatt_beschr']);
                    update_post_meta($current_postID, '_sonstige_angaben', $immo['elements']['sonstige_angaben']);
                    update_post_meta($current_postID, '_klimatisiert', $immo['elements']['klimatisiert']);
                    update_post_meta($current_postID, '_wellnessbereich', $immo['elements']['wellnessbereich']);
                    update_post_meta($current_postID, '_abstellraum', $immo['elements']['abstellraum']);

                    update_post_meta($current_postID, '_fahrradraum', $immo['elements']['fahrradraum']);
                    update_post_meta($current_postID, '_swimmingpool', $immo['elements']['swimmingpool']);
                    update_post_meta($current_postID, '_mietbelastuns_quote', $immo['elements']['ind_3124_Feld_ObjPreise357']);
                    update_post_meta($current_postID, '_warmmiete', $immo['elements']['warmmiete']);

                    wp_update_post( $appartment );

                }

                else{
                //INSERT POST
	                                        $custom_tax = array(
											'land' => $immo['elements']['land'],
											'stadt' => $immo['elements']['ort'],
											'district' => $immo['elements']['ort'],
											'miete' => $immo['elements']['warmmiete'],
											'flaeche' => $immo['elements']['wohnflaeche'],
											'anzahl_zimmer' => $immo['elements']['anzahl_zimmer'],
											'balkon' => $immo['elements']['anzahl_balkone'],
											'terrasse' => $immo['elements']['anzahl_terrassen'],
											'garten' => $immo['elements']['ort'],
											'aufzug' => $immo['elements']['ort'],
											'barrierefrei' => $immo['elements']['barrierefrei'],
											'keller' => $immo['elements']['kellerflaeche'],
											'moebeliert' => $immo['elements']['moebliert'],
											'parkplatz' => $immo['elements']['multiParkingLot']['undergroundGarage'],
											'seniorengerecht' => $immo['elements']['ort'],
											'erstbezug' => $immo['elements']['ort'],
											'neuwertig' => $immo['elements']['ort'],
											'saniert' => $immo['elements']['ort'],

	                                        );
                                            $appartment = array(

                                                'post_author'           => 1,
                                                'post_content'          => $objekt_beschreibung,
                                                'post_content_filtered' => '',
                                                'post_title'            => $objekt_titel,
                                                'post_excerpt'          => '',
                                                'post_status'           => 'publish',
                                                'post_type'             => 'estates',
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
                                            $post_id = wp_insert_post( $appartment );

                                            //Wenn Post erstellt wurde
                                            if ($post_id) {
                                                // insert post meta

                                                add_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
                                                add_post_meta($post_id, 'objekt_titel', $immo['elements']['objekttitel']);
                                                add_post_meta($post_id, 'objekt_adresse', $immo['elements']['strasse'] . ' ' .$immo['elements']['hausnummer']);

                                                add_post_meta($post_id, '_uuid', $immo['elements']['uuid']);
                                                add_post_meta($post_id, '_id', $immo['id']);
                                                add_post_meta($post_id, '_type', $immo['type']);
                                                add_post_meta($post_id, '_kaufpreis', $immo['elements']['kaufpreis']);
                                                add_post_meta($post_id, '_lage', $immo['elements']['lage']);
                                                add_post_meta($post_id, '_betr_kosten_inkl_ust', $immo['elements']['betr_kosten_inkl_ust']);
                                                add_post_meta($post_id, '_plz', $immo['elements']['plz']);
                                                add_post_meta($post_id, '_strasse', $immo['elements']['strasse']);
                                                add_post_meta($post_id, '_hausnummer', $immo['elements']['hausnummer']);
                                                add_post_meta($post_id, '_ort', $immo['elements']['ort']);
                                                add_post_meta($post_id, '_land', $immo['elements']['land']);
                                                add_post_meta($post_id, '_etage', $immo['elements']['etage']);
                                                add_post_meta($post_id, '_wohnflaeche', $immo['elements']['wohnflaeche']);
                                                add_post_meta($post_id, '_preisAufAnfrage', $immo['elements']['preisAufAnfrage']);
                                                add_post_meta($post_id, '_anzahl_zimmer', $immo['elements']['anzahl_zimmer']);
                                                add_post_meta($post_id, '_grundstuecksflaeche', $immo['elements']['grundstuecksflaeche']);
                                                add_post_meta($post_id, '_anzahl_badezimmer', $immo['elements']['anzahl_badezimmer']);
                                                add_post_meta($post_id, '_balkon_terrasse_flaeche', $immo['elements']['balkon_terrasse_flaeche']);
                                                add_post_meta($post_id, '_anzahl_stellplaetze', $immo['elements']['anzahl_stellplaetze']);
                                                add_post_meta($post_id, '_nutzflaeche', $immo['elements']['nutzflaeche']);
                                                add_post_meta($post_id, '_anzahl_sep_wc', $immo['elements']['anzahl_sep_wc']);
                                                add_post_meta($post_id, '_anzahl_balkone', $immo['elements']['anzahl_balkone']);
                                                add_post_meta($post_id, '_anzahl_terrassen', $immo['elements']['anzahl_terrassen']);
                                                add_post_meta($post_id, '_anzahl_logia', $immo['elements']['anzahl_logia']);
                                                add_post_meta($post_id, '_moebliert', $immo['elements']['moebliert']);
                                                add_post_meta($post_id, '_multiParkingLot', $immo['elements']['multiParkingLot']);
                                                add_post_meta($post_id, '_multiParkingLot_carport', $immo['elements']['multiParkingLot']['carport']);
                                                add_post_meta($post_id, '_multiParkingLot_duplex', $immo['elements']['multiParkingLot']['duplex']);
                                                add_post_meta($post_id, '_multiParkingLot_parkingSpace', $immo['elements']['multiParkingLot']['parkingSpace']);
                                                add_post_meta($post_id, '_multiParkingLot_garage', $immo['elements']['multiParkingLot']['garage']);
                                                add_post_meta($post_id, '_multiParkingLot_multiStoryGarage', $immo['elements']['multiParkingLot']['multiStoryGarage']);
                                                add_post_meta($post_id, '_multiParkingLot_undergroundGarage', $immo['elements']['multiParkingLot']['undergroundGarage']);
                                                add_post_meta($post_id, '_multiParkingLot_otherParkingLot', $immo['elements']['multiParkingLot']['otherParkingLot']);
                                                add_post_meta($post_id, '_fahrstuhl', $immo['elements']['fahrstuhl']);
                                                add_post_meta($post_id, '_kellerflaeche', $immo['elements']['kellerflaeche']);
                                                add_post_meta($post_id, '_barrierefrei', $immo['elements']['barrierefrei']);
                                                add_post_meta($post_id, '_verfuegbar_ab', $immo['elements']['verfuegbar_ab']);
                                                add_post_meta($post_id, '_aussen_courtage', $immo['elements']['aussen_courtage']);
                                                add_post_meta($post_id, '_provisionsfrei', $immo['elements']['provisionsfrei']);
                                                add_post_meta($post_id, '_ea_hwb_at', $immo['elements']['ea_hwb_at']);
                                                add_post_meta($post_id, '_objektnr_extern', $immo['elements']['objektnr_extern']);
                                                add_post_meta($post_id, '_ausstatt_beschr', $immo['elements']['ausstatt_beschr']);
                                                add_post_meta($post_id, '_sonstige_angaben', $immo['elements']['sonstige_angaben']);
                                                add_post_meta($post_id, '_klimatisiert', $immo['elements']['klimatisiert']);
                                                add_post_meta($post_id, '_wellnessbereich', $immo['elements']['wellnessbereich']);
                                                add_post_meta($post_id, '_abstellraum', $immo['elements']['abstellraum']);
                                                add_post_meta($post_id, '_fahrradraum', $immo['elements']['fahrradraum']);
                                                add_post_meta($post_id, '_swimmingpool', $immo['elements']['swimmingpool']);
                                                add_post_meta($post_id, '_warmmiete', $immo['elements']['warmmiete']);
                                                add_post_meta($post_id, '_mietbelastuns_quote', $immo['elements']['ind_3124_Feld_ObjPreise357']);


                                            }




                }


    }
/*    echo $zahler;
wp_die('tot');*/


    wp_send_json_success( $onOfficeRequest_array );
    return true;
    wp_die();
}
// add_action('wp_ajax_nopriv_onOfficeRequest_cb', 'onOfficeRequest_cb');
add_action('wp_ajax_onOfficeRequest_cb', 'onOfficeRequest_cb');
