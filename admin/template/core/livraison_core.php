<?PHP
 
class livraison_core {

	function ajouter_livraison($livraison){
		$sql="insert into livraison (referance,client,livreur,date,adresselivraison) values (:referance,:client,:livreur,:date,:adresselivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$referance=$livraison->get_referance();
        $livreur=$livraison->get_livreur();
        $client=$livraison->get_client();
  		$date=$livraison->get_date();
  		$adresselivraison=$livraison->get_adresselivraison();
		$req->bindValue(':referance',$referance);
		$req->bindValue(':livreur',$livreur);
		$req->bindValue(':client',$client);	
		$req->bindValue(':date',$date);		
		$req->bindValue(':adresselivraison',$adresselivraison);		
		$req->execute();
		    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	 function retour_client(){
		$sql="SElECT * From livraison";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
         }
	}
	 function client($c){
		$sql="SElECT userid From client inner join commande on client.ID=commande.userid where commande.reference=$c ";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
         }
	}
	function retour_livraison(){
		$sql="SElECT * From livraison inner join livreur on livreur.identifiant=livraison.livreur";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function rechercher($r){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM livraison where client LIKE :r ");
        $q->bindValue(':r', $r);
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
	
	function trie_refrence(){
		$sql="SElECT * From livraison inner join livreur on livreur.identifiant=livraison.livreur ORDER by referance";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trie_id(){
		$sql="SElECT * From livraison inner join livreur on livreur.identifiant=livraison.livreur ORDER by client";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trie_date(){
		$sql="SElECT * From livraison inner join livreur on livreur.identifiant=livraison.livreur ORDER by date";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}function trie_livreur(){
		$sql="SElECT * From livraison inner join livreur on livreur.identifiant=livraison.livreur ORDER by livreur";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer_livraison($referance){
		$sql="DELETE FROM livraison where referance= :referance";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referance',$referance);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recuperer_livraison($referance){
		$sql="SELECT * from livraison where referance=$referance";

		$db = config::getConnexion();
		try{
		$livraison=$db->query($sql);
		return $livraison;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function affichage_livreur($email){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SElECT * From commande inner join livraison on commande.reference=livraison.referance INNER JOIN livreur on livreur.identifiant = livraison.livreur where livreur.adressemail LIKE :email  ");
        $q->bindValue(':email', $email);
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
	
	function stat(){
		$db = config::getConnexion();
	   try{
	   $q = $db->prepare("select count(*) as nombre , l.nom  from livreur l inner join livraison n on l.identifiant = n.livreur GROUP by l.identifiant");
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

    function modifier($reference){
		$sql="UPDATE commande SET etat='payée' where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
            
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_livraison($livraison){
		


		$sql="UPDATE livraison SET  livreur=:livreur,client=:client,date=:date,adresselivraison=:adresselivraison WHERE referance=:referance";

		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$referance=$livraison->get_referance();
        $livreur=$livraison->get_livreur();
        $client=$livraison->get_client();
        $date=$livraison->get_date();
        $adresselivraison=$livraison->get_adresselivraison();
		$datas = array( ':referance'=>$referance, ':livreur'=>$livreur,':client'=>$client,':date'=>$date,':adresselivraison'=>$adresselivraison);
		$req->bindValue(':referance',$referance);
		$req->bindValue(':livreur',$livreur);
		$req->bindValue(':client',$client);
		$req->bindValue(':date',$date);
		$req->bindValue(':adresselivraison',$adresselivraison);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}

?>