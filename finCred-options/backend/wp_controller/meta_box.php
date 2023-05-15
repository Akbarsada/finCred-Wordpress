<?php
global $post;



//objekt
$onoffice_url_hash = get_post_meta( $post->ID, 'onoffice_url_hash', true );
$onoffice_objekt_hash = get_post_meta( $post->ID, 'onoffice_objekt_hash', true );
$onoffice_kunden_hash = get_post_meta( $post->ID, 'onoffice_kunden_hash', true );
$finCred_prop_ID = get_post_meta( $post->ID, 'finCred_prop_ID', true );
$finCredible_prop_ref = get_post_meta( $post->ID, 'finCredible_prop_ref', true );
$wp_apartments_post_ID = get_post_meta( $post->ID, 'wp_apartments_post_ID', true );
$anzahl_hauptmieter = get_post_meta( $post->ID, 'anzahl_hauptmieter', true );
$anzahl_bewohner = get_post_meta( $post->ID, 'anzahl_bewohner', true );
$einzugstermin_wunsch = get_post_meta( $post->ID, 'einzugstermin_wunsch', true );
$einzugstermin_alternative = get_post_meta( $post->ID, 'einzugstermin_alternative', true );
$onOffice_address_id = get_post_meta( $post->ID, 'onoffice_address_id', true );

$anzahl_durchgefuehrter_bonis = get_post_meta( $post->ID, 'anzahl_durchgefuehrter_bonis', true );
$boni_post_abgeschlossen = get_post_meta( $post->ID, 'boni_post_abgeschlossen', true );


//Mieter 1
$anrede_hauptmieter_1 = get_post_meta( $post->ID, 'anrede_hauptmieter_1', true );
$vorname_hauptmieter_1 = get_post_meta( $post->ID, 'vorname_hauptmieter_1', true );
$name_hauptmieter_1 = get_post_meta( $post->ID, 'name_hauptmieter_1', true );
$email_hauptmieter_1 = get_post_meta( $post->ID, 'email_hauptmieter_1', true );
$hat_buerge_hauptmieter_1 = get_post_meta( $post->ID, 'hat_buerge_hauptmieter_1', true );
$anrede_buerge_1 = get_post_meta( $post->ID, 'anrede_buerge_1', true );
$vorname_buerge_1 = get_post_meta( $post->ID, 'vorname_buerge_1', true );
$name_buerge_1 = get_post_meta( $post->ID, 'name_buerge_1', true );
$email_buerge_1 = get_post_meta( $post->ID, 'email_buerge_1', true );
$nummer_hauptmieter_1 = get_post_meta( $post->ID, 'nummer_hauptmieter_1', true );
$boni_art_hauptmieter_1 = get_post_meta( $post->ID, 'boni_art_hauptmieter_1', true );
$boni_gemacht_hauptmieter_1 = get_post_meta( $post->ID, 'boni_gemacht_hauptmieter_1', true );
$boni_versendet_hauptmieter_1 = get_post_meta( $post->ID, 'boni_versendet_hauptmieter_1', true );
$boni_ergebnis_hauptmieter_1 = get_post_meta( $post->ID, 'boni_ergebnis_hauptmieter_1', true );
$boni_invite_url_hauptmieter_1 = get_post_meta( $post->ID, 'boni_invite_url_hauptmieter_1', true );
$boni_invite_id_hauptmieter_1 = get_post_meta( $post->ID, 'boni_invite_id_hauptmieter_1', true );
$boni_abgeschlossen_hauptmieter_1 = get_post_meta( $post->ID, 'boni_abgeschlossen_hauptmieter_1', true );




