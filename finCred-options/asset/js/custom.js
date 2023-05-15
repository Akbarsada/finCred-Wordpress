
//eugen Invite File Upload Button

/*
var uploadFile_eugen = document.createElement("div");
uploadFile_eugen.innerHTML = '<i class="fa-regular fa-file"></i>';
uploadFile_eugen.id = "uploadFile_icon";
*/


/*const uploadFile_before_eugen = document.querySelector("#field_2_134 label");
uploadFile_before_eugen.parentNode.insertBefore(uploadFile_eugen, uploadFile_before_eugen);*/






jQuery(document).ready(function(){
    $('.sidenav').sidenav({
        menuWidth: 600,
        closeOnClick: true,
        edge: 'right',

    });
});




jQuery(document).ready(function(){
    $('.datum-trigger').dropdown({
        id: 'oida',
        alignment: 'left',

    });
});






jQuery(document).ready(function(){

    // insert After Function
    function insertAfter(after_this_tag, newTag) {
        after_this_tag.parentNode.insertBefore(newTag, after_this_tag.nextSibling);
    }

    //garage
// Insert before existing tag:
    const arrowTagBefore_garage = document.createElement("i");
    arrowTagBefore_garage.classList.add("fa-regular");
    arrowTagBefore_garage.classList.add("fa-angle-left");
    arrowTagBefore_garage.id = "prev_garage";

// Insert after existing tag:
    var arrowTagAfter_garage = document.createElement("i");
    arrowTagAfter_garage.classList.add("fa-regular");
    arrowTagAfter_garage.classList.add("fa-angle-right");
    arrowTagAfter_garage.id = "next_garage";


    const before_garage_tag = document.getElementById("input_1_152");
    before_garage_tag.parentNode.insertBefore(arrowTagBefore_garage, before_garage_tag);

    var after_garage_tag = document.querySelector("#input_1_152");
    insertAfter(after_garage_tag, arrowTagAfter_garage);


    //select Next - Prev Garage
    jQuery('#next_garage').click(function() {

        var nextElement = jQuery('#input_1_152 > option:selected').next('option');
        if (nextElement.length > 0) {
            jQuery('#input_1_152 > option:selected').removeAttr('selected').next('option').attr('selected', 'selected');

        }
        if (jQuery('#input_1_152').val() > 1) {
            jQuery('#next_garage').css("color", "black");
            jQuery('#next_garage').css('cursor', 'pointer');
            jQuery('#prev_garage').css("color", "black");
            jQuery('#prev_garage').css('cursor', 'pointer');

        }
        if (jQuery('#input_1_152').val() == 5) {
            jQuery('#next_garage ').css("color", "grey");
            jQuery('#next_garage ').css('cursor', 'default');
        }

        if (jQuery('#input_1_152').val() == 1) {
            jQuery('#prev_garage').css("color", "grey");
            jQuery('#prev_garage').css('cursor', 'pointer');
        }

    });



    jQuery("#prev_garage").click(function() {
        var nextElement = jQuery('#input_1_152 > option:selected').prev('option');
        if (nextElement.length > 0) {
            jQuery('#input_1_152 > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected');
        }
        if (jQuery('#input_1_152').val() == 1) {
            jQuery('#prev_garage ').css("color", "grey");
            jQuery('#prev_garage ').css('cursor', 'default');

        }
        if (jQuery('#input_1_152').val() > 1) {
            jQuery('#next_garage ').css("color", "black");
            jQuery('#next_garage ').css('cursor', 'pointer');
            jQuery('#prev_garage ').css("color", "black");
            jQuery('#prev_garage ').css('cursor', 'pointer');
        }

    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    //haushalt
// Insert before existing tag:
    const arrowTagBefore = document.createElement("i");
    arrowTagBefore.classList.add("fa-regular");
    arrowTagBefore.classList.add("fa-angle-left");
    arrowTagBefore.id = "prev_haushalt";

// Insert after existing tag:
    var arrowTagAfter = document.createElement("i");
    arrowTagAfter.classList.add("fa-regular");
    arrowTagAfter.classList.add("fa-angle-right");
    arrowTagAfter.id = "next_haushalt";


    const before_haushalt_tag = document.getElementById("input_1_95");
    before_haushalt_tag.parentNode.insertBefore(arrowTagBefore, before_haushalt_tag);

    var after_haushalt_tag = document.querySelector("#input_1_95");
    insertAfter(after_haushalt_tag, arrowTagAfter);

    //mieter
// Insert before existing tag:
    const arrowTagBefore_mieter = document.createElement("i");
    arrowTagBefore_mieter.classList.add("fa-regular");
    arrowTagBefore_mieter.classList.add("fa-angle-left");
    arrowTagBefore_mieter.id = "prev_mieter";

// Insert after existing tag:
    var arrowTagAfter_mieter = document.createElement("i");
    arrowTagAfter_mieter.classList.add("fa-regular");
    arrowTagAfter_mieter.classList.add("fa-angle-right");
    arrowTagAfter_mieter.id = "next_mieter";


    const before_tag_mieter = document.getElementById("input_1_5");
    before_tag_mieter.parentNode.insertBefore(arrowTagBefore_mieter, before_tag_mieter);

    var after_mieter_tag = document.querySelector("#input_1_5");
    insertAfter(after_mieter_tag, arrowTagAfter_mieter);



    jQuery('#prev_haushalt ').css("color", "grey");
    jQuery('#prev_haushalt ').css('cursor', 'default');

    jQuery('#prev_mieter ').css("color", "grey");
    jQuery('#prev_mieter ').css('cursor', 'default');



//select Next - Prev Haushalt
    jQuery("#next_haushalt").click(function() {
        var nextElement = jQuery('#input_1_95 > option:selected').next('option');
        if (nextElement.length > 0) {
            jQuery('#input_1_95 > option:selected').removeAttr('selected').next('option').attr('selected', 'selected');

        }
        if (jQuery('#input_1_95').val() > 1) {
            jQuery('#next_haushalt ').css("color", "black");
            jQuery('#next_haushalt ').css('cursor', 'pointer');
            jQuery('#prev_haushalt ').css("color", "black");
            jQuery('#prev_haushalt ').css('cursor', 'pointer');

        }
        if (jQuery('#input_1_95').val() == 5) {
            jQuery('#next_haushalt ').css("color", "grey");
            jQuery('#next_haushalt ').css('cursor', 'default');
        }

        if (jQuery('#input_1_95').val() == 1) {
            jQuery('#prev_haushalt ').css("color", "grey");
            jQuery('#prev_haushalt ').css('cursor', 'pointer');
        }

    });



    jQuery("#prev_haushalt").click(function() {
        var nextElement = jQuery('#input_1_95 > option:selected').prev('option');
        if (nextElement.length > 0) {
            jQuery('#input_1_95 > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected');
        }
        if (jQuery('#input_1_95').val() == 1) {
            jQuery('#prev_haushalt ').css("color", "grey");
            jQuery('#prev_haushalt ').css('cursor', 'default');

        }
        if (jQuery('#input_1_95').val() > 1) {
            jQuery('#next_haushalt ').css("color", "black");
            jQuery('#next_haushalt ').css('cursor', 'pointer');
            jQuery('#prev_haushalt ').css("color", "black");
            jQuery('#prev_haushalt ').css('cursor', 'pointer');
        }

    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//if its a mobile device use 'touchstart'
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        deviceEventType = 'touchstart'
    } else {
//If its not a mobile device use 'click'
        deviceEventType = 'click'
    }


    //select Next - Prev Mieter
    jQuery("#next_mieter").on(deviceEventType, function() {
        var nextElement = jQuery('#input_1_5 > option:selected').next('option');
        var valueElement = jQuery('#input_1_5').val();
        if (nextElement.length > 0) {
            jQuery('#prev_mieter ').css("color", "black");
            jQuery('#input_1_5 > option:selected').removeAttr('selected').next('option').attr('selected', 'selected').trigger('change');

        }

        if (jQuery('#input_1_5').val() > 1) {
            jQuery('#prev_mieter ').css("color", "black");
            jQuery('#prev_mieter ').css('cursor', 'pointer');

        }
        if (jQuery('#input_1_5').val() == 5) {
            jQuery('#next_mieter ').css("color", "grey");
            jQuery('#next_mieter ').css('cursor', 'default');

        }
        if (jQuery('#input_1_5').val() == 1) {
            jQuery('#prev_mieter ').css("color", "grey");
            jQuery('#prev_mieter ').css('cursor', 'pointer');
        }

    });

    jQuery("#prev_mieter").on(deviceEventType,function() {


        var nextElement = jQuery('#input_1_5 > option:selected').prev('option');
        var valueElement = jQuery('#input_1_5').val();
        if (nextElement.length > 0) {
            jQuery('#input_1_5 > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected').trigger('change');


        }
        if (jQuery('#input_1_5').val() == 1) {
            jQuery('#prev_mieter ').css("color", "grey");
            jQuery('#prev_mieter ').css('cursor', 'default');

        }

        if (jQuery('#input_1_5').val() > 1) {
            jQuery('#next_mieter ').css("color", "black");
            jQuery('#next_mieter ').css('cursor', 'pointer');
            jQuery('#prev_mieter ').css("color", "black");
            jQuery('#prev_mieter ').css('cursor', 'pointer');

        }


    });










    $(document).ready(function(){
        $('.carousel').carousel();
    });

    var datum_insert_alt = document.createElement("span");
    datum_insert_alt.innerHTML =  '<i class="fa-regular fa-calendar"></i>';
    datum_insert_alt.classList.add("placeholder");

    var datum_alt = document.querySelector("#input_1_7");
    insertAfter(datum_alt, datum_insert_alt);

    var datum_insert_wunsch = document.createElement("span");
    datum_insert_wunsch.innerHTML =  '<i class="fa-regular fa-calendar"></i>';
    datum_insert_wunsch.classList.add("placeholder");

    var datum_wunsch = document.querySelector("#input_1_117");
    insertAfter(datum_wunsch, datum_insert_wunsch);



    //onoffic Invite

    var uploadFile = document.createElement("div");
    uploadFile.innerHTML = '<i class="fa-regular fa-file"></i>';
    uploadFile.id = "uploadFile_icon";


    const uploadFile_before = document.querySelector("#field_1_134 label");
    uploadFile_before.parentNode.insertBefore(uploadFile, uploadFile_before);






  /*  var datum_insert_wunsch1 = document.createElement("div");
    datum_insert_wunsch1.innerHTML =  '<i class="fa-regular fa-calendar"></i>';
    datum_insert_wunsch1.classList.add("placefffholder");

    var datum_wunsch1 = document.querySelector("#field_1_134 label");
    insertBefore(datum_wunsch1, datum_insert_wunsch1);*/




    //Datum Info
    var datum_insert = document.createElement("span");
    datum_insert.innerHTML =  ' <a class="datum-trigger " data-target="datum"><i data-target="datum" id="info_datum" class="fa-regular fa-info-circle"></i></a><div id="datum" class="dropdown-content informationen_bonicheck"><p>Bitte beachte das mögliche Einzugsdatum aus dem Exposé. Eine starke Abweichung könnte eine negative Rückmeldung zur Folge haben. </p>';
    var datum = document.querySelector("#field_1_42 h3");
    insertAfter(datum, datum_insert);
    //materialize function
    var elems_datum = document.querySelectorAll('.datum-trigger');
    var instances_datum = M.Dropdown.init(elems_datum);

    //Haushalt info
    var haushalt_insert = document.createElement("span");
    haushalt_insert.innerHTML =  ' <a class="haushalt-trigger " data-target="haushalt"><i data-target="haushalt" id="info_haushalt" class="fa-regular fa-info-circle"></i></a><div id="haushalt" class="dropdown-content informationen_bonicheck"><p>Gib hier die Anzahl aller im Haushalt lebender Personen inkl. Kinder an. \n</p>';
    var haushalt = document.querySelector("#field_1_93 h3");
    insertAfter(haushalt, haushalt_insert);
    //materialize function
    var elems_haushalt = document.querySelectorAll('.haushalt-trigger');
    var instances_haushalt = M.Dropdown.init(elems_haushalt);

    //Mieter Info
    var mieter_insert = document.createElement("span");
    mieter_insert.innerHTML =  ' <a class="mieter-trigger " data-target="mieter"><i data-target="mieter" id="info_mieter" class="fa-regular fa-info-circle"></i></a><div id="mieter" class="dropdown-content informationen_bonicheck"><p>Bei allen hier angegebenen Personen ist ein Bonitätscheck in weiterer Folge erforderlich. </p>';
    var mieter = document.querySelector("#field_1_94 h3");
    insertAfter(mieter, mieter_insert);
    //materialize function
    var elems_mieter = document.querySelectorAll('.mieter-trigger');
    var instances_mieter = M.Dropdown.init(elems_mieter);

    //Stellplätze Info
    var garage_insert = document.createElement("span");
    garage_insert.innerHTML =  ' <a class="garage-trigger " data-target="garage"><i data-target="garage" id="info_garage" class="fa-regular fa-info-circle"></i></a><div id="garage" class="dropdown-content informationen_bonicheck"><p>Bitte beachte das Stellplätze nur je nach Verfügbarkeit angeboten werden können. Details hierzu findest du im Exposé.  </p>';
    var garage = document.querySelector("#field_1_150 h3");
    insertAfter(garage, garage_insert);
    //materialize function
    var elems_garage = document.querySelectorAll('.garage-trigger');
    var instances_garage = M.Dropdown.init(elems_garage);

    //Hauptmieter 1
    var hauptmieter_insert = document.createElement("span");
    hauptmieter_insert.innerHTML =  ' <a class="hauptmieter-trigger " data-target="hauptmieter"><i data-target="hauptmieter" id="info_hauptmieter" class="fa-regular fa-info-circle"></i></a><div id="hauptmieter" class="dropdown-content informationen_bonicheck"><p>Die Kommunikation mit Eugen wird stellvertretend über diese Person für etwaige weitere Hauptmieter*innen stattfinden. </p>';
    var hauptmieter = document.querySelector("#field_1_14 h3");
    insertAfter(hauptmieter, hauptmieter_insert);
    //materialize function
    var elems_hauptmieter = document.querySelectorAll('.hauptmieter-trigger');
    var instances_hauptmieter = M.Dropdown.init(elems_hauptmieter);

    //Bürge 1
    var buerge_insert = document.createElement("span");
    buerge_insert.innerHTML =  ' <a class="buerge-trigger " data-target="buerge"><i data-target="buerge" id="info_buerge" class="fa-regular fa-info-circle"></i></a><div id="buerge" class="dropdown-content informationen_bonicheck"><p>In diesem Fall führt der/die Bürg*in die Bonitätsprüfung durch und wird auch in den Mietvertrag mit aufgenommen.   </p>';
    var buerge = document.querySelector("#label_1_59_1 ");
    insertAfter(buerge, buerge_insert);
    //materialize function
    var elems_buerge = document.querySelectorAll('.buerge-trigger');
    var instances_buerge = M.Dropdown.init(elems_buerge);




});





//Haushalte
/*
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.haushalt-trigger');
    var instances = M.Dropdown.init(elems);
});
*/

//Mieter
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.mieter-trigger');
    var instances = M.Dropdown.init(elems);
});

//Hauptmieter 1
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.hauptmieter-trigger');
    var instances = M.Dropdown.init(elems);
});




