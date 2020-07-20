<?PHP
class AdministrateurC {
function afficherAdmin ($admin){
		echo "Nom: ".$admin->getName()."<br>";
		echo "Numero de telephone: ".$admin->getTel()."<br>";
		echo "Email: ".$admin->getEmail()."<br>";
		echo "Mot de passe: ".$admin->getPass()."<br>";
	}
	function ajouterAdmin($admin){
		$sql="insert into administrateur (nom,telephone,email,photop,motdepasse) values (:nom,:telephone,:email,:photop,:motdepasse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$admin->getName();
        $tel=$admin->getTel();
        $email=$admin->getEmail();
        $pass=$admin->getPass();
        $photop=$admin->getphotop();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':telephone',$tel);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$pass);
        $req->bindValue(':photop',$photop);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
    function livreur($email){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * from administrateur a inner join livreur l  on a.email = l.adressemail where a.email=:email");
        $q->bindValue(':email', $email);

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
     function afficheruser($username){
         $db = config::getConnexion();
        try{
        $q = $db->prepare("SELECT * FROM administrateur where email= :username");
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

	function afficherAdmins(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From administrateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerAdmin($email){
		$sql="DELETE FROM administrateur where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierAdmin($admin,$email){
		$sql="UPDATE administrateur SET nom=:nom,telephone=:telephone,email=:emaill,photop=:photop,motdepasse=:pass WHERE email=:email";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $nom=$admin->getName();
        $tel=$admin->getTel();
        $photop=$admin->getphotop();
        $emaill=$admin->getEmail();
        $pass=$admin->getPass();
		$datas = array(':emaill'=>$emaill, ':nom'=>$nom,':telephone'=>$tel,':email'=>$email,':pass'=>$pass);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':telephone',$tel);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':email',$email);
		$req->bindValue(':pass',$pass);
        $req->bindValue(':photop',$photop);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}

	

	function rechercherDouble($mail){
		$sql="SELECT count(*) FROM administrateur WHERE email = :email";
		$db = config::getConnexion();
		try{
		$req_prep=$db->query($sql);
        $req_prep->execute(array(0=>$mail));
        $resultat = $req_prep->fetchColumn();
		return $req_prep;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficheAdpp(){
		$sql="SELECT COUNT(*) as nadmin FROM administrateur";
		$db = config::getConnexion();
		try{
            $liste=$db->query($sql);
            $donnees = $liste->fetch();
            $liste->closeCursor();
            $_SESSION['nadmin']=$donnees['nadmin'];
            //echo "<p style='color:white;'>".$donnees['nbabonne']."</p>";
            $_SESSION['perpage'] = 10 ;
            $_SESSION['nbpage']=ceil($_SESSION['nadmin']/$_SESSION['perpage']);
            if(isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $_SESSION['nbpage'] )
            {
                $_SESSION['cPage'] = $_GET['p'];
                $_SESSION['nbpage']=ceil(($_SESSION['nadmin']/$_SESSION['perpage'])/7)+$_GET['p'];
            }
            else
            {
                $_SESSION['cPage'] = 1;
            }
            if($_SESSION['nbpage'] > ceil($_SESSION['nadmin']/$_SESSION['perpage']))
            {
                $_SESSION['nbpage'] = ceil($_SESSION['nadmin']/$_SESSION['perpage']);
            }


            $sql="SELECT *  FROM administrateur ORDER BY email ASC LIMIT ".(($_SESSION['cPage']-1)*$_SESSION['perpage']).",".$_SESSION['perpage']."";
            $db = config::getConnexion();
            try{
                $liste=$db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifPhotpAdmin($img,$email){
		$sql="UPDATE administrateur SET photop=:photop WHERE email=:email";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$req->bindValue(':photop',$img);
		$req->bindValue(':email',$email);

            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
        }

	}

}

?>