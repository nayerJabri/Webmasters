<?PHP
//include "../config.php";
class ClientC {
    function ajouterClient($client){
		$sql="insert into client (Id,nom,prenom,sexe,telephone,adresse_email,Password) values (:id, :nom,:prenom,:sexe,:telephone,:adresse_email,:Password)";
		$db = config::getConnexion();
		try{
      
        $req=$db->prepare($sql);
		
        $id=$client->get_id();
        $nom=$client->get_Nom();
        $prenom=$client->get_Prenom();
        $telephone=$client->get_telephone();
        $adresse_email=$client->get_adresse_email();
        $Password=$client->get_Password();
        $sexe=$client->get_sexe();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':telephone',$telephone);
        $req->bindValue(':adresse_email',$adresse_email);
        $req->bindValue(':Password',$Password);
		
            $req->execute();
             
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherclient(){
		
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimer_client($ID){
		$sql="DELETE FROM client where ID= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function nombredeligne(){
		$sql ="select count(*) as nb from client";
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
			$q = $db->prepare("SELECT * FROM client WHERE ID LIKE CONCAT( '%',:r, '%') OR Nom LIKE CONCAT( '%',:r, '%') OR Adresse_Email LIKE CONCAT( '%',:r, '%') OR telephone LIKE CONCAT( '%',:r, '%')");
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

    function afficheruser($username){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM client where ID= :username");
        $q->bindValue(':username', $username);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetch(PDO::FETCH_ASSOC); 
        return $check;
        }
        else {
            return null ;
        }
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function moyenneh ($ID){
        $homme="homme";
        $sql = "SELECT  count(*) as nh from client where sexe=$homme AND ID=$ID";
        $db = config::getConnexion();
        try{
            $res=$db->query($sql);
            $date=$res->fetch();
            $nh =$date['nh'];
            return $nh;
        }catch(Exception $e){
            die ('Erreur :' .$e->getMessage());
        }
    }
     
    
}