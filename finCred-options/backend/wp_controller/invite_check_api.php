<?php

require_once(FIN_AUTOLOADER_DIR);
$client = new \GuzzleHttp\Client();

add_action('rest_api_init', function () {
    register_rest_route( 'api/v1', '/invite-id', array(
        'methods' => 'POST',
        'callback' => 'invite_id_from_data'
    ));
});

function invite_id_from_data($req) {
    file_put_contents('hook.log', json_encode($req->get_body(), JSON_PRETTY_PRINT), FILE_APPEND);

    $data = json_decode($req->get_body());
    $res = new WP_REST_Response();
    $res->set_status(200);

    if(!$data) {
        return false;
    }

    if($data->events[0]->status == 'FWDACCEPTED') {
        $invite_id = $data->events[0]->invite_id;
        $inviteID = prefix_get_the_invite( $invite_id );
        return rest_ensure_response( $inviteID );
    }
}

function prefix_get_the_invite( $invite_id ) {

//boni postid + nummer des Mieters 1-5
    global $wpdb;
    $boni_post_id = $wpdb->get_results( "select post_id, meta_key from $wpdb->postmeta where meta_value = $invite_id AND meta_key = $invite_id" );
    $boni_post_id = $boni_post_id[0]->post_id;
    $nummer_inviter = get_post_meta( $boni_post_id, $boni_post_id.'_'.$invite_id, true );

	require(FIN_AUTOLOADER_DIR);
	$client = new \GuzzleHttp\Client();

	$response = $client->request('GET',  get_option('fin_server') . 'invite/'.$invite_id , [
		'headers' => [
			'Authorization' => 'Bearer '. get_option('fin_api_key'),
			'accept' => 'application/json',
		],
	]);

	$data =  json_decode($response->getBody(), true);


//Wenn bestanden

    if(empty($data['data']['criterias_failed'])){

        //Meta auf bestanden setzen für Hauptmieter 1-5
        //Meta auf boni gemaucht setzen für Hauptmieter 1-5
        //Zähler für boni_stand insgesamt für Hauptmieter 1-5
        update_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_'.$nummer_inviter, 1 );
        update_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_'.$nummer_inviter, 1 );
	    $bonistand_neu = intval(get_post_meta( $boni_post_id, 'anzahl_durchgefuehrter_bonis', true )) +1;
	    update_post_meta( $boni_post_id, 'anzahl_durchgefuehrter_bonis',  $bonistand_neu );
        bonistand_update ($boni_post_id );

         //nur für Hauptmieter 1
        //alle Eugen Einladungen werden hausgeschickt
        if($nummer_inviter == 1){

            switch (true) {
                case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 2 ):
                    eugen_invite($boni_post_id, 2);
                    break;
                case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 3 ):
                    eugen_invite($boni_post_id, 2);
                    eugen_invite($boni_post_id, 3);
                    break;
                case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 4 ):
                    eugen_invite($boni_post_id, 2);
                    eugen_invite($boni_post_id, 3);
                    eugen_invite($boni_post_id, 4);
                    break;
                case (get_post_meta( $boni_post_id, 'anzahl_hauptmieter', true ) == 5 ):
                    eugen_invite($boni_post_id, 2);
                    eugen_invite($boni_post_id, 3);
                    eugen_invite($boni_post_id, 4);
                    eugen_invite($boni_post_id, 5);
                    break;
            }
        }
    }
    //nicht bestanden
    else{
        //TODO manuell Invite bei nicht bestanden
        update_post_meta( $boni_post_id, 'boni_ergebnis_hauptmieter_'.$nummer_inviter, -1 );
        update_post_meta($boni_post_id, 'express_manuell_hauptmieter_'.$nummer_inviter, 1);




        if(get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_'.$nummer_inviter, true ) == 0){
            $anrede = get_post_meta( $boni_post_id, 'anrede_hauptmieter_'.$nummer_inviter, true );
            $vorname = get_post_meta( $boni_post_id, 'vorname_hauptmieter_'.$nummer_inviter, true );
            $name = get_post_meta( $boni_post_id, 'name_hauptmieter_'.$nummer_inviter, true );
        }
        else{

            $anrede = get_post_meta( $boni_post_id, 'anrede_buerge_'.$nummer_inviter, true );
            $vorname = get_post_meta( $boni_post_id, 'vorname_buerge_'.$nummer_inviter, true );
            $name = get_post_meta( $boni_post_id, 'name_buerge_'.$nummer_inviter, true );

        }



        // $email = get_post_meta( $boni_post_id, 'email_hauptmieter_'.$nummer_hauptmieter, true );
        $appartment_id = get_post_meta( $boni_post_id, 'wp_apartments_post_ID', true );
        $appartment_bild = get_post_meta( $appartment_id, 'objekt_bild_url', true );
        $appartment_titel = get_post_meta( $appartment_id, 'objekt_titel', true );
        $appartment_adresse = get_post_meta( $appartment_id, 'objekt_adresse', true );
        $appartment_ort = get_post_meta( $appartment_id, '_ort', true );
        $appartment_plz = get_post_meta( $appartment_id, '_plz', true );
        $appartment_zimmer = get_post_meta( $appartment_id, '_anzahl_zimmer', true );
        $appartment_miete = get_post_meta( $appartment_id, '_warmmiete', true );
        $site_url = site_url();
        $ort_plz = $appartment_ort . ' ' . $appartment_plz;

        if($anrede == 'Frau'){
            $begruesung = 'Sehr geehrte Frau '  . $name;
        }
        else{
            $begruesung = 'Sehr geehrter Herr ' . $name;
        }

        $link = site_url().'/boni-check-manuell/?boni_post_id='.$boni_post_id.'&nummer_inviter='.$nummer_inviter;
        $email_manuell = get_post_meta( $boni_post_id, 'email_hauptmieter_'.$nummer_inviter, true );
        $email_manuell_buerge = get_post_meta( $boni_post_id, 'email_buerge_'.$nummer_inviter, true );


        $headers = array('Content-Type: text/html; charset=UTF-8');

        $message = '
<!DOCTYPE html>
<html>
<head>
	<title>Eugen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no, minimal-ui"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<style>
		
		/* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
		#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
		.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
		body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
		table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
		img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */
		
		/* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
		body{margin:0; padding:0; font-size:14px;}
		img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
		table{border-collapse:collapse !important;}
		body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
		
		h1 {
			font-size: 36px;
			line-height: 48px;
			font-weight: bold;
			margin-top: 0;
			margin-bottom: 0;
		}
		
		p {
			margin-top: 0;
			margin-bottom: 0;
			font-size: 14px;
			line-height: 22px;
		}
		
		a {
			color: #ffffff;
			text-decoration: none;
		}
		
		.mt-s {
			margin-top: 8px;
		}
		
		.small {
			font-size: 12px;
		}
		
		.footer-text {
			font-size: 10px;
			line-height: 16px;
			color: #ffffff;
			margin-top: 8px;
		}
		
      
		
	</style>
</head>

<body style="margin: 0; padding: 0; font-family: Verdada, Helvetica, sans-serif; background-color: #ffffff;" bgcolor="#ffffff">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center">
			
			<table class="table-main" width="100%" style="max-width: 600px;" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center">
						
						<!-- HEADER -->
						
						<table class="table-header" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td colspan="3" height="80">&nbsp;</td>
							</tr>
							<tr>
								<td width="16"></td>
								<td>
									<a href="#"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/220x80_logo_header.png" alt="Eugen" width="110" height="40" class="logo"></a>
								</td>
								<td width="16"></td>
							</tr>
							<tr>
								<td colspan="3" height="64">&nbsp;</td>
							</tr>
						</table>
						
						<!-- INTRO CONTENT -->
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="16"></td>
								<td><h1>'.$appartment_titel.'</h1></td>
								<td width="16"></td>
							</tr>
							<tr>
								<td colspan="3" height="32">&nbsp;</td>
							</tr>
							<tr>
								<td width="16"></td>
								<td>
									<p>'.$begruesung.'</p>
									<p class="mt-s">Ihre Bonität war leider negativ, sie können mit dem folgendem Link zur manuellen Bonität</p>
								</td>
								<td width="16"></td>
							</tr>
							<tr>
								<td colspan="3" height="32">&nbsp;</td>
							</tr>
							<tr>
								<td width="16"></td>
								<td align="center">
									<a href="'.$link.'"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/396x96_button_de.png" width="198" height="48" alt="Zur Bonität">Zur Bonität</a>
								</td>
								<td width="16"></td>
							</tr>
							<tr>
								<td colspan="3" height="64">&nbsp;</td>
							</tr>
						</table>
						
						<!-- OBJECT CONTENT -->
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="'.$appartment_bild.'" width="600" height="315" alt="'.$appartment_titel.'" style="display: block;"></td>
							</tr>
							<tr>
								<td style="background-color: #14E1A7;" bgcolor="#14E1A7">
									
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td height="16px" colspan="7">&nbsp;</td>
										</tr>
										<tr>
											<td width="16">&nbsp;</td>
											<td width="46%" valign="top">
												<p class="small"><strong>Deine Wunsch-Wohnung</strong></p>
												<p class="small">'.$appartment_titel.'</p>
												<p class="small">'.$appartment_adresse.'</p>
												<p class="small">'.$ort_plz.'</p>
											</td>
											<td width="16">&nbsp;</td>
											<td width="22%" valign="top">
												<p class="small"><strong>Zimmer</strong></p>
												<p class="small">'.$appartment_zimmer.' Zimmer</p>
											</td>
											<td width="16">&nbsp;</td>
											<td width="22%" valign="top">
												<p class="small"><strong>Miete</strong></p>
												<p class="small">'.$appartment_miete.' € pro Monat</p>
											</td>
											<td width="16">&nbsp;</td>
										</tr>
										<tr>
											<td height="16" colspan="7">&nbsp;</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>
						
						<!-- FOOTER -->
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td style="background-color: #333333;" bgcolor="#333333">
									
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td height="24" colspan="3">&nbsp;</td>
										</tr>
										<tr>
											<td width="16"></td>
											<td valign="top" align="center">
												<img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/132x48_logo_footer.png" width="66" height="24" alt="Eugen">
												<p class="footer-text">eugen GmbH<br>
													Riemergasse 8, 1010 Wien<br>
													<a href="mailto:hallo@eugen.at">hallo@eugen.at</a></p>
											</td>
											<td width="16"></td>
										</tr>
										<tr>
											<td height="24" colspan="3">&nbsp;</td>
										</tr>
										<tr>
											<td width="16"></td>
											<td align="center">
												
												<table border="0" cellspacing="0" cellpadding="0" align="center">
													<tr>
														<td><a href="https://www.facebook.com/eugen.immo"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/48x48_facebook.png" width="24" height="24" alt="facebook"></a></td>
														<td width="24">&nbsp;</td>
														<td><a href="https://www.linkedin.com/company/eugen-immo/"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/48x48_linkedin.png" width="24" height="24" alt="facebook"></a></td>
														<td width="24">&nbsp;</td>
														<td><a href="https://www.instagram.com/eugen.immo/"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/48x48_instagram.png" width="24" height="24" alt="facebook"></a></td>
														<td width="24">&nbsp;</td>
														<td><a href="https://www.tiktok.com/@eugen.immo?_t=8VrgZCDgjN0&_r=1"><img src="https://staging.eugen.immo/wp-content/plugins/eugen-options/assets/48x48_tiktok.png" width="24" height="24" alt="facebook"></a></td>
													</tr>
												</table>
												
											</td>
											<td width="16"></td>
										</tr>
										<tr>
											<td height="24" colspan="3">&nbsp;</td>
										</tr>
									</table>
									
								</td>
							</tr>
							
							<tr>
								<td height="80">&nbsp;</td>
							</tr>
						</table>
						
					</td>
				</tr>
			</table>
	
		</td>
	</tr>
</table>

</body>
</html>
';


        if(get_post_meta( $boni_post_id, 'hat_buerge_hauptmieter_'.$nummer_inviter, true ) == 0){
            wp_mail( $email_manuell, $appartment_titel, $message, $headers );
        }
        else{

            wp_mail( $email_manuell_buerge, $appartment_titel, $message, $headers );

        }



        update_post_meta( $boni_post_id, 'boni_gemacht_hauptmieter_'.$nummer_inviter, -1 );

    }
}
