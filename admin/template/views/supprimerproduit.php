<?PHP
include "../core/produitC.php";
include "../config.php";
$produitC=new produitC();
if (isset($_POST["reference"])){
	$produitC->supprimerproduit($_POST["reference"]);
	header('Location: ../affproduit.php');
}

?>