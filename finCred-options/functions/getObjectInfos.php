
<?php
//35685
function getObjectInfos($onoffice_id){


    //get apartment Post-ID
    $args = array(
        'post_type' => 'estates',
        'meta_query' => array(
            array(
                'key' => '_id' ,
                'value' => $onoffice_id,
                'compare' => '=',
            )
        )
    );
    $query = new WP_Query($args);
// The Loop
    if ( $query->have_posts() ) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
        }

    }

        $objectArray = array();

    $objectArray['objekt_bild_url'] = get_post_meta($post_id, 'objekt_bild_url', true);
    $objectArray['objekt_titel'] = get_post_meta($post_id, 'objekt_titel', true);
    $objectArray['objekt_adresse'] = get_post_meta($post_id, 'objekt_adresse', true);

    $objectArray['_uuid'] =  get_post_meta($post_id, '_uuid', true);
    $objectArray['_id'] =  get_post_meta($post_id, '_id', true);
    $objectArray['_type'] =  get_post_meta($post_id, '_type', true);
    $objectArray['_kaufpreis'] =  get_post_meta($post_id, '_kaufpreis', true);
    $objectArray['_lage'] =  get_post_meta($post_id, '_lage', true);
    $objectArray['_betr_kosten_inkl_ust'] =  get_post_meta($post_id, '_betr_kosten_inkl_ust', true);
    $objectArray['_plz'] =  get_post_meta($post_id, '_plz', true);
    $objectArray['_strasse'] =  get_post_meta($post_id, '_strasse', true);
    $objectArray['_hausnummer'] =  get_post_meta($post_id, '_hausnummer', true);
    $objectArray['_ort'] =  get_post_meta($post_id, '_ort', true);
    $objectArray['_land'] =  get_post_meta($post_id, '_land', true);
    $objectArray['_etage'] =  get_post_meta($post_id, '_etage', true);
    $objectArray['_wohnflaeche'] =  get_post_meta($post_id, '_wohnflaeche', true);
    $objectArray['_preisAufAnfrage'] =  get_post_meta($post_id, '_preisAufAnfrage', true);
    $objectArray['_anzahl_zimmer'] =  get_post_meta($post_id, '_anzahl_zimmer', true);
    $objectArray['_grundstuecksflaeche'] =  get_post_meta($post_id, '_grundstuecksflaeche', true);
    $objectArray['_anzahl_badezimmer'] =  get_post_meta($post_id, '_anzahl_badezimmer', true);
    $objectArray['_balkon_terrasse_flaeche'] =  get_post_meta($post_id, '_balkon_terrasse_flaeche', true);
    $objectArray['_anzahl_stellplaetze'] =  get_post_meta($post_id, '_anzahl_stellplaetze', true);
    $objectArray['_nutzflaeche'] =  get_post_meta($post_id, '_nutzflaeche', true);
    $objectArray['_anzahl_sep_wc'] =  get_post_meta($post_id, '_anzahl_sep_wc', true);
    $objectArray['_anzahl_balkone'] =  get_post_meta($post_id, '_anzahl_balkone', true);
    $objectArray['_anzahl_terrassen'] =  get_post_meta($post_id, '_anzahl_terrassen', true);
    $objectArray['_anzahl_logia'] =  get_post_meta($post_id, '_anzahl_logia', true);
    $objectArray['_moebliert'] =  get_post_meta($post_id, '_moebliert', true);
    $objectArray['_multiParkingLot'] =  get_post_meta($post_id, '_multiParkingLot', true);
    $objectArray['_multiParkingLot_carport'] =  get_post_meta($post_id, '_multiParkingLot_carport', true);
    $objectArray['_multiParkingLot_duplex'] =  get_post_meta($post_id, '_multiParkingLot_duplex', true);
    $objectArray['_multiParkingLot_parkingSpace'] =  get_post_meta($post_id, '_multiParkingLot_parkingSpace', true);
    $objectArray['_multiParkingLot_garage'] =  get_post_meta($post_id, '_multiParkingLot_garage', true);
    $objectArray['_multiParkingLot_multiStoryGarage'] =  get_post_meta($post_id, '_multiParkingLot_multiStoryGarage', true);
    $objectArray['_multiParkingLot_undergroundGarage'] =  get_post_meta($post_id, '_multiParkingLot_undergroundGarage', true);
    $objectArray['_multiParkingLot_otherParkingLot'] =  get_post_meta($post_id, '_multiParkingLot_otherParkingLot', true);
    $objectArray['_fahrstuhl'] =  get_post_meta($post_id, '_fahrstuhl', true);
    $objectArray['_kellerflaeche'] =  get_post_meta($post_id, '_kellerflaeche', true);
    $objectArray['_barrierefrei'] =  get_post_meta($post_id, '_barrierefrei', true);
    $objectArray['_verfuegbar_ab'] =  get_post_meta($post_id, '_verfuegbar_ab', true);
    $objectArray['_aussen_courtage'] =  get_post_meta($post_id, '_aussen_courtage', true);
    $objectArray['_provisionsfrei'] =  get_post_meta($post_id, '_provisionsfrei', true);
    $objectArray['_ea_hwb_at'] =  get_post_meta($post_id, '_ea_hwb_at', true);
    $objectArray['_objektnr_extern'] =  get_post_meta($post_id, '_objektnr_extern', true);
    $objectArray['_ausstatt_beschr'] =  get_post_meta($post_id, '_ausstatt_beschr', true);
    $objectArray['_sonstige_angaben'] =  get_post_meta($post_id, '_sonstige_angaben', true);
    $objectArray['_klimatisiert'] =  get_post_meta($post_id, '_klimatisiert', true);
    $objectArray['_wellnessbereich'] =  get_post_meta($post_id, '_wellnessbereich', true);
    $objectArray['_abstellraum'] =  get_post_meta($post_id, '_abstellraum', true);
    $objectArray['_fahrradraum'] =  get_post_meta($post_id, '_fahrradraum', true);
    $objectArray['_swimmingpool'] =  get_post_meta($post_id, '_swimmingpool', true);
    $objectArray['_warmmiete'] =  get_post_meta($post_id, '_warmmiete', true);
    $objectArray['_mietbelastuns_quote'] =  get_post_meta($post_id, '_mietbelastuns_quote', true);


    echo '<pre>';
    print_r($objectArray) ;
    wp_die();





}


