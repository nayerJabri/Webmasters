<?php

    class client {
        private $ID;
        private $nom;
        private $prenom;
        private $sexe;
        private $Telephone;
        private $Adresse_Email;
        private $Password;


        function __construct($ID,$Nom,$Prenom,$sexe,$Telephone,$Adresse_Email,$Password){
            $this->ID=$ID;
            $this->nom=$Nom;
            $this->prenom=$Prenom;
            $this->sexe=$sexe;
            $this->Telephone= $Telephone;
            $this->Adresse_Email=$Adresse_Email;
            $this->Password=$Password;
        }

        function get_id(){
            return $this->ID;
        }
        function get_nom(){
            return $this->nom;
        }
        function get_prenom(){
            return $this->prenom;
        }
        function get_Telephone(){
            return $this->Telephone;
        }
        function get_Password(){
            return $this->Password;
        }
        function get_Adresse_Email(){
            return $this->Adresse_Email;
        }
        function get_sexe(){
            return $this->sexe;
        }

        // function set_id(){
        //     $this->id=$id;
        // }
        // function set_nom(){
        //     $this->nom=$nom;
        // }
        // function set_prenom(){
        //     $this->prenom=$prenom;
        // }
        // function set_Telephone(){
        //     $this->Telephone=$Telephone;
        // }
        // function set_Adresse_Email(){
        //     $this->Adresse_Email=$Adresse_Email;
        // }
        // function get_Password(){
        //     return $this->Password;
        // }
    }





?>