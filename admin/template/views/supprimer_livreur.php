<?PHP
	include "../config.php";

include "../Entities/livreur.php";
include "../Core/livreur_core.php";
$livreurC=new livreur_core();
if (isset($_POST["identifiant"])){
	?>
<script type="text/javascript">
var r = confirm("Etes-vous sur de supprimer le livreur!");
if (r == true) {
<?php $livreurC->supprimer_livreur($_POST["identifiant"]); 
?>
window.location.href="../afficher_livreur.php"
} else {
  alert("erreur!");
  window.location.href="../afficher_livreur.php"


}
 
</script>
 
<?php
  //eader('Location: ../afficher_livreur.php');

}
else
{
	var_dump($_POST);
}

?>