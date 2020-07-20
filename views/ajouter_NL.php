<?php 
    session_start();
    require_once '../vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\OAuth;
    use League\OAuth2\Client\Provider\Google;
    include "../config.php";
    include "../core/newsletterC.php";
    if (isset($_POST['email']))
    {
        $produit1c=new newsletter();
        $produit1c->ajouternewsletter($_POST['email']);
        $_SESSION['NW']='1';
        date_default_timezone_set('Etc/UTC');

    /* Information from the XOAUTH2 configuration. */
    $google_email = 'soukelmedina6@gmail.com';
    $oauth2_clientId = '384155578690-pptpl50ianeeikrpbjnboctb8kjfgn2o.apps.googleusercontent.com';
    $oauth2_clientSecret = 'kCA72iatU-t8UGttrqtY_yvL';
    $oauth2_refreshToken = '1//03oISwgoQJQF0CgYIARAAGAMSNwF-L9Ir_pWRugQ8ae_GPHgRIR-IDGRCAikC3_zy4JhuYKyU4sR-Co0lcGA70GXxEE1W1CymNiQ';

    $mail = new PHPMailer(TRUE);
    
    try {


        $mail->setFrom($google_email, 'SoukElMedina');
        $mail->addAddress($_POST['email']);
        $mail->Subject = 'Inscription newsletter';
        $mail->isHTML(TRUE);
        $mail->Body = "Bienvenue dans notre newsletter.Nous vous informerons de toutes nos nouveautés. ";
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
        header('Location: ../index.php');
    }
    else{
        echo "verifier les champs";
        var_dump($_POST);
    }    
?>