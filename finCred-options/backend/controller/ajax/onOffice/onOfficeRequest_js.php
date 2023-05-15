<?php ?>

<script type="text/javascript" >


    function onOfficeRequest_ajax()
    {







        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "onOfficeRequest_cb",




            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

                console.log('ajax drin');
                console.log(json);
                console.log(myJson);
                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>