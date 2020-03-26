<?php
  require_once 'RequestClass.php';

  class Etudiant extends RequestClass{

    public function __construct(){
      parent::__construct();
    }

    public function login($login, $mdp){
      return parent::login($login, $mdp);
    }

  }
?>
