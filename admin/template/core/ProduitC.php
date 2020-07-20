<?PHP
 class produitC {
	
	function afficherproduit(){
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterproduit($produit){
		$sql="insert into produit (nom,categorie,prix,description,image) values (:nom,:categorie,:prix,:description,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
         
        $nom=$produit->getNom();
        $categorie=$produit->getcategorie();
        $prix=$produit->getprix();
        $description=$produit->getdescription();
        $image=$produit->getimage();
        


		 
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function modifierproduit($produit,$r){
		$sql="update produit set nom=:nom,prix=:prix,description=:description,categorie=:categorie,image=:image where reference=:reference";
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
         $nom=$produit->getNom();
        $categorie=$produit->getcategorie();
        $prix=$produit->getprix();
        $description=$produit->getdescription();
        $image=$produit->getimage();
        


		$req->bindValue(':reference',$r);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
	
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function modifierprix($p,$r){
		$sql="update produit set prix=:p where reference=:r";
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$req->bindValue(':p',$p);
		$req->bindValue(':r',$r);			
        $s=$req->execute();			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

function supprimerproduit($reference){
		$sql="DELETE FROM produit where reference= :reference";
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
	function supprimerproduitcat($reference){
		$sql="DELETE FROM produit where categorie= :reference";
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


function rechercherproduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function trierproduit(){
		$sql="SELECT * from produit order by date ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function stat(){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT COUNT(categorie) as n ,categorie FROM produit GROUP BY categorie ");
        //$q->bindValue(':r', $r);
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
 

}


?>