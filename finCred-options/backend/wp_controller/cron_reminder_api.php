<?php


add_action( 'rest_api_init', function () {
    register_rest_route( 'remind_boni/v1', '/pwd/(?P<id>\d+)', array(
        'methods'             => 'GET',
        'permission_callback' => '__return_true',
        'callback'            => 'cron_remind_boni'
    ) );
} );

function cron_remind_boni($request) {

$id = $request->get_param('id');

if($id == 12345) {

    $the_query = new WP_Query( array(
        'post_type' => 'estates',
        'posts_per_page' => -1 ) );

    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $boni_id = get_the_ID();
            $anzahl_hauptmieter = get_post_meta($boni_id, 'anzahl_hauptmieter' ,true);

            for ($i = 1; $i <= $anzahl_hauptmieter; $i++) {
                $hat_buerge = get_post_meta($boni_id, 'hat_buerge_hauptmieter_'.$i ,true);
                $invite_id = get_post_meta($boni_id, 'boni_invite_id_hauptmieter_'.$i ,true);
                $invite_url = get_post_meta($boni_id, 'boni_invite_url_hauptmieter_'.$i ,true);
                $reminder_versendet = get_post_meta($boni_id, 'express_reminder_versendet_'.$i ,true);
                $timestamp_old = get_post_meta($boni_id, 'boni_invite_timestamp_hauptmieter_'.$i ,true);
                $timestamp_now = time();
                $dif = $timestamp_now - $timestamp_old;
                $hours = $dif/3600;

                         if(!empty($invite_id) && $reminder_versendet == 0 &&  $hours >= 6){

                             get_post_meta($boni_id, 'express_reminder_versendet_'.$i ,true);

                             $email ='';
                             $anrede ='';
                             $vorname ='';
                             $name ='';
                             if($hat_buerge == 1){
                                 $email == get_post_meta($boni_id, 'email_buerge_'.$i ,true);
                                 $anrede == get_post_meta($boni_id, 'anrede_buerge_'.$i ,true);
                                 $vorname == get_post_meta($boni_id, 'vorname_buerge_'.$i ,true);
                                 $name == get_post_meta($boni_id, 'name_buerge_'.$i ,true);
                             }
                             else{
                                 $email == get_post_meta($boni_id, 'email_hauptmieter_'.$i ,true);
                                 $anrede == get_post_meta($boni_id, 'anrede_hauptmieter_'.$i ,true);
                                 $vorname == get_post_meta($boni_id, 'vorname_hauptmieter_'.$i ,true);
                                 $name == get_post_meta($boni_id, 'name_hauptmieter_'.$i ,true);

                             }
                             //reminder mail
                             $headers = array('Content-Type: text/html; charset=UTF-8');
                             $message = '<div style="color: red;"><a href="'.$invite_url. '"></a>Link zur Bonitätsprüfung</div>';
                             wp_mail( $email, 'Titel', $message, $headers );

                             update_post_meta( $boni_id, 'express_reminder_versendet_'.$i, 1 );


                         }


            }




        }
        wp_reset_postdata();
    } else {
        // no posts found
    }




}
else{
    return 'falsches Passwort';
}


}


//*/15 * * * * curl --request GET 'http://staging.eugen.at/wp-json/request_immo/v1/pwd/1234'