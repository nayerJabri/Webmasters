<?PHP
 class produitC {	
	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
		$sql="select * from produit LIMIT 10";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function affichagemezyen($pos,$n){
        //$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
        $sql="SELECT * FROM produit ORDER BY reference LIMIT $pos,$n";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function recent(){
        //$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
        $sql="select * from produit order by date  desc LIMIT 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
        function top(){
        //$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
        $sql="select * from produit pr inner join ( select IDproduit,sum(quantite) as quantite from ligne_commande pa group by IDproduit ) as m on pr.reference=m.IDproduit LIMIT 10  ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    
	function afficherreference($ref){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.reference= a.reference";
		$sql="select * from produit where reference = $ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficher1($r){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM produit where reference= :r");
        $q->bindValue(':r', $r);
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
    function affichagecat($r){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM produit p inner join categorie c on p.categorie=c.referencee where c.referencee=:r");
        $q->bindValue(':r', $r);
        $q->execute();
        if ($q->rowCount() > 0){
        $check = $q->fetchAll(); 
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
        function recherche($r,$pos,$n){
        $db = config::getConnexion();
        try{
            $q = $db->prepare("SELECT * FROM produit  WHERE nom LIKE CONCAT( '%',:r, '%') OR categorie LIKE CONCAT( '%',:r, '%') ORDER BY reference LIMIT $pos,$n ");
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
}
?>

