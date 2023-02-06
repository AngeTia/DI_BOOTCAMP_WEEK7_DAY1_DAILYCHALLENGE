<?php
  // Définition de la classe Utilisateur
  class Utilisateur {
    public $firstName;
    public function __construct($firstName){
        $this->firstName = $firstName;
    }
    // Méthode pour dire bonjour à l'utilisateur
    public function hello() {
      return "Bonjour " . $this->firstName . "!\n";
    }

  }

$user1 = new Utilisateur("Jonnie");
echo $user1->hello();
