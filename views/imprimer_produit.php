<?php 
  include "../config.php"; 

if (isset($_GET['reference'])) {
    include "../core/produitC.php";
   $produit=new produitC();
   $prod=$produit->afficher1($_GET['reference']);
 }

$pdf="<img src='../".$prod['image']."' alt='image description'>";
require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(); 
$mpdf->WriteHTML($pdf);
$x=$mpdf->Output();

 ?>