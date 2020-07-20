<?PHP
 include "../../../config.php";
 include "../../../entities/Reclamation.php";
 include "../../../core/ReclamationC.php";

    $reclamationc=new reclamationc();
    if (isset($_POST["nom"])){
	$reclamationc->supprimerReclamation($_POST["nom"]);
	header('Location: ../inbox.php');
}

?>