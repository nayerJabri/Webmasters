<?PHP
include"../config.php";
include "../entities/Produit.php";
include "../core/ProduitC.php";
 
if (isset($_POST['reference']) && isset($_POST['nom']) && isset($_POST['categorie']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['image'])){
$produit1=new Produit($_POST['nom'],$_POST['categorie'],$_POST['prix'],$_POST['description'],$_POST['image']);
$produit1C=new ProduitC();
$produit1C->modifierproduit($produit1,$_POST['reference']);
 header('Location: ../affproduit.php');	
}else{
	echo "verifier les champs";
}

?>