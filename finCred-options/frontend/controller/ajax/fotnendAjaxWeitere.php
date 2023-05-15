<?php ?>

<script type="text/javascript" >




    function weitere_mieter()
    {
        document.getElementById('loader_info').style.display = 'block';
        var elementStyle = document.getElementById('form_loader').style;
        elementStyle.backgroundColor = 'white';
        elementStyle.position = 'absolute';
        elementStyle.top = '0';
        elementStyle.left = '0';
        elementStyle.height = '100%';
        elementStyle.width = '110%';
        elementStyle.marginLeft = '-31px';
        elementStyle.zIndex = '999999';

        var boni_post_id =  jQuery('#input_1_144').val();
        var nummer_inviter =  jQuery('#input_1_145').val();


        jQuery.ajax({

            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "weitere_mieter_php",

                'boni_post_id':boni_post_id,
                'nummer_inviter':nummer_inviter


            },
            success: function (data) {
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                var boni_post_id = myJson.data.boni_post_id;
                var nummer_inviter = myJson.data.nummer_inviter;
                var site_url = myJson.data.site_url;

                console.log(boni_post_id);
                console.log(hashtag_objekt);
                console.log(site_url);

                window.location.href = site_url+'/boni-request-weitere/?boni_post_id='+boni_post_id+'&nummer_inviter='+nummer_inviter;


            },


        });

    }



</script>