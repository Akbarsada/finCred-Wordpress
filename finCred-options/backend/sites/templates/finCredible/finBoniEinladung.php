<?php
?>
<h5>FinCredible Bonität-Einladung</h5>

<div class="row">

    <div class="row">
        <div class="input-field col s1">
            <input id="fin_gf_id" type="number" class="validate" value="<?php echo get_option('fin_gf_id') ?>">
            <label for="fin_gf_id">Gravity Form ID</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s8">
            <input placeholder="Hashtag" id="fin_hashtag" type="text" class="validate" value="<?php echo get_option('fin_hashtag') ?>">
            <a class="waves-effect waves-light btn" onclick="fin_boni_options_ajax(this);"><i class="material-icons left">cached</i>Request with Hashtag</a>
        </div>
    </div>




    <hr>

    <h5>FinCredible Request Result</h5>
    <div class="row">
        <div class="input-field col s4">
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Hashtag Kunde</strong></div>
            <div placeholder="Hashtag" id="fin_hashtag_kunde" type="text" class="validate" ><?php echo get_option('fin_hashtag_kunde') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Briefanrede</strong></div>
            <div placeholder="Hashtag" id="fin_Briefanrede" type="text" class="validate" ><?php echo get_option('fin_Briefanrede') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Vorname</strong></div>
            <div placeholder="Hashtag" id="fin_Vorname" type="text" class="validate" ><?php echo get_option('fin_Vorname') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Name</strong></div>
            <div placeholder="Hashtag" id="fin_Name" type="text" class="validate" ><?php echo get_option('fin_Name') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Land</strong></div>
            <div placeholder="Hashtag" id="fin_Land" type="text" class="validate" ><?php echo get_option('fin_Land') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Ort</strong></div>
            <div placeholder="Hashtag" id="fin_Ort" type="text" class="validate" ><?php echo get_option('fin_Ort') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Plz</strong></div>
            <div placeholder="Hashtag" id="fin_Plz" type="text" class="validate" ><?php echo get_option('fin_Plz') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Strasse</strong></div>
            <div placeholder="Hashtag" id="fin_Strasse" type="text" class="validate" ><?php echo get_option('fin_Strasse') ?></div><br>
        </div>

        <div class="input-field col s4">
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Hashtag Objekt</strong></div>
            <div placeholder="Hashtag" id="fin_hashtag_objekt" type="text" class="validate" ><?php echo get_option('fin_hashtag_objekt') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Objekttitel</strong></div>
            <div placeholder="Hashtag" id="fin_objekttitel" type="text" class="validate" ><?php echo get_option('fin_objekttitel') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Objektbeschreibung</strong></div>
            <div placeholder="Hashtag" id="objektbeschreibung" type="text" class="validate" ><?php echo get_option('fin_strasse') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Hausnummer</strong></div>
            <div placeholder="Hashtag" id="hausnummer" type="text" class="validate" ><?php echo get_option('fin_hausnummer') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Ort</strong></div>
            <div placeholder="Hashtag" id="ort" type="text" class="validate" ><?php echo get_option('fin_ort') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Land</strong></div>
            <div placeholder="Hashtag" id="land" type="text" class="validate" ><?php echo get_option('fin_land') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>Miete</strong></div>
            <div placeholder="Hashtag" id="miete" type="text" class="validate" ><?php //echo get_option('fin_Plz') ?></div><br>
            <div placeholder="Hashtag"  type="text" class="validate" ><strong>anzahl Zimmer</strong></div>
            <div placeholder="Hashtag" id="anzahl_zimmer" type="text" class="validate" ><?php echo get_option('fin_anzahl_zimmer') ?></div><br>
        </div>
    </div>





</div>

<hr>
