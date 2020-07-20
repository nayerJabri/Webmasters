<?PHP
include"../config.php";
include "../entities/Produit.php";
include "../core/ProduitC.php";
require_once '../../../vendor/autoload.php';
if (isset($_POST['reference']) && isset($_POST['prix']) && isset($_POST['lastprice']) && isset($_POST['nom'])){
$produit1C=new ProduitC();
$produit1C->modifierprix($_POST['prix'],$_POST['reference']);


$messagebird=new \MessageBird\Client('kDaqH9aPiMG9dF3Hq3ievFMr1');
$message = new \MessageBird\Objects\Message();
$message->originator = 'Souk-EM';
$message->recipients = array(+21698703838);
$pr=intval(100 - (($_POST['prix'] / $_POST['lastprice'] ) * 100 ));
$message->body='Reduction de '.$pr.'% sur le produit : '.$_POST['nom'].' que vous avez ajouté dans votre wishlist';
$messagebird->messages->create($message);
header('Location: ../affproduit.php');	
}else{
	echo "verifier les champs";
}

?>