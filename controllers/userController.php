<?php
// definition de la classe userController
class UserConroller{
    // attributs
    // private $id;
    private $lastName;
    private $firtName;
    private $email;
    private $password;
    // private $statut;

    // definition du constructeur
    public function __contruct($la, $fi, $em, $pa){
        $this->lastName = $la;
        $this->firstName = $fi;
        $this->email = $em;
        $this->password = $pa; 
    }

    // definitions des getters et setters
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastname($la){
        $this->lastName = $la;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName($fi){
        $this->firstName = $fi;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($em){
        $this->email = $em;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($pa){
        $this->password = $pa;
    }

    // definir la methode inscription qui va verifier si les attributs ne sont pas vide
    public function register(){
        if(empty($this->lastName) || empty($this->firstName) || empty($this->email) || empty($this->password)){
            echo "Veuillez remplir tout le formulaire!<br>";
        }else{
            // appel du model UserModel
        }

    }
}


