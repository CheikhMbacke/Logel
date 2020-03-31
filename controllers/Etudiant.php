<?php
  require_once 'RequestClass.php';

  class Etudiant extends RequestClass{

    public function __construct(){
      parent::__construct();
    }

    public function login($login, $mdp){
      return parent::login($login, $mdp);
    }

    function paiement($carte,$chefComp,$mois){
      $state = parent::paiement($carte,$chefComp,$mois);
      if($state == true){
        header('location:../logelApp/caissier.php?err=true&msg=Enregistrement bien effectue');
      }
      else{
        header('location:../logelApp/caissier.php?err=false&msg=Erreur de lors de l\'enrigistement');
      }
    }

    function payWithCaution($carte,$chefComp,$mois,$caution){
      $state = parent::payWithCaution($carte,$chefComp,$mois,$caution);

      if($state == true){
        header('location:../logelApp/caissier.php?err=true&msg=Enregistrement bien effectue');
      }
      else{
        header('location:../logelApp/caissier.php?err=false&msg=Erreur de lors de l\'enrigistement');
      }
    }

    function cautionPayed($carte){
      return parent::cautionPayed($carte);
    }

    function updatePassword($carte, $password){
      return parent::updatePassword($carte, $password);
    }

    function getStudentByCarte($carte){
      return parent::getStudentByCarte($carte);
    }

  }
?>
