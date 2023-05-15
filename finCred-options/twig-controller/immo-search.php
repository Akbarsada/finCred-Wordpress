<?php
wp_enqueue_script('jquery');
/*wp_head();

get_header();*/


?>


    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                   value="<?php echo get_search_query() ?>"
                   name="s"
                   title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>

    <form action="">


        <!--  <div class="form-group" style="outline: red solid 1px; padding: 10px; margin: 5px; ">
              <label class="col-md-4 control-label" for="rolename">Bezirk auswählen</label>
              <div class="col-md-4">
                  <select id="dates-field2" class="multiselect-ui" multiple="multiple">
                      <option value="tomatoes">1. Bezirk</option>
                      <option value="mozarella">2. Bezirk</option>
                      <option value="mushrooms">3. Bezirk</option>
                      <option value="pepperoni">4. Bezirk</option>
                      <option value="onions">5. Bezirk</option>
                      <option value="cheese">6. Bezirk</option>
                  </select>
                  <button type="submit">Anwenden</button>
              </div>
          </div>-->




        <div class="preis-range" style="outline: red solid 1px; padding: 10px; margin: 5px; ">
            <label for="preis"><strong>Preis:</strong></label>
            <input type="text"   id="preis"  >
            <input type="hidden" name="min_preis"  id="min_preis"  >
            <input type="hidden" name="max_preis"  id="max_preis"  >
            <div id="slider-preis" style="width: 10%; display: inline-block;"></div>
            <button type="submit">Anwenden</button>
        </div>

        <div class="flaeche-range" style="outline: red solid 1px; padding: 10px; margin: 5px; ">

            <label for="flaeche"><strong>Fläche:</strong></label>
            <input type="text"   id="flaeche"  >
            <input type="hidden" name="min_flaeche"  id="min_flaeche"  >
            <input type="hidden" name="max_flaeche"  id="max_flaeche"  >
            <div id="slider-flaeche" style="width: 10%; display: inline-block;"></div>
            <button type="submit">Anwenden</button>
        </div>




        <div class="zimmer-radio" style="outline: red solid 1px; padding: 10px; margin: 5px; ">
            <legend><strong>Anzahl Zimmer:</strong></legend>

            <label for="zimmer1">
                <input type="radio" name="zimmer"  id="zimmer1" value="1" checked <?php if($_GET['zimmer'] == 1)  echo 'checked = "checked"'; ?>>
                1 Zimmer</label>

            <label for="zimmer2">
                <input type="radio" name="zimmer"  id="zimme2"  value="2" <?php if($_GET['zimmer'] == 2)  echo 'checked = "checked"'; ?>>
                2 Zimmer</label>

            <label for="zimmer3">
                <input type="radio" name="zimmer"  id="zimmer3"  value="3" <?php if($_GET['zimmer'] == 3)  echo 'checked = "checked"'; ?>>
                3 Zimmer</label>

            <label for="zimmer4">
                <input type="radio" name="zimmer"  id="zimmer4"  value="4" <?php if($_GET['zimmer'] == 4)  echo 'checked = "checked"'; ?>>
                4 Zimmer</label>

            <label for="zimmer5">
                <input type="radio" name="zimmer"  id="zimmer5"  value="5" <?php if($_GET['zimmer'] == 5)  echo 'checked = "checked"'; ?>>
                5 Zimmer</label>

            <button type="submit">Anwenden</button>
        </div>

        <div class="weitere-filter-radio" style="outline: red solid 1px; padding: 10px; margin: 5px; ">
            <span><strong>Weitere Filter</strong></span>
            <legend><strong>Freiflächen</strong></legend>

            <label for="loggia">
                <input type="checkbox" name="loggia"  id="loggia" value="1" style="display: inline;"  <?php if($_GET['loggia'] == 1)  echo 'checked = "checked"'; ?>>
                Loggia</label>

            <label for="balkon">
                <input type="checkbox" name="balkon"  id="balkon"  value="1" style="display: inline;" <?php if($_GET['balkon'] == 1)  echo 'checked = "checked"'; ?>>
                Balkon</label>

            <label for="terrasse">
                <input type="checkbox" name="terrasse"  id="terrasse"  value="1" style="display: inline;" <?php if($_GET['terrasse'] == 1)  echo 'checked = "checked"'; ?>>
                Terrasse</label>

            <label for="garten">
                <input type="checkbox" name="garten"  id="garten"  value="1" style="display: inline;" <?php if($_GET['garten'] == 1)  echo 'checked = "checked"'; ?>>
                Garten</label>

            <legend><strong>Ausstattung</strong></legend>
            <label for="ausstattung">
                <input type="checkbox" name="ausstattung"  id="ausstattung" value="1" style="display: inline;" <?php if($_GET['ausstattung'] == 1)  echo 'checked = "checked"'; ?>>
                Aufzug</label>

            <label for="badewanne">
                <input type="checkbox" name="badewanne"  id="badewanne"  value="1" style="display: inline;" <?php if($_GET['badewanne'] == 1)  echo 'checked = "checked"'; ?>>
                Badewanne</label>

            <label for="barrierefrei">
                <input type="checkbox" name="barrierefrei"  id="barrierefrei"  value="1" style="display: inline;" <?php if($_GET['barrierefrei'] == 1)  echo 'checked = "checked"'; ?>>
                Barrierefrei</label>

            <label for="keller">
                <input type="checkbox" name="keller"  id="keller"  value="1" style="display: inline;" <?php if($_GET['keller'] == 1)  echo 'checked = "checked"'; ?>>
                Keller</label>

            <label for="zimmer4">
                <input type="checkbox" name="moebeliert"  id="moebeliert"  value="1" style="display: inline;" <?php if($_GET['moebeliert'] == 1)  echo 'checked = "checked"'; ?>>
                Möbeliert</label>

            <label for="parkplatz">
                <input type="checkbox" name="parkplatz"  id="parkplatz"  value="1" style="display: inline;" <?php if($_GET['parkplatz'] == 1)  echo 'checked = "checked"'; ?>>
                Parkplatz</label>

            <label for="seniorengerecht">
                <input type="checkbox" name="seniorengerecht"  id="seniorengerecht"  value="1" style="display: inline;" <?php if($_GET['seniorengerecht'] == 1)  echo 'checked = "checked"'; ?>>
                Seniorengerecht</label>


            <legend><strong>Zustand</strong></legend>
            <label for="zustand">
                <input type="checkbox" name="zustand"  id="zustand" value="1" style="display: inline;" <?php if($_GET['zustand'] == 1)  echo 'checked = "checked"'; ?>>
                Erstbezug</label>

            <label for="neuwertig">
                <input type="checkbox" name="neuwertig"  id="neuwertig"  value="1" style="display: inline;" <?php if($_GET['neuwertig'] == 1)  echo 'checked = "checked"'; ?>>
                Neuwertig</label>


            <label for="saniert">
                <input type="checkbox" name="saniert"  id="saniert"  value="1" style="display: inline;" <?php if($_GET['saniert'] == 1)  echo 'checked = "checked"'; ?>>
                Saniert</label>

            <button type="submit">Anwenden</button>
        </div>

    </form>