//Mieter 2
$anrede_hauptmieter_2 = get_post_meta( $post->ID, 'anrede_hauptmieter_2', true );
$vorname_hauptmieter_2 = get_post_meta( $post->ID, 'vorname_hauptmieter_2', true );
$name_hauptmieter_2 = get_post_meta( $post->ID, 'name_hauptmieter_2', true );
$email_hauptmieter_2 = get_post_meta( $post->ID, 'email_hauptmieter_2', true );
$hat_buerge_hauptmieter_2 = get_post_meta( $post->ID, 'hat_buerge_hauptmieter_2', true );
$anrede_buerge_2 = get_post_meta( $post->ID, 'anrede_buerge_2', true );
$vorname_buerge_2 = get_post_meta( $post->ID, 'vorname_buerge_2', true );
$name_buerge_2 = get_post_meta( $post->ID, 'name_buerge_2', true );
$email_buerge_2 = get_post_meta( $post->ID, 'email_buerge_2', true );
$nummer_hauptmieter_2 = get_post_meta( $post->ID, 'nummer_hauptmieter_2', true );
$boni_art_hauptmieter_2 = get_post_meta( $post->ID, 'boni_art_hauptmieter_2', true );
$boni_gemacht_hauptmieter_2 = get_post_meta( $post->ID, 'boni_gemacht_hauptmieter_2', true );
$boni_versendet_hauptmieter_2 = get_post_meta( $post->ID, 'boni_versendet_hauptmieter_2', true );
$boni_ergebnis_hauptmieter_2 = get_post_meta( $post->ID, 'boni_ergebnis_hauptmieter_2', true );
$boni_invite_url_hauptmieter_2 = get_post_meta( $post->ID, 'boni_invite_url_hauptmieter_2', true );
$boni_invite_id_hauptmieter_2 = get_post_meta( $post->ID, 'boni_invite_id_hauptmieter_2', true );
$boni_abgeschlossen_hauptmieter_2 = get_post_meta( $post->ID, 'boni_abgeschlossen_hauptmieter_2', true );



//Mieter 3
$anrede_hauptmieter_3 = get_post_meta( $post->ID, 'anrede_hauptmieter_3', true );
$vorname_hauptmieter_3 = get_post_meta( $post->ID, 'vorname_hauptmieter_3', true );
$name_hauptmieter_3 = get_post_meta( $post->ID, 'name_hauptmieter_3', true );
$email_hauptmieter_3 = get_post_meta( $post->ID, 'email_hauptmieter_3', true );
$hat_buerge_hauptmieter_3 = get_post_meta( $post->ID, 'hat_buerge_hauptmieter_3', true );
$anrede_buerge_3 = get_post_meta( $post->ID, 'anrede_buerge_3', true );
$vorname_buerge_3 = get_post_meta( $post->ID, 'vorname_buerge_3', true );
$name_buerge_3 = get_post_meta( $post->ID, 'name_buerge_3', true );
$email_buerge_3 = get_post_meta( $post->ID, 'email_buerge_3', true );
$nummer_hauptmieter_3 = get_post_meta( $post->ID, 'nummer_hauptmieter_3', true );
$boni_art_hauptmieter_3 = get_post_meta( $post->ID, 'boni_art_hauptmieter_3', true );
$boni_gemacht_hauptmieter_3 = get_post_meta( $post->ID, 'boni_gemacht_hauptmieter_3', true );
$boni_versendet_hauptmieter_3 = get_post_meta( $post->ID, 'boni_versendet_hauptmieter_3', true );
$boni_ergebnis_hauptmieter_3 = get_post_meta( $post->ID, 'boni_ergebnis_hauptmieter_3', true );
$boni_invite_url_hauptmieter_3 = get_post_meta( $post->ID, 'boni_invite_url_hauptmieter_3', true );
$boni_invite_id_hauptmieter_3 = get_post_meta( $post->ID, 'boni_invite_id_hauptmieter_3', true );
$boni_abgeschlossen_hauptmieter_3 = get_post_meta( $post->ID, 'boni_abgeschlossen_hauptmieter_3', true );


