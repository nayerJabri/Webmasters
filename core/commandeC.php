<?PHP
 class commandeC {	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.reference= a.reference";
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
	
		function afficherstat(){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT IFNULL(SUM(u.total),0) AS total, DATE_FORMAT(merge_date,'%b') AS month, YEAR(m.merge_date) AS year FROM ( SELECT '2020-01-01' AS merge_date UNION SELECT '2020-02-01' AS merge_date UNION SELECT '2020-03-01' AS merge_date UNION SELECT '2020-04-01' AS merge_date UNION SELECT '2020-05-01' AS merge_date UNION SELECT '2020-06-01' AS merge_date UNION SELECT '2020-07-01' AS merge_date UNION SELECT '2020-08-01' AS merge_date UNION SELECT '2020-09-01' AS merge_date UNION SELECT '2020-10-01' AS merge_date UNION SELECT '2020-11-01' AS merge_date UNION SELECT '2020-12-01' AS merge_date ) AS m LEFT JOIN commande u ON MONTH(m.merge_date) = MONTH(u.date) AND YEAR(m.merge_date) = YEAR(u.date) GROUP BY m.merge_date ORDER BY 1+1");
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
     function liste_adresse(){
        $sql="SElECT * From adresse";

    $db=config::getConnexion();
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

