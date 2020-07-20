<?PHP
 include "../../../config.php";
 include "../../../entities/client.php";
 include "../../../core/clientc.php";

    $clientc=new clientc();
    if (isset($_POST["ID"])){
	$clientc->supprimerwishlist($_POST["ID"]);
    $clientc->supprimer_client($_POST["ID"]);
	header('Location: ../afficher_clients.php');
}

?>