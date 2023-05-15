<?php
?>

<h5>Eigenschaften ändern</h5>


<div class="row">
<div class="col s10">
<ul class="collapsible">
<li>

<div class="collapsible-header"><i class="material-icons">tune</i></div>

<div class="collapsible-body">
<span>

<div class="row">


                <div class="row">
                    <div class=" col s2">
                        <input id="aendern_objekt_id" type="text" class="validate" disabled>
                        <label for="aendern_objekt_id">Objekt ID</label>
                    </div>
                    <div class=" col s6">
                        <input id="aendern_objekt_ref" type="text" class="validate">
                        <label for="aendern_objekt_ref">Objekt Ref.</label>
                    </div>
                    <div class=" col s4">

                        <input id="aendern_objekt_typ" type="text" class="">
                         <label for="aendern_objekt_typ">Objekt Typ</label>

                    </div>
                </div>

                <div class="row">
                    <div class=" col s8">
                        <textarea id="aendern_objekt_beschreibung" class="materialize-textarea" ></textarea>
                        <label for="aendern_objekt_beschreibung">Beschreibung</label>
                    </div>
                     <div class=" col s4">
                        <div class="file-field ">
                             <div class="btn">
                                <span>Bild</span>
                                <input type="file" multiple>
                             </div>
                            <div class="file-path-wrapper">
                                <input id="aendern_objekt_bild" class="file-path validate" type="text" placeholder="Bild hochladen">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col s6">
                        <input id="aendern_objekt_adresse" type="text" class="validate" >
                        <label for="aendern_objekt_adresse">Adresse</label>
                    </div>
                    <div class=" col s2">
                        <input id="aendern_objekt_hausnr" type="text" class="validate">
                        <label for="aendern_objekt_hausnr">Haus Nr.</label>
                    </div>
                    <div class=" col s2">
                        <input id="aendern_objekt_top" type="text" class="validate">
                        <label for="aendern_objekt_top">Top</label>
                    </div>
                </div>

                <div class="row">
                    <div class=" col s6">
                        <input id="aendern_objekt_stadt" type="text" class="validate" >
                        <label for="aendern_objekt_stadt">Stadt</label>
                    </div>
                    <div class=" col s2">
                        <input id="aendern_objekt_plz" type="text" class="validate">
                        <label for="aendern_objekt_plz">PLZ</label>
                    </div>
                    <div class=" col s2">
                        <select id="aendern_objekt_land">
                            <option value="AT">Österreich</option>
                            <option value="DE">Deutschland</option>
                        </select>
                        <label>Land</label>
                    </div>
                </div>

                <div class="row">
                    <div class=" col s2">
                        <input id="aendern_objekt_miete" type="number" class="validate" min="1" step="any"  >
                        <label for="aendern_objekt_miete">Miete</label>
                    </div>
                    <div class=" col s2">
                        <input id="aendern_objekt_waehrung" type="text" class="validate">
                        <label for="aendern_objekt_waehrung">Währung</label>
                    </div>
                    <div class=" col s2">

                        <select id="aendern_objekt_kriterien"  name="selectCustomer" onchange="selectCustomer_ajax(this);">
                            <option  value="RMIN30" <?php selected( 'single' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >30 %</option>
                            <option value="RMIN40"  <?php selected( 'stapel'  ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >40 %</option>
                            <option value="RMIN40"  <?php selected( 'pkc12'  ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >50 %</option>
                        </select>
                         <label>Kriterium</label>
                    </div>
                    <div class=" col s2">
                         <select id="aendern_objekt_land">
                            <option value="AT">offen</option>
                            <option value="DE">geschlossen</option>
                        </select>
                        <label>Status</label>
                    </div>
                </div>

                <div class="row">
                <div class=" col s6">
                <input placeholder="00000" id="aendern_objekt_id" type="text" class="validate" >
                <label for="eigen_objekt_id">Objekt ID</label>
                </div>
                <div class=" col s2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
                </div>
                </div>


</div>

                <div class="row">
                <div class="col s6">
                <a class="waves-effect waves-light btn"><i class="material-icons left">search</i>Speichern</a>
                </div>
                </div>

</span>
</div>


</li>
</ul>
</div>
</div>

<hr>
