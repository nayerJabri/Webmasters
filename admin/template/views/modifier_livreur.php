 <?php 
 	include "../config.php";

 include "../Entities/livreur.php";
include "../Core/livreur_core.php";
$livreurC=new livreur_core();
$livreurC->recuperer_livreur($_POST['identifiant']);

 if(isset($_POST['identifiant']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephone']) and isset($_POST['adresse'])and isset($_POST['adressemail'])and isset($_POST['datenaissance']))
 {

 	if (isset($_POST['modifier'])){
		$livreur=new livreur($_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['datenaissance'],$_POST['adresse'],$_POST['adressemail']);
	$livreurC->modifier_livreur($livreur);
													
header('Location: ../afficher_livreur.php');
												}
 }
 	?>