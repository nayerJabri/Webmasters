<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../config.php";


if (isset($_POST['referencee']) and isset($_POST['nomcat'])){
$categorie1=new  categorie($_POST['referencee'],$_POST['nomcat']);
$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: ../affichercat.php');	
}else{
	echo "verifier les champs";
}

?>