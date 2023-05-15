<?php ?>

<script type="text/javascript" >


    function finCredCron_pwd()
    {

        var fincred_cron_pwd = jQuery("#fincred_cron_pwd").val();


        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "finCredCron_pwd_cb",

                'fincred_cron_pwd':fincred_cron_pwd

            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                 document.getElementById("fin_server").value = myJson.data.fincred_cron_pwd;

                console.log(json);
                console.log(myJson);
                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>