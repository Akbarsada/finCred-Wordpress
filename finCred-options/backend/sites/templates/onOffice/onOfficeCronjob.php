<?php
?>
<h5>onOffice Cronjob Options</h5>

<div class="row">

    <div class="row">
        <div class="input-field col s2">
            <input placeholder="Host" id="onOffice_host" type="text" class="validate" value="<?php //echo get_option('onOffice_token') ?>">
            <label for="onOffice_host">Host</label>
        </div>
        <div class="input-field col s2">
            <input placeholder="Port" id="onOffice_port" type="text" class="validate" value="<?php //echo get_option('onOffice_token') ?>">
            <label for="onOffice_port">Port</label>
        </div>
        <div class="input-field col s2">
            <input placeholder="Username" id="onOffice_username" type="text" class="validate" value="<?php //echo get_option('onOffice_token') ?>">
            <label for="onOffice_username">Username</label>
        </div>
        <div class="input-field col s2">
            <input placeholder="Password" id="onOffice_password" type="text" class="validate" value="<?php //echo get_option('onOffice_token') ?>">
            <label for="onOffice_password">Password</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s8">
            <input placeholder="Cron Tab" id="onOffice_cronTab" type="text" class="validate" value="<?php //echo get_option('onOffice_secret') ?>">
            <label for="onOffice_cronTab">Cron Tab</label>
            <a class="waves-effect waves-light btn" onclick="onOffice_api_key_ajax(this);"><i class="material-icons left">save</i>Speichern</a>
        </div>
    </div>

</div>

<hr>


