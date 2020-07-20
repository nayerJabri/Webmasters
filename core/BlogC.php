<?PHP
class blogC {
	function searchBlog($keywords){
		$sql="SELECT * FROM blog where titre LIKE %{$keywords}% or text LIKE %{$keywords}%";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
				catch (Exception $e){
						die('Erreur: '.$e->getMessage());
				}	
	} 
	function selectAll(){
		$sql="SELECT * From blog";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
				catch (Exception $e){
						die('Erreur: '.$e->getMessage());
				}	
	}
	function fetchblog($id){
		$sql="SELECT * from blog where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function ajouterblog($blog){
		$sql="INSERT INTO blog (titre,author,category,postdate,picture,text) VALUES (:titre, :author,:category,:postdate,:picture,:text)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$blog->gettitre();
        $author=$blog->getauthor();
				$category=$blog->getcategory();
				$postdate=$blog->getpostdate();
        $picture=$blog->getpicture();
        $text=$blog->gettext();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':author',$author);
		$req->bindValue(':category',$category);
		$req->bindValue(':postdate',$postdate);
		$req->bindValue(':picture',$picture);
		$req->bindValue(':text',$text);
		
		$req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherblog(){
		//$sql="SElECT * From blog e inner join formationphp.blog a on e.titre= a.titre";
		$sql="SElECT * From blog";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerblog($id){
		$sql="DELETE FROM blog where id= :id";
		$db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':id',$id);
		try{
			$e=$req->execute();
           header('Location: blog pages.php');
        } 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierblog($blog,$id){
		$sql="UPDATE blog SET titre=:titre, author=:author,category=:category,postdate=:postdate, picture=:picture,text=:text WHERE id=:id"; 
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
				$titre=$blog->gettitre();
        $author=$blog->getauthor();
				$category=$blog->getcategory();
				$postdate=$blog->getpostdate();
				$picture=$blog->getpicture();
        $text=$blog->gettext();
				$datas = array(':id'=>$id, ':titre'=>$titre, ':author'=>$author,':category'=>$category, ':postdate'=>$postdate,':picture'=>$picture,':text'=>$text);
				$req->bindValue(':id',$id);
				$req->bindValue(':titre',$titre);
				$req->bindValue(':author',$author);
				$req->bindValue(':category',$category);
				$req->bindValue(':postdate',$postdate);
				$req->bindValue(':picture',$picture);
				$req->bindValue(':text',$text);
		
		
		$e=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
}

?>