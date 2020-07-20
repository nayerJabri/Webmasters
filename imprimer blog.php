<?php 
  include_once "config.php"; 
ob_start();
if (isset($_GET['id'])) {
    include "core/blogC.php";
   $blog=new blogC();
   $blogs=$blog->fetchblog($_GET['id']);
 }
ob_clean();
include_once "blog pdf page.php";
$pdf=ob_get_contents();
ob_end_clean();
require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(); 
$mpdf->WriteHTML($pdf);
$x=$mpdf->Output();

 ?>