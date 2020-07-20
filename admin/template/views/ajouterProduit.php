<?PHP
include '../config.php';
include "../entities/produit.php";
include "../core/ProduitC.php";
 include "../core/newsletterC.php";
require_once '../../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* New aliases. */
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


$client1C=new newsletter();
$cli=$client1C->afficher();
$tab=array_column($cli,'email');
var_dump($cli);



 if ( isset($_POST['nom']) and isset($_POST['categorie']) and isset($_POST['prix']) and isset($_POST['description']) ){
	$target_dir = "assets/images/produit/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
     
      
$produit1=new produit($_POST['nom'],$_POST['categorie'],$_POST['prix'],$_POST['description'],$target_file);
$produit1C=new ProduitC();
$produit1C->ajouterproduit($produit1);






 
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
        for ($i=0; $i < count($tab); $i++) { 
        	$mail->addAddress($tab[$i]);
        }
        
        $mail->Subject = 'Nouvel Arrivage';
      $mail->isHTML(TRUE);
        $mail->Body = "Merci pour votre fidelité ".$_POST['nom'];
        $mail->addAttachment("../".$target_file);         
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
header('Location: ../affproduit.php');

}else{
	echo "verifier les champs";
}

?>