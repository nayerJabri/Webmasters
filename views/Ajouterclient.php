<?PHP
include "../config.php";
include "../entities/client.php";
include "../core/clientC.php";


if (isset($_POST['ID']) and isset($_POST['Nom'])  and isset($_POST['sexe']) and isset($_POST['Prenom']) and isset($_POST['Telephone']) and isset($_POST['Adresse_Email']) and isset($_POST['Password'])){
$client1=new client($_POST['ID'],$_POST['Nom'],$_POST['Prenom'],$_POST['sexe'],$_POST['Telephone'],$_POST['Adresse_Email'],$_POST['Password']);
$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: ../index.php');

}
?>