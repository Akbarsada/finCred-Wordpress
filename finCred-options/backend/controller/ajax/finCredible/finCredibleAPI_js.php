<?php ?>

<script type="text/javascript" >


    function fin_api_key_ajax()
    {

        var fin_server = jQuery("#fin_server").val();
        var fin_api_key = jQuery("#fin_api_key").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "fin_api_key_cb",

                'fin_server':fin_server,
                'fin_api_key':fin_api_key

            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                 document.getElementById("fin_server").value = myJson.data.fin_server;
                document.getElementById("fin_api_key").value = myJson.data.fin_api_key;
                console.log(json);
                console.log(myJson);
                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>