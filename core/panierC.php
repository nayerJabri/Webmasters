<?PHP
 class panierC {	
	function afficherpanier(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.reference= a.reference";
		$sql="select * from ligne_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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
}
?>

