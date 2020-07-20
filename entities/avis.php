<?php

    class avis
    {
            private $id;
            private $nom;
            private $email;
            private $review;
            private $datea;
            private $idproduit;
            private $note;


            function __construct($nom,$email,$review,$idproduit,$note)
            {   
                $this->nom=$nom;
                $this->email=$email;
                $this->review=$review;  
                $this->idproduit=$idproduit; 
                $this->note=$note;               
            }

            function get_id(){
                return $this->id;
            }
            function get_note(){
                return $this->note;
            }
            function get_idproduit(){
                return $this->idproduit;
            }

            function get_nom(){
                return $this->nom;
            }

            function get_email(){
                return $this->email;
            }
            function get_review(){
                return $this->review;
            }

            function get_date(){
                return $this->datea;
            }

            function set_id($id){
                $this->id=$id;

            }
            function set_nom($nom){
                $this->nom=$nom;

            }
            function set_email($email){
                $this->email=$email;

            }

            function set_review($review){
                $this->review=$review;

            }

    }

?>