<?PHP
include "../config.php";

include "../entities/localisation.php";
include "../core/localisationC.php";

if (isset($_POST['description']) and isset($_POST['lat']) and isset($_POST['lng'])   ){
$localisation1=new localisation($_POST['description'],$_POST['lat'],$_POST['lng'],$_POST['motdepasse']);
$localisation1x=new localisationC();
$localisation1x->ajouterlocalisation($localisation1);
header('Location: ../afficher_localisation.php');	
}else{
	echo "verifier les champs";
	var_dump($_POST);
}

?>