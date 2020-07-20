<?php 
    include "../config.php";
    include "../entities/reclamation.php";
    include "../core/reclamationc.php";


    if (isset($_POST['nom']) and isset($_POST['email'])  and isset($_POST['tel'])  and isset($_POST['objet']) and isset($_POST['message']))
    {
        $reclamation1=new reclamation('',$_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['objet'],$_POST['message'],'','received');
        $reclamation1c=new reclamationc();
        $reclamation1c->ajouterreclamation($reclamation1);
header('Location: ../index.php');
    }else{
        echo "verifier les champs";
        var_dump($_POST);
    }
    
?>