//toggle checkbox Startseite Hauptmieter 1
jQuery('#switch_express_manuell_input').change( function(){

    if(this.checked) {

        jQuery('#show_box_manuell_smart').css('background-color', '#D0F9ED');
        jQuery('#show_box_express_smart').css('background-color', '#FFF');
        jQuery('#show_box_manuell').css('background-color', '#D0F9ED');
        jQuery('#show_box_express').css('background-color', '#FFF');

        jQuery('#gform_next_button_1_130').css('background-color', '#14E1A7');
        jQuery('#weiter_express_smart input').css('background-color', '#FFF');
        jQuery('#weiter_express input').css('background-color', '#FFF');
        jQuery('#weiter_manuell_smart input').css('background-color', '#14E1A7');

        jQuery("#choice_1_44_1").prop("checked", true);



        jQuery("#switch_checked_express").css('color', '#999999');
        jQuery("#switch_checked_manuell").css('color', 'black');

    }
    else{
        jQuery('#show_box_express_smart').css('background-color', '#D0F9ED');
        jQuery('#show_box_manuell_smart').css('background-color', '#FFF');
        jQuery('#show_box_express').css('background-color', '#D0F9ED');
        jQuery('#show_box_manuell').css('background-color', '#FFF');

        jQuery('#weiter_express_smart input').css('background-color', '#14E1A7');
        jQuery('#weiter_express input').css('background-color', '#14E1A7');
        jQuery('#gform_next_button_1_130').css('background-color', '#FFF');
        jQuery('#weiter_manuell_smart input').css('background-color', '#FFF');

        jQuery("#choice_1_44_0").prop("checked", true);




        jQuery("#switch_checked_manuell").css('color', '#999999');
        jQuery("#switch_checked_express").css('color', 'black');

    }

});


