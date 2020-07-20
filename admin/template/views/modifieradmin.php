<?PHP
include "../config.php";

include "../entities/administrateur.php";
include "../core/administrateurC.php";

if (isset($_POST['nom']) and isset($_POST['telephone']) and isset($_POST['email']) and isset($_POST['motdepasse']) and isset($_POST['xmail'])){
	$target_dir = "assets/images/admin/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
$admin1=new administrateur($_POST['nom'],$_POST['telephone'],$_POST['email'],$_POST['motdepasse'],$target_file);
$administrateur1x=new administrateurC();
$administrateur1x->modifierAdmin($admin1,$_POST['xmail']);
header('Location: ../afficher_admin.php');	
}else{
	echo "verifier les champs";
	var_dump($_POST);
}

?>