<?PHP
 class wishlistC {	
	function afficherwish($r){
 		 
		 $db = config::getConnexion();
        try{
        $q = $db->prepare("select * from wishlist w inner join produit p on w.productid=p.reference where userid = :r");
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
    function afficherwishlists(){
         
         $db = config::getConnexion();
        try{
        $q = $db->prepare("select *, COUNT(w.productid)as nombre from wishlist w inner join produit p on w.productid=p.reference GROUP BY w.productid");
       //supprimer $q->bindValue(':r', $r);
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
function afficherid(){
 		 
		 $db = config::getConnexion();
        try{
        $q = $db->prepare("select productid as id from wishlist");
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
	function ajouterwishlist($wishlist){
		$sql="insert into wishlist (userid,productid) values (:userid,:productid)";		 
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);		        
         
        $userid=$wishlist->getuserid();
        $productid=$wishlist->getproductid();		 
		 
		$req->bindValue(':userid',$userid);
		$req->bindValue(':productid',$productid);				
            $req->execute();                
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerwishlist($id,$user){
		$sql="DELETE FROM wishlist where productid= :id and userid = :user";
		$db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':id',$id);
                $req->bindValue(':user',$user);
		try{
			$e=$req->execute();
            
        } 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function supprimer($id){
        $sql="DELETE FROM wishlist where productid= :id ";
        $db = config::getConnexion();
                $req=$db->prepare($sql);
                $req->bindValue(':id',$id);
         try{
            $e=$req->execute();
            
        } 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function rechercherproduit($r){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM wishlist where productid= :r");
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
}
?>