jQuery("#choice_1_44_0").prop("checked", true);



//toggle checkbox Startseite Weitere Einladungen Eugen
jQuery('#switch_express_manuell_input').change( function(){

    if(this.checked) {

        jQuery('#show_box_manuell_smart_weitere').css('background-color', '#D0F9ED');
        jQuery('#show_box_express_smart_weitere').css('background-color', '#FFF');
        jQuery('#show_box_manuell_weitere').css('background-color', '#D0F9ED');
        jQuery('#show_box_express_weitere').css('background-color', '#FFF');

        jQuery('#gform_next_button_3_130').css('background-color', '#14E1A7');
        jQuery('#weiter_express_smart_weitere input').css('background-color', '#FFF');
        jQuery('#weiter_express_weitere input').css('background-color', '#FFF');
        jQuery('#weiter_manuell_smart_weitere input').css('background-color', '#14E1A7');

        jQuery("#choice_2_44_1").prop("checked", true);



        jQuery("#switch_checked_express").css('color', '#999999');
        jQuery("#switch_checked_manuell").css('color', 'black');

    }
    else{
        jQuery('#show_box_express_smart_weitere').css('background-color', '#D0F9ED');
        jQuery('#show_box_manuell_smart_weitere').css('background-color', '#FFF');
        jQuery('#show_box_express_weitere').css('background-color', '#D0F9ED');
        jQuery('#show_box_manuell_weitere').css('background-color', '#FFF');

        jQuery('#weiter_express_smart_weitere input').css('background-color', '#14E1A7');
        jQuery('#weiter_express_weitere input').css('background-color', '#14E1A7');
        jQuery('#gform_next_button_2_130').css('background-color', '#FFF');
        jQuery('#weiter_manuell_smart_weitere input').css('background-color', '#FFF');

        jQuery("#choice_2_44_0").prop("checked", true);




        jQuery("#switch_checked_manuell").css('color', '#999999');
        jQuery("#switch_checked_express").css('color', 'black');

    }

});


