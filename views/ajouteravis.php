<?php 
    include "../config.php";
    include "../entities/avis.php";
    include "../core/avisc.php";


    if (isset($_POST['nom']) and isset($_POST['email'])  and isset($_POST['review']) and isset($_POST['idproduit']) and isset($_POST['note']))
    {
        $avis1=new avis($_POST['nom'],$_POST['email'],$_POST['review'],$_POST['idproduit'],$_POST['note']);
        $avis1c=new avisc();
        $avis1c->ajouteravis($avis1);
header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "verifier les champs";
        var_dump($_POST);
    }
    
?>