//Mieter 4
$anrede_hauptmieter_4 = get_post_meta( $post->ID, 'anrede_hauptmieter_4', true );
$vorname_hauptmieter_4 = get_post_meta( $post->ID, 'vorname_hauptmieter_4', true );
$name_hauptmieter_4 = get_post_meta( $post->ID, 'name_hauptmieter_4', true );
$email_hauptmieter_4 = get_post_meta( $post->ID, 'email_hauptmieter_4', true );
$hat_buerge_hauptmieter_4 = get_post_meta( $post->ID, 'hat_buerge_hauptmieter_4', true );
$anrede_buerge_4 = get_post_meta( $post->ID, 'anrede_buerge_4', true );
$vorname_buerge_4 = get_post_meta( $post->ID, 'vorname_buerge_4', true );
$name_buerge_4 = get_post_meta( $post->ID, 'name_buerge_4', true );
$email_buerge_4 = get_post_meta( $post->ID, 'email_buerge_4', true );
$nummer_hauptmieter_4 = get_post_meta( $post->ID, 'nummer_hauptmieter_4', true );
$boni_art_hauptmieter_4 = get_post_meta( $post->ID, 'boni_art_hauptmieter_4', true );
$boni_gemacht_hauptmieter_4 = get_post_meta( $post->ID, 'boni_gemacht_hauptmieter_4', true );
$boni_versendet_hauptmieter_4 = get_post_meta( $post->ID, 'boni_versendet_hauptmieter_4', true );
$boni_ergebnis_hauptmieter_4 = get_post_meta( $post->ID, 'boni_ergebnis_hauptmieter_4', true );
$boni_invite_url_hauptmieter_4 = get_post_meta( $post->ID, 'boni_invite_url_hauptmieter_4', true );
$boni_invite_id_hauptmieter_4 = get_post_meta( $post->ID, 'boni_invite_id_hauptmieter_4', true );
$boni_abgeschlossen_hauptmieter_4 = get_post_meta( $post->ID, 'boni_abgeschlossen_hauptmieter_4', true );


//Mieter 5
$anrede_hauptmieter_5 = get_post_meta( $post->ID, 'anrede_hauptmieter_5', true );
$vorname_hauptmieter_5 = get_post_meta( $post->ID, 'vorname_hauptmieter_5', true );
$name_hauptmieter_5 = get_post_meta( $post->ID, 'name_hauptmieter_5', true );
$email_hauptmieter_5 = get_post_meta( $post->ID, 'email_hauptmieter_5', true );
$hat_buerge_hauptmieter_5 = get_post_meta( $post->ID, 'hat_buerge_hauptmieter_5', true );
$anrede_buerge_5 = get_post_meta( $post->ID, 'anrede_buerge_5', true );
$vorname_buerge_5 = get_post_meta( $post->ID, 'vorname_buerge_5', true );
$name_buerge_5 = get_post_meta( $post->ID, 'name_buerge_5', true );
$email_buerge_5 = get_post_meta( $post->ID, 'email_buerge_5', true );
$nummer_hauptmieter_5 = get_post_meta( $post->ID, 'nummer_hauptmieter_5', true );
$boni_art_hauptmieter_5 = get_post_meta( $post->ID, 'boni_art_hauptmieter_5', true );
$boni_gemacht_hauptmieter_5 = get_post_meta( $post->ID, 'boni_gemacht_hauptmieter_5', true );
$boni_versendet_hauptmieter_5 = get_post_meta( $post->ID, 'boni_versendet_hauptmieter_5', true );
$boni_ergebnis_hauptmieter_5 = get_post_meta( $post->ID, 'boni_ergebnis_hauptmieter_5', true );
$boni_invite_url_hauptmieter_5 = get_post_meta( $post->ID, 'boni_invite_url_hauptmieter_5', true );
$boni_invite_id_hauptmieter_5 = get_post_meta( $post->ID, 'boni_invite_id_hauptmieter_5', true );
$boni_abgeschlossen_hauptmieter_5 = get_post_meta( $post->ID, 'boni_abgeschlossen_hauptmieter_5', true );

?>

