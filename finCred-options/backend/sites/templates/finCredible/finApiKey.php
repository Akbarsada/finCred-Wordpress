<?php
?>
<h5></h5>

<div class="row">

    <div class="row">
        <div class="input-field col s8">
            <input placeholder="FinCredible Serveraddresse" id="fin_server" type="text" class="validate" value="<?php echo get_option('fin_server') ?>">
            <label for="fin_server">https://api.sandbox.mietcheck.fincredible.at/api/</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s8">
            <input placeholder="FinCredible API" id="fin_api_key" type="text" class="validate" value="<?php echo get_option('fin_api_key') ?>">
            <label for="fin_api_key">7yuh5loihzplnyjwoagu5wfircz25uf4xvbljlba</label>
            <a class="waves-effect waves-light btn" onclick="fin_api_key_ajax(this);"><i class="material-icons left">save</i>Speichern</a>
        </div>
    </div>

</div>

<hr>

<p>Zum Testen können Sie die <strong>Sandbox Serveradresse</strong> sowie den <strong>API Key</strong> vom Entwickler
    (über den Eingabefelder)
    benutzen. <br> Fals Sie einen eigenen API-Key besitzen kann auch der eingteragen werden.</p>