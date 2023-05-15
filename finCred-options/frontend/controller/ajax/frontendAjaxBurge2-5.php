<?php ?>

<script type="text/javascript" >




    function andere_buerge_mail()
    {


/*        document.getElementById('loader_info').style.display = 'block';
        var elementStyle = document.getElementById('form_loader').style;
        elementStyle.backgroundColor = 'white';
        elementStyle.position = 'absolute';
        elementStyle.top = '0';
        elementStyle.left = '0';
        elementStyle.height = '100%';
        elementStyle.width = '110%';

        elementStyle.marginLeft = '-31px';
        elementStyle.zIndex = '999999';*/


        //Hauptmieter 1
        var anrede_hp1 = jQuery('input[name="input_39"]:checked').val();
        var vorname_hp1 = jQuery("#input_1_10").val();
        var nachname_hp1 = jQuery("#input_1_11").val();
        var email_hp1 = jQuery("#input_1_13").val();

        let hat_buerge_hp1;
        if(jQuery("#choice_1_59_1").prop('checked')){ hat_buerge_hp1 = 1} else { hat_buerge_hp1 = 0};
        var boni_art_hp1 = jQuery('input[name="input_44"]:checked').val();

        //Bürge 1
        var anrede_brg1 = jQuery('input[name="input_61"]:checked').val();
        var vorname_brg1 = jQuery("#input_1_56").val();
        var nachname_brg1 = jQuery("#input_1_57").val();
        var email_brg1 = jQuery("#input_1_58").val();

        //Hauptmieter 2
        var anrede_hp2 = jQuery('input[name="input_38"]:checked').val();
        var vorname_hp2 = jQuery("#input_1_17").val();
        var nachname_hp2 = jQuery("#input_1_18").val();
        var email_hp2 = jQuery("#input_1_19").val();

        //Bürge 2
        var anrede_brg2 = jQuery('input[name="input_62"]:checked').val();
        var vorname_brg2 = jQuery("#input_1_63").val();
        var nachname_brg2 = jQuery("#input_1_64").val();
        var email_brg2 = jQuery("#input_1_66").val();

        //Hauptmieter 3
        var anrede_hp3 = jQuery('input[name="input_35"]:checked').val();
        var vorname_hp3 = jQuery("#input_1_23").val();
        var nachname_hp3 = jQuery("#input_1_22").val();
        var email_hp3 = jQuery("#input_1_24").val();
        //Bürge 3
        var anrede_brg3 = jQuery('input[name="input_69"]:checked').val();
        var vorname_brg3 = jQuery("#input_1_70").val();
        var nachname_brg3 = jQuery("#input_1_71").val();
        var email_brg3 = jQuery("#input_1_72").val();

        //Hauptmieter 4
        var anrede_hp4 = jQuery('input[name="input_36"]:checked').val();
        var vorname_hp4 = jQuery("#input_1_27").val();
        var nachname_hp4 = jQuery("#input_1_28").val();
        var email_hp4 = jQuery("#input_1_29").val();
        //Bürge 4
        var anrede_brg4 = jQuery('input[name="input_75"]:checked').val();
        var vorname_brg4 = jQuery("#input_1_76").val();
        var nachname_brg4 = jQuery("#input_1_77").val();
        var email_brg4 = jQuery("#input_1_78").val();



        //Hauptmieter 5
        var anrede_hp5 = jQuery('input[name="input_37"]:checked').val();
        var vorname_hp5 = jQuery("#input_1_32").val();
        var nachname_hp5 = jQuery("#input_1_33").val();
        var email_hp5 = jQuery("#input_1_34").val();
        //Bürge 5
        var anrede_brg5 = jQuery('input[name="input_81"]:checked').val();
        var vorname_brg5 = jQuery("#input_1_82").val();
        var nachname_brg5 = jQuery("#input_1_83").val();
        var email_brg5 = jQuery("#input_1_84").val();

        var anzahlMieter = jQuery("#input_1_5  option:selected").val();
        var anzahlBewohner = jQuery("#input_1_95").val();

        var einzugstermin_wunsch = jQuery("#input_1_117").val();
        var einzugstermin_alternative = jQuery("#input_1_7").val();



        jQuery.ajax({

            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "frontend_buerge2_5_php",

                'hashtag_objekt':hashtag_objekt,
                'hashtag_kunde':hashtag_kunde,
                'UUID':hash_uuid,
                'warmmiete':warmmiete,
                'strasse':strasse,
                'hausnummer':hausnummer,
                'boni_post_id':boni_post_id,
                'nummer_inviter':nummer_inviter,
                'anzahlMieter':anzahlMieter,
                'anzahlBewohner':anzahlBewohner,
                'einzugstermin_wunsch':einzugstermin_wunsch,
                'einzugstermin_alternative':einzugstermin_alternative,

                //Hauptmieter 1
                'anrede_hp1':anrede_hp1,
                'vorname_hp1':vorname_hp1,
                'nachname_hp1':nachname_hp1,
                'email_hp1':email_hp1,

                'hat_buerge_hp1':hat_buerge_hp1,
                'boni_art_hp1':boni_art_hp1,

                //Bürge 1
                'anrede_brg1':anrede_brg1,
                'vorname_brg1':vorname_brg1,
                'nachname_brg1':nachname_brg1,
                'email_brg1':email_brg1,

                //Hauptmieter 2
                'anrede_hp2':anrede_hp2,
                'vorname_hp2':vorname_hp2,
                'nachname_hp2':nachname_hp2,
                'email_hp2':email_hp2,
                //Bürge 2
                'anrede_brg2':anrede_brg2,
                'vorname_brg2':vorname_brg2,
                'nachname_brg2':nachname_brg2,
                'email_brg2':email_brg2,

                //Hauptmieter 3
                'anrede_hp3':anrede_hp3,
                'vorname_hp3':vorname_hp3,
                'nachname_hp3':nachname_hp3,
                'email_hp3':email_hp3,
                //Bürge 3
                'anrede_brg3':anrede_brg3,
                'vorname_brg3':vorname_brg3,
                'nachname_brg3':nachname_brg3,
                'email_brg3':email_brg3,

                //Hauptmieter 4
                'anrede_hp4':anrede_hp4,
                'vorname_hp4':vorname_hp4,
                'nachname_hp4':nachname_hp4,
                'email_hp4':email_hp4,
                //Bürge 4
                'anrede_brg4':anrede_brg4,
                'vorname_brg4':vorname_brg4,
                'nachname_brg4':nachname_brg4,
                'email_brg4':email_brg4,

                //Hauptmieter 5
                'anrede_hp5':anrede_hp5,
                'vorname_hp5':vorname_hp5,
                'nachname_hp5':nachname_hp5,
                'email_hp5':email_hp5,
                //Bürge 5
                'anrede_brg5':anrede_brg5,
                'vorname_brg5':vorname_brg5,
                'nachname_brg5':nachname_brg5,
                'email_brg5':email_brg5,



            },
            success: function (data) {
              /*  var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                var boni_post_id = myJson.data.boni_post_id;
                var hashtag_objekt = myJson.data.hashtag_objekt;
                var hashtag_kunde = myJson.data.hashtag_kunde;
                var site_url = myJson.data.site_url;
                // var warmmiete = myJson.data.warmmiete;
                var warmmiete = 1000;
                var anzahlMieter = myJson.data.anzahlMieter;*/
                

                window.location.href = 'https://staging.eugen.immo/';


            },


        });

    }



</script>