<ul class="collapsible">
    <li>
        <div class="collapsible-header" style="font-weight: bold;">Objekt
            <div class="new badge yellow"  <?php if($boni_post_abgeschlossen == 1 ){echo 'style="display:block; position: absolute; right: 123px;"';} else{echo 'style="display:none;"';} ?> >
                <a  href="<?php echo EUGEN_OPT_PLUGIN_URL . 'pdf/AUSGABE_'.$post->ID.'.pdf' ?>">Download PDF</a>
            </div>

            <?php
            if($boni_post_abgeschlossen == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">

            <table>
                <thead>
                <tr>

                    <th>onOffice Objekt Hash</th>
                    <th>onOffice Adress Hash</th>
                    <th>finCred propID</th>
                    <th>finCredible propRef</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $onoffice_objekt_hash;  ?></td>
                    <td><?php echo $onoffice_kunden_hash;  ?></td>
                    <td><?php echo $finCred_prop_ID;  ?></td>
                    <td><?php echo $finCredible_prop_ref;  ?></td>


                </tr>

                </tbody>
            </table>

            <table>
                <thead>
                <tr>
                    <th>Eugen Objekt ID</th>
                    <th>Bonität ID</th>
                    <th>Anzahl Hauptmieter</th>
                    <th>Anzahl Bewohner</th>
                    <th>Wunsch-Einzugstermin</th>
                    <th>Alternativer Einzugstermin</th>
                </tr>
                </thead>

                <tbody>
                <tr>

                    <td><?php echo $wp_apartments_post_ID;  ?></td>
                    <td><?php echo $post->ID;  ?></td>
                    <td><?php echo $anzahl_hauptmieter;  ?></td>
                    <td><?php echo $anzahl_bewohner;  ?></td>
                    <td><?php echo $einzugstermin_wunsch;  ?></td>
                    <td><?php echo $einzugstermin_alternative;  ?></td>

                </tr>

                </tbody>
            </table>

            <table>
                <thead>
                <tr>

                    <th>Anzahl durchgeführter Bonitäten</th>
                    <th>Bonität abgeschlossen</th>
                    <th>onOffice Address ID</th>

                </tr>
                </thead>

                <tbody>
                <tr>

                    <td><?php echo $anzahl_durchgefuehrter_bonis;  ?></td>
                    <td>
                        <?php
                        if($boni_post_abgeschlossen == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
                        else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
                        ?>

                    </td>
                    <td><?php echo $onOffice_address_id;  ?></td>


                </tr>

                </tbody>
            </table>

        </div>
    </li>
</ul>




<ul class="collapsible">
    <li <?php if($anzahl_hauptmieter > 0){echo 'style="display: block"';} else{echo 'style="display: none"';} ?>>
        <div class="collapsible-header" <?php if(!empty($anrede_hauptmieter_1)){echo 'style="font-weight: bold;"' ;}   ?>>Hauptmieter 1
            <?php
            if($boni_abgeschlossen_hauptmieter_1 == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">
            <table>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_hauptmieter_1;  ?></td>
                    <td><?php echo $vorname_hauptmieter_1;  ?></td>
                    <td><?php echo $name_hauptmieter_1;  ?></td>
                    <td><?php echo $email_hauptmieter_1;  ?></td>
                    <td><?php

                        if($hat_buerge_hauptmieter_1 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                </tr>
                </tbody>
            </table>


            <h6 <?php if($hat_buerge_hauptmieter_1 == 0){ echo 'style="display: none"';} ?> >Bürge</h6>
            <table <?php if($hat_buerge_hauptmieter_1 == 0){ echo 'style="display: none"';} ?>>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_buerge_1;  ?></td>
                    <td><?php echo $vorname_buerge_1;  ?></td>
                    <td><?php echo $name_buerge_1;  ?></td>
                    <td><?php echo $email_buerge_1;  ?></td>
                </tr>
                </tbody>
            </table>


            <table>
                <thead>
                <tr>

                    <th>Bonitätsart</th>
                    <th>Bonitätseinladung versendet</th>
                    <th>Bonität durchgeführt</th>
                    <th>Bonitätsergebniss</th>
                    <th <?php if($boni_art_hauptmieter_1 == 'm'){ echo 'style="display: none;"';} ?>  >Bonitäts Einladung-URL</th>
                    <th <?php if($boni_art_hauptmieter_1 == 'm'){ echo 'style="display: none;"';} ?>>Bonitäts ID</th>



                </tr>
                </thead>

                <tbody>
                <tr>

                    <td><?php
                        if($boni_art_hauptmieter_1 == 'e'){
                            echo '<span>Express</span>';
                        }
                        elseif($boni_art_hauptmieter_1 == 'm'){echo '<span>Manuell</span>';}
                        else{echo '<span>offen</span>';}
                        ?></td>
                    <td><?php

                        if($boni_versendet_hauptmieter_1 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                    <td><?php

                       if($boni_gemacht_hauptmieter_1 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        elseif($boni_gemacht_hauptmieter_1 == 0){echo '<span style="color: red; font-weight: bold;">nein</span>';}
                        else{echo '<span style="color: orange; font-weight: bold;">manuelle Bonität</span>';}

                        ?></td>
                    <td><?php
                        if($boni_ergebnis_hauptmieter_1 == 0){
                            echo '<span>noch kein Ergebniss</span>';
                        }
                        if($boni_ergebnis_hauptmieter_1 == 1){
                            echo '<span style="color:green; font-weight: bold;">Bonität positv</span>';
                        }
                        if($boni_ergebnis_hauptmieter_1 == -1){
                            echo '<span  style="color:red; font-weight: bold;">Bonität negativ</span>';
                        }
                        ?>
                    </td>
                    <td ><?php echo$boni_invite_url_hauptmieter_1;  ?></td>
                    <td><?php echo$boni_invite_id_hauptmieter_1;  ?></td>
                </tr>
                </tbody>
            </table>

        </div>

    </li>
    <li <?php if($anzahl_hauptmieter > 1){echo 'style="display: block"';} else{echo 'style="display: none"';} ?>>
        <div class="collapsible-header" <?php if(!empty($anrede_hauptmieter_2)){echo 'style="font-weight: bold;"' ;}   ?>>Hauptmieter 2
            <?php
            if($boni_abgeschlossen_hauptmieter_2 == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">
            <table>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_hauptmieter_2;  ?></td>
                    <td><?php echo $vorname_hauptmieter_2;  ?></td>
                    <td><?php echo $name_hauptmieter_2;  ?></td>
                    <td><?php echo $email_hauptmieter_2;  ?></td>
                    <td><?php

                        if($hat_buerge_hauptmieter_2 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                </tr>
                </tbody>
            </table>


            <h6 <?php if($hat_buerge_hauptmieter_2 == 0){ echo 'style="display: none"';} ?>>Bürge</h6>
            <table <?php if($hat_buerge_hauptmieter_2 == 0){ echo 'style="display: none"';} ?>>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_buerge_2;  ?></td>
                    <td><?php echo $vorname_buerge_2;  ?></td>
                    <td><?php echo $name_buerge_2;  ?></td>
                    <td><?php echo $email_buerge_2;  ?></td>
                </tr>
                </tbody>
            </table>


            <table>
                <thead>
                <tr>
                    <th>Bonitätsart</th>
                    <th>Bonitätseinladung versendet</th>
                    <th>Bonität durchgeführt</th>
                    <th>Bonitätsergebniss</th>
                    <th <?php if($boni_art_hauptmieter_2 == 'm'){ echo 'style="display: none;"';} ?>  >Bonitäts Einladung-URL</th>
                    <th <?php if($boni_art_hauptmieter_2 == 'm'){ echo 'style="display: none;"';} ?>>Bonitäts ID</th>



                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php
                        if($boni_art_hauptmieter_2 == 'e'){
                            echo '<span>Express</span>';
                        }
                        elseif($boni_art_hauptmieter_2 == 'm'){echo '<span>Manuell</span>';}
                        else{echo '<span>offen</span>';}
                        ?></td>
                    <td><?php

                        if($boni_versendet_hauptmieter_2 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                    <td><?php

                        if($boni_gemacht_hauptmieter_2 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        elseif($boni_gemacht_hauptmieter_2 == 0){echo '<span style="color: red; font-weight: bold;">nein</span>';}
                        else{echo '<span style="color: orange; font-weight: bold;">manuelle Bonität</span>';}

                        ?></td>
                    <td><?php
                        if($boni_ergebnis_hauptmieter_2 == 0){
                            echo '<span>noch kein Ergebniss</span>';
                        }
                        if($boni_ergebnis_hauptmieter_2 == 1){
                            echo '<span style="color:green; font-weight: bold;">Bonität positv</span>';
                        }
                        if($boni_ergebnis_hauptmieter_2 == -1){
                            echo '<span  style="color:red; font-weight: bold;">Bonität negativ</span>';
                        }
                        ?>
                    </td>
                    <td><?php echo$boni_invite_url_hauptmieter_2;  ?></td>
                    <td><?php echo$boni_invite_id_hauptmieter_2;  ?></td>
                    </tr>
                </tbody>
            </table>








        </div>
    </li>
    <li <?php if($anzahl_hauptmieter > 2){echo 'style="display: block"';} else{echo 'style="display: none"';} ?>>
        <div class="collapsible-header" <?php if(!empty($anrede_hauptmieter_3)){echo 'style="font-weight: bold;"' ;}   ?>>Hauptmieter 3
            <?php
            if($boni_abgeschlossen_hauptmieter_3 == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">
            <table>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_hauptmieter_3;  ?></td>
                    <td><?php echo $vorname_hauptmieter_3;  ?></td>
                    <td><?php echo $name_hauptmieter_3;  ?></td>
                    <td><?php echo $email_hauptmieter_3;  ?></td>
                    <td><?php

                        if($hat_buerge_hauptmieter_3 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                </tr>
                </tbody>
            </table>


            <h6 <?php if($hat_buerge_hauptmieter_3 == 0){ echo 'style="display: none"';} ?>>Bürge</h6>
            <table <?php if($hat_buerge_hauptmieter_3 == 0){ echo 'style="display: none"';} ?>>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>

                </tr>
                </thead>

                <tbody >
                <tr>
                    <td><?php echo $anrede_buerge_3;  ?></td>
                    <td><?php echo $vorname_buerge_3;  ?></td>
                    <td><?php echo $name_buerge_3;  ?></td>
                    <td><?php echo $email_buerge_3;  ?></td>
                </tr>
                </tbody>
            </table>


            <table>
                <thead>
                <tr>
                    <th>Bonitätsart</th>
                    <th>Bonitätseinladung versendet</th>
                    <th>Bonität durchgeführt</th>
                    <th>Bonitätsergebniss</th>
                    <th <?php if($boni_art_hauptmieter_3 == 'm'){ echo 'style="display: none;"';} ?>  >Bonitäts Einladung-URL</th>
                    <th <?php if($boni_art_hauptmieter_3 == 'm'){ echo 'style="display: none;"';} ?>>Bonitäts ID</th>



                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php
                        if($boni_art_hauptmieter_3 == 'e'){
                            echo '<span>Express</span>';
                        }
                        elseif($boni_art_hauptmieter_3 == 'm'){echo '<span>Manuell</span>';}
                        else{echo '<span>offen</span>';}
                        ?></td>
                    <td><?php

                        if($boni_versendet_hauptmieter_3 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                    <td><?php

                        if($boni_gemacht_hauptmieter_3 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        elseif($boni_gemacht_hauptmieter_3 == 0){echo '<span style="color: red; font-weight: bold;">nein</span>';}
                        else{echo '<span style="color: orange; font-weight: bold;">manuelle Bonität</span>';}

                        ?></td>
                    <td><?php
                        if($boni_ergebnis_hauptmieter_3 == 0){
                            echo '<span>noch kein Ergebniss</span>';
                        }
                        if($boni_ergebnis_hauptmieter_3 == 1){
                            echo '<span style="color:green; font-weight: bold;">Bonität positv</span>';
                        }
                        if($boni_ergebnis_hauptmieter_3 == -1){
                            echo '<span  style="color:red; font-weight: bold;">Bonität negativ</span>';
                        }
                        ?>
                    </td>
                    <td><?php echo$boni_invite_url_hauptmieter_3;  ?></td>
                    <td><?php echo$boni_invite_id_hauptmieter_3;  ?></td>
                </tr>
                </tbody>
            </table>



        </div>
    </li>
    <li <?php if($anzahl_hauptmieter > 3){echo 'style="display: block"';} else{echo 'style="display: none"';} ?>>
        <div class="collapsible-header" <?php if(!empty($anrede_hauptmieter_4)){echo 'style="font-weight: bold;"' ;}   ?>>Hauptmieter 4
            <?php
            if($boni_abgeschlossen_hauptmieter_4 == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">

            <table>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_hauptmieter_4;  ?></td>
                    <td><?php echo $vorname_hauptmieter_4;  ?></td>
                    <td><?php echo $name_hauptmieter_4;  ?></td>
                    <td><?php echo $email_hauptmieter_4;  ?></td>
                    <td><?php

                        if($hat_buerge_hauptmieter_4 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                </tr>
                </tbody>
            </table>


            <h6 <?php if($hat_buerge_hauptmieter_4 == 0){ echo 'style="display: none"';} ?>>Bürge</h6>
            <table <?php if($hat_buerge_hauptmieter_4 == 0){ echo 'style="display: none"';} ?>>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_buerge_4;  ?></td>
                    <td><?php echo $vorname_buerge_4;  ?></td>
                    <td><?php echo $name_buerge_4;  ?></td>
                    <td><?php echo $email_buerge_4;  ?></td>
                </tr>
                </tbody>
            </table>


            <table>
                <thead>
                <tr>
                    <th>Bonitätsart</th>
                    <th>Bonitätseinladung versendet</th>
                    <th>Bonität durchgeführt</th>
                    <th>Bonitätsergebniss</th>
                    <th <?php if($boni_art_hauptmieter_4 == 'm'){ echo 'style="display: none;"';} ?>  >Bonitäts Einladung-URL</th>
                    <th <?php if($boni_art_hauptmieter_4 == 'm'){ echo 'style="display: none;"';} ?>>Bonitäts ID</th>



                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php
                        if($boni_art_hauptmieter_4 == 'e'){
                            echo '<span>Express</span>';
                        }
                        elseif($boni_art_hauptmieter_4 == 'm'){echo '<span>Manuell</span>';}
                        else{echo '<span>offen</span>';}
                        ?></td>
                    <td><?php

                        if($boni_versendet_hauptmieter_4 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                    <td><?php

                        if($boni_gemacht_hauptmieter_4 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        elseif($boni_gemacht_hauptmieter_4 == 0){echo '<span style="color: red; font-weight: bold;">nein</span>';}
                        else{echo '<span style="color: orange; font-weight: bold;">manuelle Bonität</span>';}

                        ?></td>
                    <td><?php
                        if($boni_ergebnis_hauptmieter_4 == 0){
                            echo '<span>noch kein Ergebniss</span>';
                        }
                        if($boni_ergebnis_hauptmieter_4 == 1){
                            echo '<span style="color:green; font-weight: bold;">Bonität positv</span>';
                        }
                        if($boni_ergebnis_hauptmieter_4 == -1){
                            echo '<span  style="color:red; font-weight: bold;">Bonität negativ</span>';
                        }
                        ?>
                    </td>
                    <td><?php echo$boni_invite_url_hauptmieter_4;  ?></td>
                    <td><?php echo$boni_invite_id_hauptmieter_4;  ?></td>
                </tr>
                </tbody>
            </table>

        </div>
    </li>
    <li <?php if($anzahl_hauptmieter > 4){echo 'style="display: block"';} else{echo 'style="display: none"';} ?>>
        <div class="collapsible-header" <?php if(!empty($anrede_hauptmieter_5)){echo 'style="font-weight: bold;"' ;}   ?>>Hauptmieter 5
            <?php
            if($boni_abgeschlossen_hauptmieter_5 == 1){echo '<span class="new badge green" data-badge-caption="abgeschlossen"></span>';}
            else{echo '<span class="new badge orange" data-badge-caption="offen"></span>';}
            ?>
        </div>
        <div class="collapsible-body">

            <table>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><?php echo $anrede_hauptmieter_5;  ?></td>
                    <td><?php echo $vorname_hauptmieter_5;  ?></td>
                    <td><?php echo $name_hauptmieter_5;  ?></td>
                    <td><?php echo $email_hauptmieter_5;  ?></td>
                    <td><?php

                        if($hat_buerge_hauptmieter_5 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                </tr>
                </tbody>
            </table>


            <h6 <?php if($hat_buerge_hauptmieter_5 == 0){ echo 'style="display: none"';} ?>>Bürge</h6>
            <table <?php if($hat_buerge_hauptmieter_5 == 0){ echo 'style="display: none"';} ?>>
                <thead>
                <tr>
                    <th>Anrede</th>
                    <th>Vorname</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>hat Bürge</th>

                </tr>
                </thead>

                <tbody >
                <tr>
                    <td><?php echo $anrede_buerge_5;  ?></td>
                    <td><?php echo $vorname_buerge_5;  ?></td>
                    <td><?php echo $name_buerge_5;  ?></td>
                    <td><?php echo $email_buerge_5;  ?></td>

                </tr>
                </tbody>
            </table>


            <table>
                <thead>
                <tr>
                    <th>Bonitätsart</th>
                    <th>Bonitätseinladung versendet</th>
                    <th>Bonität durchgeführt</th>
                    <th>Bonitätsergebniss</th>
                    <th <?php if($boni_art_hauptmieter_5 == 'm'){ echo 'style="display: none;"';} ?>  >Bonitäts Einladung-URL</th>
                    <th <?php if($boni_art_hauptmieter_5 == 'm'){ echo 'style="display: none;"';} ?>>Bonitäts ID</th>



                </tr>
                </thead>

                <tbody>
                <tr>

                    <td><?php
                        if($boni_art_hauptmieter_5 == 'e'){
                            echo '<span>Express</span>';
                        }
                        elseif($boni_art_hauptmieter_5 == 'm'){echo '<span>Manuell</span>';}
                        else{echo '<span>offen</span>';}
                        ?></td>
                    <td><?php

                        if($boni_versendet_hauptmieter_5 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        else{echo '<span style="color: red; font-weight: bold;">nein</span>';}

                        ?></td>
                    <td><?php

                        if($boni_gemacht_hauptmieter_5 == 1){echo '<span style="color: green; font-weight: bold;">ja</span>';}
                        elseif($boni_gemacht_hauptmieter_5 == 0){echo '<span style="color: red; font-weight: bold;">nein</span>';}
                        else{echo '<span style="color: orange; font-weight: bold;">manuelle Bonität</span>';}

                        ?></td>
                    <td><?php
                        if($boni_ergebnis_hauptmieter_5 == 0){
                            echo '<span>noch kein Ergebniss</span>';
                        }
                        if($boni_ergebnis_hauptmieter_5 == 1){
                            echo '<span style="color:green; font-weight: bold;">Bonität positv</span>';
                        }
                        if($boni_ergebnis_hauptmieter_5 == -1){
                            echo '<span  style="color:red; font-weight: bold;">Bonität negativ</span>';
                        }
                        ?>
                    </td>
                    <td><?php echo$boni_invite_url_hauptmieter_5;  ?></td>
                    <td><?php echo$boni_invite_id_hauptmieter_5;  ?></td>
                </tr>
                </tbody>
            </table>

        </div>
    </li>
</ul>


<?php
