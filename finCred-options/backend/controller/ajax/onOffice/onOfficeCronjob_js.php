<?php ?>

<script type="text/javascript" >


    function onOffice_api_key_ajax()
    {
        var onOffice_host = jQuery("#onOffice_host").val();
        var onOffice_port = jQuery("#onOffice_port").val();
        var onOffice_username = jQuery("#onOffice_username").val();
        var onOffice_password = jQuery("#onOffice_password").val();
        var onOffice_cronTab = jQuery("#onOffice_cronTab").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "onOffice_api_key_cb",

                'onOffice_token':onOffice_token,
                'onOffice_secret':onOffice_secret,
                'onOffice_token':onOffice_token,
                'onOffice_secret':onOffice_secret,
                'onOffice_token':onOffice_token,


            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                document.getElementById("onOffice_token").value = myJson.data.onOffice_token;
                document.getElementById("onOffice_secret").value = myJson.data.onOffice_secret;
                console.log(json);
                console.log(myJson);
                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>