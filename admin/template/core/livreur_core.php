<?PHP
 
class livreur_core {
function afficher_livreur ($livreur){
		echo "Identifiant: ".$livreur->get_identifiant()."<br>";
		echo "Nom: ".$livreur->get_nom()."<br>";
		echo "Prénom: ".$livreur->get_prenom()."<br>";
		echo "Numero de telephone: ".$livreur->get_telephone()."<br>";
		echo "Date de naissance: ".$livreur->get_datenaissance()."<br>";
		echo "Adresse d'd'habitation: ".$livreur->get_adresse()."<br>";
		echo "Adresse mail: ".$livreur->get_adressemail()."<br>";
	}
	function ajouter_livreur($livreur){
		$sql="insert into livreur (identifiant,nom,prenom,telephone,datenaissance,adresse,adressemail) values (:identifiant, :nom,:prenom,:telephone,:datenaissance,:adresse,:adressemail)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $identifiant=$livreur->get_identifiant();
        $nom=$livreur->get_nom();
        $prenom=$livreur->get_prenom();
        $telephone=$livreur->get_telephone();
        $datenaissance=$livreur->get_datenaissance();
        $adresse=$livreur->get_adresse();
        $adressemail=$livreur->get_adressemail();

		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':datenaissance',$datenaissance);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':adressemail',$adressemail);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function trie_id(){
		$sql="SElECT * From livreur ORDER by identifiant";

	$db=config::getConnexion();
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
        $q = $db->prepare("SELECT * FROM livreur where nom LIKE :r ");
        $q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
        return $check;
        }
        else {
            return array();
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function trie_date(){
		$sql="SElECT * From livreur ORDER by datenaissance";

	$db=config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficher_liste_livreur(){
		$sql="SElECT * From livreur";

	$db=config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimer_livreur($identifiant){
		$sql="DELETE FROM livreur where identifiant= :identifiant";

		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':identifiant',$identifiant);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_livreur($livreur){
			$sql="UPDATE livreur SET  nom=:nom,prenom=:prenom,telephone=:telephone,datenaissance=:datenaissance,adresse=:adresse,adressemail=:adressemail WHERE identifiant=:identifiant";

		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$identifiant=$livreur->get_identifiant();
        $nom=$livreur->get_nom();
        $prenom=$livreur->get_prenom();
        $telephone=$livreur->get_telephone();
        $datenaissance=$livreur->get_datenaissance();
        $adresse=$livreur->get_adresse();
        $adressemail=$livreur->get_adressemail();

		$datas = array( ':identifiant'=>$identifiant, ':nom'=>$nom,':prenom'=>$prenom,':telephone'=>$telephone ,':datenaissance'=>$datenaissance,':adresse'=>$adresse,':adressemail'=>$adressemail);
		$req->bindValue(':identifiant',$identifiant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':telephone',$telephone);
			$req->bindValue(':datenaissance',$datenaissance);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':adressemail',$adressemail);
		
            $s=$req->execute();
          
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les infos sont  : " ;
  print_r($datas);
        }
		
	}
	function recuperer_livreur($identifiant){
		$sql="SELECT * from livreur where identifiant=$identifiant";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
  
  function retour_clt(){
		$sql="SElECT * From client inner join commande on client.ID=commande.userid";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
         }
	}  
	function retour_commande(){
		$sql="SElECT * From commande inner join client on commande.userid=client.ID";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
         }
	}  
	}   
?>