<?php ?>

<script type="text/javascript" >




    function download_pdf()
    {



        jQuery.ajax({

            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "download_pdf",





            },
            success: function (data) {
               
              alert('download complete');

            },


        });

    }



</script>