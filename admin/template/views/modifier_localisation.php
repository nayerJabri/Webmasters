<?PHP
include "../entities/localisation.php";
include "../core/localisationC.php";
include "../config.php";

 
if (isset($_POST['reference']) && isset($_POST['description']) && isset($_POST['lat']) && isset($_POST['lng'])){
$localisation1=new localisation($_POST['description'],$_POST['lat'],$_POST['lng']);
$localisation1C=new localisationC();
$localisation1C->modifierlocalisation($localisation1,$_POST['reference']);
 header('Location: ../afficher_localisation.php');	
}else{
	echo "verifier les champs";
}

?>