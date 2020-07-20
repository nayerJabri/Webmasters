
<?php
session_start();
 /******* pdf ******/
require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$stylesheet = file_get_contents('assets/css/pdf.css'); // external css
$mpdf->WriteHTML($stylesheet,1);

$mpdf->WriteHTML($_SESSION['pdf'],2);
$x=$mpdf->Output('yes0.pdf','S');
//$mpdf->Output();
/*******/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* New aliases. */
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;




 
    /* If you installed league/oauth2-google in a different directory, include its autoloader.php file as well. */
    // require 'C:\xampp\league-oauth2\vendor\autoload.php';

    /* Set the script time zone to UTC. */
    date_default_timezone_set('Etc/UTC');

    /* Information from the XOAUTH2 configuration. */
    $google_email = 'soukelmedina6@gmail.com';
    $oauth2_clientId = '384155578690-pptpl50ianeeikrpbjnboctb8kjfgn2o.apps.googleusercontent.com';
    $oauth2_clientSecret = 'kCA72iatU-t8UGttrqtY_yvL';
    $oauth2_refreshToken = '1//03oISwgoQJQF0CgYIARAAGAMSNwF-L9Ir_pWRugQ8ae_GPHgRIR-IDGRCAikC3_zy4JhuYKyU4sR-Co0lcGA70GXxEE1W1CymNiQ';

    $mail = new PHPMailer(TRUE);
    
    try {


        $mail->setFrom($google_email, 'SoukElMedina');
        $mail->addAddress($_SESSION['email'], $_SESSION['username']);
        $mail->Subject = 'BON DE COMMANDE';
      $mail->isHTML(TRUE);
        $mail->Body = "Merci pour votre confiance";
        $mail->addStringAttachment($x, 'commande.pdf');         
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


//var_dump($_SESSION['email']);
header('Location: index.php'); 



?>