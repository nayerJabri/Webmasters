<?PHP
 class newsletter {	
	
	function ajouternewsletter($email){
		$sql="insert into newsletter (email) values (:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);	 
		$req->bindValue(':email',$email);
        $req->execute();
        $liste=$db->query($sqll);
		return $liste;           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
    } 
    function afficher(){		
        $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM newsletter");
         $q->execute();
        if ($q->rowCount() > 0){
        $tableau = $q->fetchAll(); 
        return $tableau;
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

