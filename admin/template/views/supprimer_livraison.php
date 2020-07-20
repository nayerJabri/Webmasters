<?PHP
		
	include "../config.php";

include "../Entities/livraison.php";
include "../Core/livraison_core.php";
$livraisonC=new livraison_core();
if (isset($_POST["referance"])){
	echo 'zzzzz';
	?>
<script type="text/javascript">
var r = confirm("Etes-vous sur de supprimer la livraion!");
if (r == true) {
<?php 			

$livraisonC->supprimer_livraison($_POST["referance"]);

?>
window.location.href="../afficher_livraison.php"
} else {
  alert("erreur!");
  window.location.href="../afficher_livraison.php"


}
 
</script>
 
<?php

}

?>