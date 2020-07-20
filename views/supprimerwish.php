<?php 

 session_start();
include "../config.php"; 
include "../core/wishlistC.php"; 
$wishlist=new wishlistC();


if (isset($_GET['reference'])){
	$wishlist->supprimerwishlist($_GET['reference'],$_SESSION['username']);
	header('Location: ../wishlist.php');
}
 ?>
