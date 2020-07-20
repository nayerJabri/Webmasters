<?PHP
  class panierC {	
	

	function afficherpanier($x){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SElECT *,c.reference as id From ligne_commande a inner join produit p on a.IDproduit= p.reference inner join commande c on a.IDcommande=c.reference where c.reference = :x ");
        $q->bindValue(':x', $x);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return array() ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function ajouterpanier($panier){
		$sql="insert into ligne_commande (IDproduit,quantite,IDcommande) values (:idproduit,:quantite,:idcommande)";
		 

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $idproduit=$panier->getidproduit();
        $quantite=$panier->getquantite();
        $idcommande=$panier->getidcommande();



		 
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idcommande',$idcommande);
		
		
            $req->execute();
     
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerpanier($reference){
		$sql="DELETE FROM ligne_commande where IDcommande= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>

