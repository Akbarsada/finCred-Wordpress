<?php
?>

<h5>Immobilie erstellen</h5>


<div class="row">
    <div class="col s10">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Refferenz" id="fin_ref" type="text" class="validate">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="fin_desc" name="fin_desc" rows="40" cols="50" style="height: 300px;"> Objekt Beschreibung ...</textarea>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select id="fin_country">
                        <option value="" disabled selected>Land auswählen</option>
                        <option value="AT">Österreich</option>
                        <option value="DE">Deutschland</option>
                    </select>
                    <label>Land</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <input placeholder="Stadt" id="fin_city" type="text" class="validate">
                </div>

                <div class="input-field col s2">
                    <input placeholder="PLZ" id="fin_plz" type="text" pattern="[0-9]*" class="validate">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <input placeholder="Straße" id="fin_street" type="text" class="validate">
                </div>

                <div class="input-field col s1">
                    <input placeholder="Nr." id="fin_number" type="text"  class="validate">
                </div>
                <div class="input-field col s1">
                    <input placeholder="Top" id="fin_top" type="text"  class="validate">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s2">
                    <input type="number" id="fin_miete" min="1" step="any" />
                    <label for="miete">Miete in €</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s1">
                    <p>
                        <label>
                            <input type="checkbox" />
                            <span>irgendwas</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s2 offset-s1">
                    <select id="fin_prozent">
                        <option value="RMIN30">30 %</option>
                        <option value="RMIN40">40 %</option>
                        <option value="RMIN50">50 %</option>
                    </select>
                    <label>Mietanteil</label>
                </div>



            </div>









        </form>

        <button class="waves-effect waves-light btn" onclick="createNewProp_ajax(this);"><i class="material-icons left" >search</i>anlegen</button>
    </div>








<hr>
