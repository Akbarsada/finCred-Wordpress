<?php
?>

<h5>Immobilie auswählen</h5>

<div class="row">

        <div class="row">
            <div class="input-field col s4">
                <input placeholder="Immobielen ID" id="fin_immo_id" type="text" class="validate">
                <a class="waves-effect waves-light btn" onclick="readPropSettings_ajax(this);"><i class="material-icons left">search</i>Suchen</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">location_searching</i>auswählen</a>
            </div>
            <div class="input-field col s6" style="outline: solid black;">

                <div class="row">
                    <div class="col s4">
                        <p><strong>Objekt ID:</strong> <span id="objekt_id">4364586</span></p>
                    </div>
                    <div class="col s6">
                        <p><strong>Objekt Referenz:</strong> <span id="objekt_ref">Altbauwohung</span></p>
                    </div>
                    <div class="col s2">
                        <p><strong>Immobilien Typ</strong></p>
                        <p id="objekt_typ"> Max Mustermann</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col s10">
                        <p><strong>Beschreibung:</strong></p>
                        <p><span id="objekt_beschreibung"></span></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col s4">
                        <p><strong>Adresse:</strong></p>
                        <p id="objekt_adresse"></p>
                    </div>
                    <div class="col s2">
                        <p><strong>Haus Nr.</strong></p>
                        <p id="objekt_hausnr"></p>
                    </div>
                    <div class="col s1">
                        <p><strong>Top</strong></p>
                        <p id="objekt_top"></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col s4">
                        <p><strong>Stadt</strong></p>
                        <p id="objekt_stadt"></p>
                    </div>
                    <div class="col s2">
                        <p><strong>PLZ</strong></p>
                        <p id="objekt_plz"></p>
                    </div>
                    <div class="col s4">
                        <p><strong>Land</strong></p>
                        <p id="objekt_land"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <p><strong>Objekt Bild</strong></p>
                        <p id="objekt_bild"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s2">
                        <p><strong>Objekt Miete</strong></p>
                        <p id="objekt_miete">800,55</p>
                    </div>
                    <div class="col s2">
                        <p><strong>Währung</strong></p>
                        <p id="objekt_waehrung">€</p>
                    </div>
                    <div class="col s3">
                        <p><strong>Kriterium</strong></p>
                        <p id="objekt_kriterien">30<span>% vom Monatsgehalt</span></p>
                    </div>
                    <div class="col s2">
                        <p><strong>Status</strong></p>
                        <p id="objekt_status">offen</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col s2">
                        <p><strong>erstellt am</strong></p>
                        <p id="objekt_erstellt">10.10.2022</p>
                    </div>
                    <div class="col s2">
                        <p><strong>letztes Update</strong></p>
                        <p id="objekt_update">15.10.2022</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p><strong>Immobilien Typ</strong></p>
                        <p id="objekt_typ"> Max Mustermann</p>
                    </div>
                    <div class="col s3">
                        <p><strong>User ID</strong></p>
                        <p id="objekt_user_Id"> Max Mustermann</p>
                    </div>
                </div>







            </div>

        </div>

</div>

<hr>