<?php
$tax_query = array('relation' => 'AND');

if(isset ($_GET['zimmer'])){

    $tax_query[] =    array(
        'taxonomy' => 'anzahl_zimmer',
        'field'    => 'name',
        'terms'    => $_GET['zimmer'],
    );
}

if(isset ($_GET['loggia'])){

    $tax_query[] =    array(
        'taxonomy' => 'loggia',
        'field'    => 'name',
        'terms'    => $_GET['loggia']
    );
}

if(isset ($_GET['balkon'])){

    $tax_query[] =    array(
        'taxonomy' => 'balkon',
        'field'    => 'name',
        'terms'    => $_GET['balkon'],
    );
}

if(isset ($_GET['garten'])){

    $tax_query[] =    array(
        'taxonomy' => 'garten',
        'field'    => 'name',
        'terms'    => $_GET['garten'],
    );
}

if(isset ($_GET['ausstattung'])){

    $tax_query[] =    array(
        'taxonomy' => 'ausstattung',
        'field'    => 'name',
        'terms'    => $_GET['ausstattung'],
    );
}

if(isset ($_GET['badewanne'])){

    $tax_query[] =    array(
        'taxonomy' => 'badewanne',
        'field'    => 'name',
        'terms'    => $_GET['badewanne'],
    );
}

if(isset ($_GET['barrierefrei'])){

    $tax_query[] =    array(
        'taxonomy' => 'barrierefrei',
        'field'    => 'name',
        'terms'    => $_GET['barrierefrei'],
    );
}

if(isset ($_GET['keller'])){

    $tax_query[] =    array(
        'taxonomy' => 'keller',
        'field'    => 'name',
        'terms'    => $_GET['keller'],
    );
}

if(isset ($_GET['moebeliert'])){

    $tax_query[] =    array(
        'taxonomy' => 'moebeliert',
        'field'    => 'name',
        'terms'    => $_GET['moebeliert'],
    );
}

if(isset ($_GET['parkplatz'])){

    $tax_query[] =    array(
        'taxonomy' => 'parkplatz',
        'field'    => 'name',
        'terms'    => $_GET['parkplatz'],
    );
}

if(isset ($_GET['seniorengerecht'])){

    $tax_query[] =    array(
        'taxonomy' => 'seniorengerecht',
        'field'    => 'name',
        'terms'    => $_GET['seniorengerecht'],
    );
}

if(isset ($_GET['garten'])){

    $tax_query[] =    array(
        'taxonomy' => 'garten',
        'field'    => 'name',
        'terms'    => $_GET['garten'],
    );
}



$args = array(

    'post_type' => 'apartments',
    'posts_per_page' => 20,
    'tax_query' => $tax_query


);
$the_query = new WP_Query( $args );
?>


<?php

/*$terms = get_terms( array(
	'taxonomy' => 'moebeliert',
	'hide_empty' => false,
) );*/


/*echo '<pre>';
echo print_r($_GET);
echo '</pre>';*/



?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="entry-content">

            <?php the_content(); ?>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
<?php else:  ?>
    <p><?php _e( 'Leider keine Treffer.' ); ?></p>
<?php endif; ?>










    <script type="text/javascript" >




        $( function() {
            $( "#slider-preis" ).slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    $( "#preis" ).val( " "  + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                    $( "#min_preis" ).val( ui.values[ 0 ] );
                    $( "#max_preis" ).val( ui.values[ 1 ] );
                }
            });

        } );


        $( function() {
            $( "#slider-flaeche" ).slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    $( "#flaeche" ).val( " " + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                    $( "#min_flaeche" ).val( ui.values[ 0 ] );
                    $( "#max_flaeche" ).val( ui.values[ 1 ] );
                }
            });

        } );




        $(function() {
            $('.multiselect-ui').multiselect({
                includeSelectAllOption: true,
                searchable:true,

            });
        });




    </script>
<?php

wp_footer();
