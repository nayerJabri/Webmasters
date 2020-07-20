<?PHP

class localisationC {

	function ajouterlocalisation($localisation){
		$sql="insert into localisation (description,lat,lng) values (:description,:lat,:lng)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $description=$localisation->getdescription();
        $lat=$localisation->getlat();
        $lng=$localisation->getlng();
        
		$req->bindValue(':description',$description);
		$req->bindValue(':lat',$lat);
		$req->bindValue(':lng',$lng);
	

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherlocalisations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From localisation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	

	function supprimerlocalisation($reference){
		$sql="DELETE FROM localisation where reference= :reference";
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

	function modifierlocalisation($localisation,$r){
		$sql="UPDATE localisation SET description=:description,lat=:lat,lng=:lng  WHERE reference=:r";

		$db = config::getConnexion();
 try{
        $req=$db->prepare($sql);
        $description=$localisation->getdescription();
        $lat=$localisation->getlat();
        $lng=$localisation->getlng();        
		$req->bindValue(':lng',$lng);
		$req->bindValue(':description',$description);
		$req->bindValue(':lat',$lat);
		$req->bindValue(':r',$r);
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}


	

	

}

?>