<?PHP

class categorieC {

	
	function ajoutercategorie($categorie){
		$sql="insert into categorie (nomcat,referencee) values (:nomcat, :referencee)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		  $referencee=$categorie->getreferencee();
        $nomcat=$categorie->getnom();
      
        $req->bindValue(':referencee',$referencee);
		$req->bindValue(':nomcat',$nomcat);
		
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercategories(){
		
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($referencee){
		$sql="DELETE FROM categorie where referencee=:referencee";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referencee',$referencee);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie){
		$sql="update categorie set nomcat=:nomcat where referencee=:referencee";
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$referencee=$categorie->getreferencee();
        $nomcat=$categorie->getNom();
       


		$req->bindValue(':referencee',$referencee);
		$req->bindValue(':nomcat',$nomcat);
		
            $s=$req->execute();
		
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	
	
	
	function rechercherListecategories($referencee){
		$sql="SELECT * from categorie where referencee=$referencee";
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