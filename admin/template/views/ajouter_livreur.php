<?PHP
	include "../config.php";

include "../Entities/livreur.php";
include "../Core/livreur_core.php";

if (isset($_POST['identifiant']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephone']) and isset($_POST['adresse'])and isset($_POST['adressemail'])and isset($_POST['datenaissance'])){
$livreur=new livreur($_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['datenaissance'],$_POST['adresse'],$_POST['adressemail']);
$livreurC=new livreur_core();
$livreurC->ajouter_livreur($livreur);

header('Location: ../afficher_livreur.php');

}
?>