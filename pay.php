<?php 
session_start();
require 'vendor/autoload.php';
$ids= require('paypal.php');
$apicontext = new \PayPal\Rest\apicontext(
   new \PayPal\Auth\OAuthTokenCredential(
   		$ids['id'],
   		$ids['secret']
   )
);

$payment= PayPal\Api\Payment::get($_POST['paymentID'],$apicontext);
$execution= (new PayPal\Api\PaymentExecution())
		->setPayerId($_POST['payerID'])
		->setTransactions($payment->getTransactions());
try {
    
   $payment->execute($execution,$apicontext);
   echo json_encode([
   	'id'=> $payment->getId()
      
   ]);
      






    
} catch (PayPal\Exception\PayPalConnectionExeption $ex) {
	header('internal server error',true,500);
	var_dump(json_encode($ex->getData()));
 	      exit(1);
}
if($payment->state == "approved") {

include "config.php"; 
include "entities/commande.php";
include "core/commandeC.php";
include "entities/panier.php";
include "core/panierC.php";
 
$commande1=new commande($_SESSION['username'],$_SESSION['tot'],'payée');
$commande1C=new commandeC();
$x=$commande1C->ajoutercommande($commande1);
$_SESSION['product_ids'] = array_column($_SESSION['panier'],'reference');
foreach($x as $row) {$p= $row['i'];}


$n=count($_SESSION['product_ids']);

for ($i=0; $i < $n ; $i++) { 
   $panier1=new panier($p,$_SESSION['panier'][$i]['quantite'],$_SESSION['panier'][$i]['reference']);
   $panier1C=new panierC();    
   $panier1C->ajouterpanier($panier1); }
   unset($_SESSION['tot']);
  unset($_SESSION['panier']);
      unset($_SESSION['total']);
      $messagebird= new \MessageBird\Client('zE1RQwusnSj1FEqabCPks1H8n');
      $message = new \MessageBird\Objects\Message();
      $message->originator = 'Souk-EM';
$message->recipients = array(+21651816719);      $message->body='Merci pour votre achat';
      $messagebird->messages->create($message);
}

 ?>