
<?php 
session_start();
ob_start();
$tot=0;
require 'vendor/autoload.php';
$ids= require('paypal.php');
$apicontext = new \PayPal\Rest\apicontext(
   new \PayPal\Auth\OAuthTokenCredential(
   		$ids['id'],
   		$ids['secret']
   )
);
 
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

// ### Payer
// A resource representing a Payer that funds a payment
// For paypal account payments, set payment method
// to 'paypal'.
$payer = new Payer();
$payer->setPaymentMethod("paypal");

// ### Itemized information
// (Optional) Lets you specify item wise
// information
$itemList = new ItemList();
foreach ($_SESSION['panier'] as $key => $row){
$item = new Item();
$item->setName($row['nom'])
    ->setCurrency('USD')
    ->setQuantity($row['quantite'])
    ->setSku($row['reference']) // Similar to `item_number` in Classic API
    ->setPrice($row['prix']);
    $itemList->addItem($item);
    $tot+=($row['quantite']*$row['prix']);

	
}




// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
$details = new Details();
$details->setSubtotal($tot);
 
// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
$amount = new Amount();
$amount->setCurrency("USD")
    ->setTotal($tot)
    ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription("Payment description")
    ->setInvoiceNumber(uniqid())
    ->setCustom($_SESSION['username']);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl("http://project/pay.php")
    ->setCancelUrl("http://project/index.php");
$payment = new Payment();
 $payment->setIntent("sale")
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

 
 
try {
    $payment->create($apicontext);  
      
    echo json_encode([
    	'id' => $payment->getId()]) ;
    
   
    
} catch (PayPal\Exception\PayPalConnectionExeption $ex) {
	var_dump(json_encode($ex->getData()));
 	      exit(1);
}


 ?>
