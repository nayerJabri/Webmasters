<?php 
 session_start();

include "../config.php"; 
include "../core/produitC.php"; 
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
		$tp=$e['prix'];
		$q='1';
		}
		else
		{
			
			for ($i=0; $i < count($_SESSION['product_ids']) ; $i++) { 
				if ($_SESSION['product_ids'][$i]==$e['reference'] ) {
					$_SESSION['panier'][$i]['quantite']++;
					$q=$_SESSION['panier'][$i]['quantite'];
					$tp=$e['prix']*$q;
					 
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
		$q='1';
		$tp=$e['prix'];
	}

    
}
 
 echo json_encode([
'total' => $_SESSION['total'],
'q' => $q,
'ref' => $_GET['reference'],
'tp' => $tp
 ]); 
}
?> 