jQuery("#choice_2_44_0").prop("checked", true);





jQuery(document).ready(function() {
    document.getElementById("gfield_upload_rules_1_134").innerHTML = "<p>Unterstützte Dateiformate: JPEG, PNG, PDF</p><p>Maximal 7 MB</p>";
    document.getElementById("gform_browse_button_1_134").innerHTML = "Dateien Auswählen";

});


//toggle checkbox Weitere Startseite Desktop
jQuery('#show_box_express_weitere').on('click', function(){

    jQuery('#show_box_express_weitere').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell_weitere').css('background-color', '#FFF');

    jQuery('#weiter_express_weitere input').css('background-color', '#14E1A7');
    jQuery('.gform_next_button').css('background-color', '#FFF');

    jQuery("#choice_1_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell").css('color', '#999999');
    jQuery("#switch_checked_express").css('color', 'black');

    jQuery('#show_box_express_weitere').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell_weitere').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell_weitere').on('click', function(){

    jQuery('#show_box_manuell_weitere').css('background-color', '#D0F9ED');
    jQuery('#show_box_express_weitere').css('background-color', '#FFF');

    jQuery('.gform_next_button').css('background-color', '#14E1A7');
    jQuery('#weiter_express_weitere input').css('background-color', '#FFF');

    jQuery("#choice_1_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell_weitere').css('border-color', '#D0F9ED');
    jQuery('#show_box_express_weitere').css('border-color', '#14E1A7');


});

//toggle checkbox Startseite Tablet
jQuery('#show_box_express_smart_weitere').on('click', function(){

    jQuery('#show_box_express_smart_weitere').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart_weitere').css('background-color', '#FFF');

    jQuery('#weiter_express_smart_weitere input').css('background-color', '#14E1A7');
    jQuery('#weiter_manuell_smart_weitere input').css('background-color', '#FFF');
    jQuery('#gform_next_button_1_130').css('background-color', '#FFF');

    jQuery("#choice_1_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell_weitere").css('color', '#999999');
    jQuery("#switch_checked_express_weitere").css('color', 'black');

    jQuery('#show_box_express_smart_weitere').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart_weitere').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell_smart_weitere').on('click', function(){

    jQuery('#show_box_manuell_smart_weitere').css('background-color', '#D0F9ED');
    jQuery('#show_box_express_smart_weitere').css('background-color', '#FFF');

    jQuery('#gform_next_button_1_130').css('background-color', '#14E1A7');
    jQuery('#weiter_express_smart_weitere input').css('background-color', '#FFF');
    jQuery('#weiter_manuell_smart_weitere input').css('background-color', '#14E1A7');

    jQuery("#choice_1_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell_smart_weitere').css('border-color', '#D0F9ED');
    jQuery('#show_box_express_smart_weitere').css('border-color', '#14E1A7');


});


//toggle checkbox Startseite Desktop
jQuery('#show_box_express').on('click', function(){

    jQuery('#show_box_express').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell').css('background-color', '#FFF');

    jQuery('#weiter_express input').css('background-color', '#14E1A7');
    jQuery('#gform_next_button_1_130').css('background-color', '#FFF');

    jQuery("#choice_1_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell").css('color', '#999999');
    jQuery("#switch_checked_express").css('color', 'black');

    jQuery('#show_box_express').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell').on('click', function(){

    jQuery('#show_box_manuell').css('background-color', '#D0F9ED');
    jQuery('#show_box_express').css('background-color', '#FFF');

    jQuery('#gform_next_button_1_130').css('background-color', '#14E1A7');
    jQuery('#weiter_express input').css('background-color', '#FFF');

    jQuery("#choice_1_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell').css('border-color', '#D0F9ED');
    jQuery('#show_box_express').css('border-color', '#14E1A7');


});

//toggle checkbox Startseite Tablet
jQuery('#show_box_express_smart').on('click', function(){

    jQuery('#show_box_express_smart').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart').css('background-color', '#FFF');

    jQuery('#weiter_express_smart input').css('background-color', '#14E1A7');
    jQuery('#weiter_manuell_smart input').css('background-color', '#FFF');
    jQuery('#gform_next_button_1_130').css('background-color', '#FFF');

    jQuery("#choice_1_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell").css('color', '#999999');
    jQuery("#switch_checked_express").css('color', 'black');

    jQuery('#show_box_express_smart').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell_smart').on('click', function(){

    jQuery('#show_box_manuell_smart').css('background-color', '#D0F9ED');
    jQuery('#show_box_express_smart').css('background-color', '#FFF');

    jQuery('#gform_next_button_1_130').css('background-color', '#14E1A7');
    jQuery('#weiter_express_smart input').css('background-color', '#FFF');
    jQuery('#weiter_manuell_smart input').css('background-color', '#14E1A7');

    jQuery("#choice_1_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell_smart').css('border-color', '#D0F9ED');
    jQuery('#show_box_express_smart').css('border-color', '#14E1A7');


});






//toggle checkbox Startseite Desktop Eugen weitere Einladungen
jQuery('#show_box_express').on('click', function(){

    jQuery('#show_box_express').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell').css('background-color', '#FFF');

    jQuery('#weiter_express input').css('background-color', '#14E1A7');
    jQuery('#gform_next_button_2_130').css('background-color', '#FFF');

    jQuery("#choice_2_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell").css('color', '#999999');
    jQuery("#switch_checked_express").css('color', 'black');

    jQuery('#show_box_express').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell').on('click', function(){

    jQuery('#show_box_manuell').css('background-color', '#D0F9ED');
    jQuery('#show_box_express').css('background-color', '#FFF');

    jQuery('#gform_next_button_2_130').css('background-color', '#14E1A7');
    jQuery('#weiter_express input').css('background-color', '#FFF');

    jQuery("#choice_2_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell').css('border-color', '#D0F9ED');
    jQuery('#show_box_express').css('border-color', '#14E1A7');


});

//toggle checkbox Startseite Tablet Eugen weitere Einladungen
jQuery('#show_box_express_smart').on('click', function(){

    jQuery('#show_box_express_smart').css('background-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart').css('background-color', '#FFF');

    jQuery('#weiter_express_smart input').css('background-color', '#14E1A7');
    jQuery('#weiter_manuell_smart input').css('background-color', '#FFF');
    jQuery('#gform_next_button_2_130').css('background-color', '#FFF');

    jQuery("#choice_2_44_0").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = false;

    jQuery("#switch_checked_manuell").css('color', '#999999');
    jQuery("#switch_checked_express").css('color', 'black');

    jQuery('#show_box_express_smart').css('border-color', '#D0F9ED');
    jQuery('#show_box_manuell_smart').css('border-color', '#14E1A7');




});

jQuery('#show_box_manuell_smart').on('click', function(){

    jQuery('#show_box_manuell_smart').css('background-color', '#D0F9ED');
    jQuery('#show_box_express_smart').css('background-color', '#FFF');

    jQuery('#gform_next_button_1_130').css('background-color', '#14E1A7');
    jQuery('#weiter_express_smart input').css('background-color', '#FFF');
    jQuery('#weiter_manuell_smart input').css('background-color', '#14E1A7');

    jQuery("#choice_2_44_1").prop("checked", true);

    document.getElementById("switch_express_manuell_input").checked = true;

    jQuery("#switch_checked_express").css('color', '#999999');
    jQuery("#switch_checked_manuell").css('color', 'black');

    jQuery('#show_box_manuell_smart').css('border-color', '#D0F9ED');
    jQuery('#show_box_express_smart').css('border-color', '#14E1A7');


});








jQuery('#input_1_5').attr('disabled', false);
jQuery('#input_1_95').attr('disabled', false);



//Datepicker enable only 1. and 15.

gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
    if ( formId == 1 && fieldId == 117 ) {
        optionsObj.minDate = 0;
        optionsObj.beforeShowDay = function(date) {

            var day = date.getDate();
            return [(day == 1 || day == 15)];
        };
    }
    return optionsObj;
} );

gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
    if ( formId == 1 && fieldId == 7 ) {
        optionsObj.minDate = 0;
        optionsObj.beforeShowDay = function(date) {

            var wunschTermin = jQuery( "#input_1_117" ).datepicker( "getDate" );
            var day = date.getDate();
            var checkdate = jQuery.datepicker.formatDate('mm/dd/yy', date);
            var vergebenerWunschTermin = jQuery.datepicker.formatDate('mm/dd/yy', wunschTermin);
            return [(day == 1 || day == 15) && checkdate !=  vergebenerWunschTermin ];
        };
    }
    return optionsObj;
} );

//Datapicker disable year

gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
    if ( formId == 1 && fieldId == 7 ) { // Update form and field id in this line

        optionsObj.changeYear = false;
    }
    return optionsObj;
});


gform.addFilter( 'gform_datepicker_options_pre_init', function( optionsObj, formId, fieldId ) {
    if ( formId == 1 && fieldId == 117 ) { // Update form and field id in this line

        optionsObj.changeYear = false;
    }
    return optionsObj;
});



