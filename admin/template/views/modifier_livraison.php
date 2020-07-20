<?php 
 	include "../config.php";
 include "../Entities/livraison.php";
include "../Core/livraison_core.php";
 if (isset($_POST['referance']) and isset($_POST['client']) and isset($_POST['livreur']) and isset($_POST['date']) and isset($_POST['adresselivraison'])){
$livraison= new livraison($_POST['referance'],$_POST['client'],$_POST['livreur'],$_POST['date'],$_POST['adresselivraison']);
			$livraisonC=new livraison_core();
$livraisonC->modifier_livraison($livraison);
 header('Location: ../afficher_livraison.php');
}
 ?>