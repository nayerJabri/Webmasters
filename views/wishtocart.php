<?php 
 session_start();

include "../config.php"; 
include "../core/produitC.php"; 
include "../core/wishlistC.php"; 
$wishlist=new wishlistC();
$produit=new produitC();


if (isset($_GET['reference'])) {
	$prod=$produit->afficherreference($_GET['reference']);
    foreach ($prod as $e) { 	
	if(isset($_SESSION['panier']))
	{
		$_SESSION['total']++;
		$count=count($_SESSION['panier']);        
		$_SESSION['product_ids'] = array_column($_SESSION['panier'],'reference');
		
		if (!in_array($e['reference'],$_SESSION['product_ids'] )) {
            

			$_SESSION['panier'][$count]= array
		(
			'reference' => $e['reference'],
			'nom' => $e['nom'],
			'prix' => $e['prix'],
			'image' => $e['image'],	
			'quantite' => 1 
			 
		);
		}
		else
		{
			
			for ($i=0; $i < count($_SESSION['product_ids']) ; $i++) { 
				if ($_SESSION['product_ids'][$i]==$e['reference'] ) {
					$_SESSION['panier'][$i]['quantite']++;
					 
				}
			}
			

		}
			
	}	 
	
	else
	{
		$_SESSION['total']=1; 
		$_SESSION['panier'][0]= array
		(
			'reference' => $e['reference'],	
			'nom' => $e['nom'],
			'prix' => $e['prix'],
			'image' => $e['image'],	
			'quantite' => 1
			 
		);
	}

    
}
$wishlist->supprimerwishlist($_GET['reference'],$_SESSION['username']);
header('Location: ../order-shopping-cart.php');
 

}
?>.php