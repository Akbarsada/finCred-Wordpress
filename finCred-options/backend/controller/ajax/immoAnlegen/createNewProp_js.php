<?php ?>
<script type="text/javascript" >


    function createNewProp_ajax()
    {

alert('bin drin');
        //var atrust_login_image = document.getElementById("atrust_custom_logo_img").src;
        var fin_ref = jQuery("#fin_ref").val();
        var fin_desc = jQuery("#fin_desc").val();
        var fin_country = jQuery("#fin_country").val();
        var fin_city = jQuery("#fin_city").val();
        var fin_plz = jQuery("#fin_plz").val();
        var fin_street = jQuery("#fin_street").val();
        var fin_number = jQuery("#fin_number").val();
        var fin_top = jQuery("#fin_top").val();
        var fin_miete = jQuery("#fin_miete").val();
        var fin_prozent = jQuery("#fin_prozent").val();


        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "createNewProp_cb",

                'fin_ref':fin_ref,
                'fin_desc':fin_desc,
                'fin_country':fin_country,
                'fin_city':fin_city,
                'fin_plz':fin_plz,
                'fin_street':fin_street,
                'fin_number':fin_number,
                'fin_top':fin_top,
                'fin_miete':fin_miete,
                'fin_prozent':fin_prozent

            },
            success: function (data) {
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                console.log(myJson);
                M.toast({html: 'perfekt'})
            },
        });

    }

</script>