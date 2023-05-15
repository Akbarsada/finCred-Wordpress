<?php ?>
<script type="text/javascript" >


    function readPropSettings_ajax()
    {

        var fin_immo_id = jQuery("#fin_immo_id").val();

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",

            data: {
                action: "readPropSettings_cb",
                'fin_immo_id':fin_immo_id
            },
            success: function (data) {
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                console.log(myJson);
                if(myJson.data.property_status == 'success')
                {
                            if (myJson.data.property_id !== null) {
                                document.getElementById("objekt_id").innerHTML = myJson.data.property_id;
                                document.getElementById('aendern_objekt_id').value = myJson.data.property_id;
                            }
                            else{
                                document.getElementById("objekt_id").innerHTML ='' ;
                                document.getElementById('aendern_objekt_id').value = '';
                            }

                            if (myJson.data.property_ref !== null) {
                                document.getElementById("objekt_ref").innerHTML = myJson.data.property_ref;
                                document.getElementById('aendern_objekt_ref').value = myJson.data.property_ref;
                            }
                            else{
                                document.getElementById("objekt_ref").innerHTML ='' ;
                                document.getElementById('aendern_objekt_ref').value ='';
                            }

                            /*if (myJson.data.property_user_id !== null) {
                                document.getElementById("objekt_user_Id").innerHTML = myJson.data.property_user_id;
                                document.getElementById('aendern_objekt_user_Id').value = myJson.data.property_user_id;
                            }
                            else{
                                document.getElementById("objekt_user_Id").innerHTML = '';
                                document.getElementById('aendern_objekt_user_Id').value = '';
                            }*/
                            if (myJson.data.property_description !== null) {
                                document.getElementById("objekt_beschreibung").innerHTML = myJson.data.property_description;
                                document.getElementById('aendern_objekt_beschreibung').value = myJson.data.property_description;
                            }
                            else{
                                document.getElementById("objekt_beschreibung").innerHTML = '';
                                document.getElementById('aendern_objekt_beschreibung').value = '';
                            }

                            if (myJson.data.street !== null) {
                                document.getElementById("objekt_adresse").innerHTML = myJson.data.street;
                                document.getElementById('aendern_objekt_adresse').value = myJson.data.street;
                            }
                            else{
                                document.getElementById("objekt_adresse").innerHTML = '';
                                document.getElementById('aendern_objekt_adresse').value ='' ;
                            }

                            if (myJson.data.house_number !== null) {
                                document.getElementById("objekt_hausnr").innerHTML = myJson.data.house_number;
                                document.getElementById('aendern_objekt_hausnr').value = myJson.data.house_number;
                            }
                            else{
                                document.getElementById("objekt_hausnr").innerHTML = '';
                                document.getElementById('aendern_objekt_hausnr').value = '';
                            }

                            if (myJson.data.property_top !== null) {
                                document.getElementById("objekt_top").innerHTML = myJson.data.property_top;
                                document.getElementById('aendern_objekt_top').value = myJson.data.property_top;
                            }
                            else{
                                document.getElementById("objekt_top").innerHTML ='' ;
                                document.getElementById('aendern_objekt_top').value = '';
                            }

                            if (myJson.data.zipcode !== null) {
                                document.getElementById("objekt_plz").innerHTML = myJson.data.zipcode;
                                document.getElementById('aendern_objekt_plz').value = myJson.data.zipcode;
                                document.getElementById('aendern_objekt_plz').click();
                            }
                            else{
                                document.getElementById("objekt_plz").innerHTML = '';
                                document.getElementById('aendern_objekt_plz').value ='' ;

                            }

                            if (myJson.data.city !== null) {
                                document.getElementById("objekt_stadt").innerHTML = myJson.data.city;
                                document.getElementById('aendern_objekt_stadt').value = myJson.data.city;
                            }
                            else{
                                document.getElementById("objekt_stadt").innerHTML ='' ;
                                document.getElementById('aendern_objekt_stadt').value = '' ;
                                document.getElementById('aendern_objekt_stadt').click();
                            }

                            if (myJson.data.country !== null) {
                                document.getElementById("objekt_land").innerHTML = myJson.data.country;
                                document.getElementById('aendern_objekt_land').value = myJson.data.country;
                            }
                            else{
                                document.getElementById("objekt_land").innerHTML = '';
                                document.getElementById('aendern_objekt_land').value = '';
                            }

                            if (myJson.data.property_type !== null) {
                                document.getElementById("objekt_typ").innerHTML = myJson.data.property_type;
                                document.getElementById('aendern_objekt_typ').value = myJson.data.property_type;
                            }
                            else{
                                document.getElementById("objekt_typ").innerHTML = '';
                                document.getElementById('aendern_objekt_typ').value ='' ;
                            }

                            if (myJson.data.rent !== null) {
                                document.getElementById("objekt_miete").innerHTML = myJson.data.rent;
                                document.getElementById('aendern_objekt_miete').value = myJson.data.rent;
                            }
                            else{
                                document.getElementById("objekt_miete").innerHTML = '';
                                document.getElementById('aendern_objekt_miete').value ='' ;
                            }

                            if (myJson.data.rent_currency !== null) {
                                document.getElementById("objekt_waehrung").innerHTML = myJson.data.rent_currency;
                                document.getElementById('aendern_objekt_waehrung').value = myJson.data.rent_currency;
                            }
                            else{
                                document.getElementById("objekt_waehrung").innerHTML = '';
                                document.getElementById('aendern_objekt_waehrung').value = '';
                            }

                           /* if (myJson.data.features_list !== null) {
                                //TODO
                                document.getElementById("gf_felder").innerHTML = myJson.data.features_list;
                                document.getElementById('yorInputID').value = myJson.data.features_list;
                            }
                            else{
                                //TODO
                                document.getElementById("gf_felder").innerHTML ='' ;
                                document.getElementById('yorInputID').value = '';
                            }*/

                            if (myJson.data.image_url !== null) {
                                document.getElementById("objekt_bild").innerHTML = myJson.data.image_url;
                                document.getElementById('aendern_objekt_bild').value = myJson.data.image_url;
                            }
                            else{
                                document.getElementById("objekt_bild").innerHTML ='' ;
                                document.getElementById('aendern_objekt_bild').value = '';
                            }

                            if (myJson.data.criterias !== null) {
                                document.getElementById("objekt_kriterien").innerHTML = myJson.data.criterias;
                                document.getElementById('aendern_objekt_kriterien').value = myJson.data.criterias;
                            }
                            else{
                                document.getElementById("objekt_kriterien").innerHTML = '';
                                document.getElementById('aendern_objekt_kriterien').value = '';
                            }

                          /*  if (myJson.data.property_completed !== null) {
                                document.getElementById("objekt_status").innerHTML = myJson.data.property_completed;
                                document.getElementById('aendern_objekt_status').value = myJson.data.property_completed;
                            }
                            else{
                                document.getElementById("objekt_status").innerHTML = '';
                                document.getElementById('aendern_objekt_status').value = '';

                            }*/

                           /* if (myJson.data.created_at !== null) {
                                document.getElementById("objekt_erstellt").innerHTML = myJson.data.created_at;
                                document.getElementById('aendern_objekt_erstellt').value = myJson.data.created_at;
                            }
                            else{
                                document.getElementById("objekt_erstellt").innerHTML ='' ;
                                document.getElementById('aendern_objekt_erstellt').value = '';
                            }*/

                           /* if (myJson.data.updated_at !== null) {
                                document.getElementById("objekt_update").innerHTML = myJson.data.updated_at;
                                document.getElementById('aendern_objekt_update').value = myJson.data.updated_at;
                            }
                            else{
                                document.getElementById("objekt_update").innerHTML = '';
                                document.getElementById('aendern_objekt_update').value = '';

                            }*/

                            if (myJson.data.invites !== null) {

                                var invitesObject =  myJson.data.invites;
                                for (const [key, value] of Object.entries(invitesObject)) {
                                    console.log(value['email']);
                                    document.getElementById("invite_vorname").innerHTML = value['firstname']+ "<br><hr>";
                                    document.getElementById("invite_name").innerHTML = value['lastname']+ "<br><hr>";
                                    document.getElementById("invite_email").innerHTML = value['email']+ "<br><hr>";
                                    document.getElementById("invite_id").innerHTML = value['invite_id']+ "<br><hr>";
                                    document.getElementById("invite_status").innerHTML = value['status']+ "<br><hr>";
                                   // document.getElementById("invite_choose_button").innerHTML = value['email']+ "<br><hr>";


                                }
                            }
                            else{
                                document.getElementById("objekt_einladungen").innerHTML = '';
                            }





                            M.toast({html: 'Objekt '+myJson.data.property_id+ ' ausgewählt'});

                }
                else{


                    M.toast({html: myJson.data.property_status,classes: 'infoToast'});}
            },
        });

    }

</script>