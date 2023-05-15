<?php ?>

<script type="text/javascript" >


    function fin_boni_options_ajax()
    {

        var fin_gf_id = jQuery("#fin_gf_id").val();
        var fin_hashtag = jQuery("#fin_hashtag").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "fin_boni_options_cb",

                'fin_gf_id':fin_gf_id,
                'fin_hashtag':fin_hashtag

            },
            success: function (data) {
                var json = JSON.stringify(data);
                // console.log(data);
                var myJson = JSON.parse(json);
                //Zertifikat Speicherpfade

               //  document.getElementById("fin_gf_id").value = myJson.data.fin_gf_id;
               // document.getElementById("fin_hashtag").value = myJson.data.fin_hashtag;
                console.log(json);
                console.log(myJson);
                M.toast({html: 'gespeichert'})
            },
        });

    }




</script>