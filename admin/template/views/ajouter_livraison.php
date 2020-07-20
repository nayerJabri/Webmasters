<?php
require_once '../../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
if (isset($_POST['ajouter'])){
	include "../config.php";
include "../entities/livraison.php";
include "../core/livraison_core.php";
include "../entities/livreur.php";
include "../core/livreur_core.php";   
	if (isset($_POST['referance'])and isset($_POST['livreur'])  and isset($_POST['date'])and isset($_POST['adresselivraison'])){
 	$livraisonC=new livraison_core();
	$client=$livraisonC->client($_POST['referance']);
	foreach ($client as $key => $value) {
		$c=$value['userid'];
	}
	$livreurC=new livreur_core();
	$liv=$livreurC->recuperer_livreur($_POST['livreur']);
foreach ($liv as $key => $value) {
	$l=$value['adressemail'];	 
} 
$livraison=new livraison($_POST['referance'],$c,$_POST['livreur'],$_POST['date'],$_POST['adresselivraison']);
$livraisonC->ajouter_livraison($livraison);
date_default_timezone_set('Etc/UTC');

	 $google_email = 'soukelmedina6@gmail.com';
    $oauth2_clientId = '384155578690-pptpl50ianeeikrpbjnboctb8kjfgn2o.apps.googleusercontent.com';
    $oauth2_clientSecret = 'kCA72iatU-t8UGttrqtY_yvL';
    $oauth2_refreshToken = '1//03oISwgoQJQF0CgYIARAAGAMSNwF-L9Ir_pWRugQ8ae_GPHgRIR-IDGRCAikC3_zy4JhuYKyU4sR-Co0lcGA70GXxEE1W1CymNiQ';

    $mail = new PHPMailer(TRUE);
  
    try {


        $mail->setFrom($google_email, 'SoukElMedina');
     
        	$mail->addAddress($l);
          //$mail->addAddress($c);
        
        
        $mail->Subject = 'nouvelle livraison';
      $mail->isHTML(TRUE);
        $mail->Body = "Mail : la referance de la commande correspondante  ".$_POST['referance'];
        $mail->isSMTP();
        $mail->Port = 587;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'tls';

        /* Google's SMTP */
        $mail->Host = 'smtp.gmail.com';

        /* Set AuthType to XOAUTH2. */
        $mail->AuthType = 'XOAUTH2';

        /* Create a new OAuth2 provider instance. */
        $provider = new Google(
           [
              'clientId' => $oauth2_clientId,
              'clientSecret' => $oauth2_clientSecret,
           ]
        );

        /* Pass the OAuth provider instance to PHPMailer. */
        $mail->setOAuth(
           new OAuth(
              [
                 'provider' => $provider,
                 'clientId' => $oauth2_clientId,
                 'clientSecret' => $oauth2_clientSecret,
                 'refreshToken' => $oauth2_refreshToken,
                 'userName' => $google_email,
              ]
           )
        );

        /* Finally send the mail. */
        $mail->send();
 


    }
    catch (Exception $e)
    {
        echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
        echo $e->getMessage();
    }
     
		$messagebird= new \MessageBird\Client('yCP1UL3oZnDIwAm8uSevf7d6b');
		$message = new \MessageBird\Objects\Message();
		$message->originator = 'Souk-EM';
      	$message->recipients = (+21654159785);
       	$message->body = 'La commande viens d\'etre confirmer' ;

   		 $messagebird->messages->create($message);

   
 header('Location: ../afficher_livraison.php');
	
}
}
?>