<?php 
session_start();
$type='refresh';
$new=0;
  if (isset($_GET['reference'])) {
 	if(isset($_SESSION['panier']) and ($_SESSION['panier'] > 0))
	{  
		$_SESSION['total']--;
		$count=count($_SESSION['panier']);        
		$_SESSION['product_ids'] = array_column($_SESSION['panier'],'reference');
			foreach ($_SESSION['panier'] as $key => $row){
			    
				if ($row['reference']==$_GET['reference'] ) {
					 
					if ($row['quantite']==1) {
						 
						   
						    unset($_SESSION['panier'][$key]);
						    $_SESSION['panier'] = array_values($_SESSION['panier']);
						    $tp=0;
					}
					else
					{
						 
						$_SESSION['panier'][$key]['quantite']--;
						$new=$_SESSION['panier'][$key]['quantite'];
						 $tp=$new*$row['prix'];
						$type='yup';
					}										 
				}
			}
		}

 		echo json_encode([
 			'type' => $type,
 			'q' => $new,
 			'total' => $_SESSION['total'],
			'ref' => $_GET['reference'],
			'tp' => $tp
 		]);

  
}
 ?>