
 <?php

    class avisc{
        function ajouteravis($avis)
        {

            $sql="INSERT INTO avis (id,idproduit,nom,email,review,datea,note) VALUES (:id,:idproduit,:nom,:email,:review,:datea,:note)";

            $db = config::getConnexion();
            try
            {
                $req=$db->prepare($sql);
                $id=$avis->get_id();
                $nom=$avis->get_nom();
                $email=$avis->get_email();
                $review=$avis->get_review();
                $idproduit=$avis->get_idproduit();
                $note=$avis->get_note();
                $req->bindValue(':id',$id);
                $req->bindValue(':nom',$nom);
                $req->bindValue(':email',$email);
                $req->bindValue(':review',$review);
                $req->bindValue(':idproduit',$idproduit);
                $req->bindValue(':datea',date('yy-m-d'));
                $req->bindValue(':note',$note);

                $req->execute();
           
            }
            catch (Exception $e)
            {
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function afficheravis($x){

            $sql="select * from avis where idproduit=$x";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }


        function supprimeravis($id){
            $sql="DELETE FROM avis where id= :id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            try{
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function modifieravis($avis,$id)
        {
            $sql="update avis set nom=:nom,email=:email,review=:review,datea=:d,note=:note where id=:id";
            $db = config::getConnexion();
            try
            {       
                $req=$db->prepare($sql);
                $nom=$avis->get_nom();
                $email=$avis->get_email();
                $review=$avis->get_review();
                $note=$avis->get_note();
                $req->bindValue(':id',$id);
                $req->bindValue(':nom',$nom);
                $req->bindValue(':email',$email);
                $req->bindValue(':review',$review);
                $req->bindValue(':note',$note);

                $req->bindValue(':d',date('yy-m-d'));
                $s=$req->execute();
                
               // header('Location: index.php');
            }
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
            
        }

        function recupereravis($id){
            $sql="SELECT * from avis where id=$id";
            $db = config::getConnexion();
            try
            {
                $liste=$db->query($sql);
                return $liste;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }
        function moyenne5 ($reference){
            $sql = "SELECT  count(*) as nb5 from avis where note=5 AND idproduit=$reference";
            $db = config::getConnexion();
            try{
                $res=$db->query($sql);
                $date=$res->fetch();
                $nb5 =$date['nb5'];
                return $nb5;
            }catch(Exception $e){
                die ('Erreur :' .$e->getMessage());
            }
        }
        function moyenne4 ($reference){
            $sql = "SELECT  count(*) as nb4 from avis where note=4 AND idproduit=$reference";
            $db = config::getConnexion();
            try{
                $res=$db->query($sql);
                $date=$res->fetch();
                $nb4 =$date['nb4'];
                return $nb4;
            }catch(Exception $e){
                die ('Erreur :' .$e->getMessage());
            }
        }
        function moyenne3 ($reference){
            $sql = "SELECT  count(*) as nb3 from avis where note=3 AND idproduit=$reference";
            $db = config::getConnexion();
            try{
                $res=$db->query($sql);
                $date=$res->fetch();
                $nb3 =$date['nb3'];
                return $nb3;
            }catch(Exception $e){
                die ('Erreur :' .$e->getMessage());
            }
        }
        function moyenne2 ($reference){
            $sql = "SELECT  count(*) as nb2 from avis where note=2 AND idproduit=$reference";
            $db = config::getConnexion();
            try{
                $res=$db->query($sql);
                $date=$res->fetch();
                $nb2 =$date['nb2'];
                return $nb2;
            }catch(Exception $e){
                die ('Erreur :' .$e->getMessage());
            }
        }
        function moyenne1 ($reference){
            $sql = "SELECT  count(*) as nb1 from avis where note=1 AND idproduit=$reference ";
            $db = config::getConnexion();
            try{
                $res=$db->query($sql);
                $date=$res->fetch();
                $nb1 =$date['nb1'];
                return $nb1;
            }catch(Exception $e){
                die ('Erreur :' .$e->getMessage());
            }
        }
    }
?> 
