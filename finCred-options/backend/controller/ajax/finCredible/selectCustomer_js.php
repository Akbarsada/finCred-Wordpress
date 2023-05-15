<?php ?>
<script type="text/javascript" >


    function selectCustomer_ajax()
    {
        var variable = 'übergabbe';


        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "selectCustomer_cb",
                'variable':variable,


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
