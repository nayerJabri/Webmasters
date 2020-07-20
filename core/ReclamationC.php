<?PHP


		// include "C:\wamp64\www\Project (reclamation)\Project/config.php";
 class ReclamationC {

	function ajouterReclamation($Reclamation){
		$sql="insert into reclamation (id,nom,telephone,email,objet,message,date,type) values (:id,:nom,:tel,:email,:objet,:message,:date,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Reclamation->getid();
        $nom=$Reclamation->getNom();
        $tel=$Reclamation->gettel();
        $email=$Reclamation->getemail();
        $message=$Reclamation->getmessage();
        $objet=$Reclamation->getobjet();
		$type=$Reclamation->gettype();
		$date=$Reclamation->getdate();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':date',date('yy-m-d'));
		$req->bindValue(':objet',$objet);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($nom){
		$sql="DELETE FROM Reclamation where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function nombredeligne(){
		$sql ="select count(*) as nb from reclamation";
		$db = config::getConnexion();
		try{
			$res = $db->query($sql);
			$date=$res->fetch();
			$nb=$date['nb'];
			return $nb;
		}catch (Exception $e)
		{
			die ('Erreur :' .$e->getMessage());
		}	
	}


	function recherche($r){
		$db = config::getConnexion();
		try{
			$q = $db->prepare("SELECT * FROM reclamation WHERE objet LIKE CONCAT( '%',:r, '%') OR nom LIKE CONCAT( '%',:r, '%') OR email LIKE CONCAT( '%',:r, '%') OR date LIKE CONCAT( '%',:r, '%')");
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

	function afficherid ($id)
	{
		$sql="SElECT * From reclamation where id=$id";
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