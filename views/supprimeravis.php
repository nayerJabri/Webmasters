<?PHP
include "../config.php";
 include "../entities/avis.php";
 include "../core/avisc.php";

    $avisc=new avisc();
    if (isset($_POST["id"])){
	$avisc->supprimeravis($_POST["id"]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>