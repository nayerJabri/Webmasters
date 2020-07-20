<?PHP
include "../core/produitC.php";
include "../core/categorieC.php";

include "../config.php";

$categorieC=new categorieC();
$produitC=new produitC();

if (isset($_POST["referencee"])){
	$produitC->supprimerproduitcat($_POST["referencee"]);
	$categorieC->supprimercategorie($_POST["referencee"]);

	header('Location: ../affichercat.php');
}
?>