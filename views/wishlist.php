<?php
	session_start();
	include "../config.php";
    include "../entities/wishlist.php";
    include "../core/wishlistC.php";


    if (isset($_GET['id']))
    {
        $wishlist1c=new wishlistc();

        $retour=$wishlist1c->rechercherproduit($_GET['id'],$_SESSION['username']);
        if(isset($retour))
        {
          	$wishlist1c->supprimerwishlist($_GET['id'],$_SESSION['username']);
          	echo json_encode([
        			'reference' => ('#'.$_GET['pos'].$_GET['id']),
					'type' => 'supression'
                    
  			]); 
        }
        else
        {
        	$wishlist1=new wishlist($_SESSION['username'],$_GET['id']);
       		 $wishlist1c->ajouterwishlist($wishlist1);          
        	echo json_encode([
        			'reference' => ('#'.$_GET['pos'].$_GET['id']),
					'type' => 'ajout'
                    
 	]); 
        }
        
 	}


 	else{
	      //header('Location: ../index.php');  
    }







    ?>