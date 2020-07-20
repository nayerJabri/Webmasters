<?PHP

class commandeC {	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join panier a on e.reference= a.reference";
		$sql="select * from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajoutercommande($commande){
		$sql="insert into commande (userid,total,etat) values (:userid,:total,:etat)";
		$sqll="SELECT LAST_INSERT_ID() as i";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $total=$commande->gettotal();
        $etat=$commande->getetat();
        $userid=$commande->getuserid();



		 
		$req->bindValue(':total',$total);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':userid',$userid);
		
		
            $req->execute();
            $liste=$db->query($sqll);
			return $liste;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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
    function modifierx($reference){
        $sql="UPDATE commande SET etat='non payée' where reference= :reference";
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
        function supprimer($reference){
        $sql="DELETE from commande  where reference= :reference";
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
	function modifiertotal($reference,$x){
		$sql="UPDATE commande SET total=:x where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':x',$x);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherstat($x){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT IFNULL(SUM(u.total),0) AS total, DATE_FORMAT(merge_date,'%b') AS month, YEAR(m.merge_date) AS year FROM ( SELECT '$x-01-01' AS merge_date UNION SELECT '$x-02-01' AS merge_date UNION SELECT '$x-03-01' AS merge_date UNION SELECT '$x-04-01' AS merge_date UNION SELECT '$x-05-01' AS merge_date UNION SELECT '$x-06-01' AS merge_date UNION SELECT '$x-07-01' AS merge_date UNION SELECT '$x-08-01' AS merge_date UNION SELECT '$x-09-01' AS merge_date UNION SELECT '$x-10-01' AS merge_date UNION SELECT '$x-11-01' AS merge_date UNION SELECT '$x-12-01' AS merge_date ) AS m LEFT JOIN commande u ON MONTH(m.merge_date) = MONTH(u.date) AND YEAR(m.merge_date) = YEAR(u.date) GROUP BY m.merge_date ORDER BY MONTH(m.merge_date)");
        //$q->bindValue(':r', $r);
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
    function total($x){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT IFNULL(SUM(total),0) as total from commande where YEAR(date) = :x ");
        $q->bindValue(':x', $x);
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
     function nbcommande($x){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT IFNULL(count(*),0) as nb from commande where YEAR(date) = :x ");
        $q->bindValue(':x', $x);
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
}
?>

