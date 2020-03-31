<?php
  session_start();
  require_once 'Chambre.php';
  require_once 'Etudiant.php';
  require_once 'Pavillon.php';

  $roomManager = new Chambre();
  $etudiantManager = new Etudiant();
  $pavManager = new Pavillon();

  if(isset($_POST['num'])){
    $state = $roomManager->addStudentIntoRoom($_POST['num'],$_SESSION['carte'],$_POST['statut']);
    if($state == true){
      header('location:../logelApp/choix.php');
    }
    elseif ($state == 'pleine') {
      header('location:chambre_etu.php?err=La chambre est pleine');
    }
    else{
        header('location:chambre_etu.php?err=Il n\'y a plus de place titulaire');
    }
  }

  if(isset($_POST['carte'])){
    if(isset($_POST['caution'])){
    	$etudiantManager->payWithCaution($_POST['carte'],2,$_POST['mois'],$_POST['caution']);
    }
    else{
    	$etudiantManager->paiement($_POST['carte'],2,$_POST['mois']);
    }
    // $state = $etudiantManager->paiement($_POST['carte'],2,$_POST['mois']);
    // if($state){
    //   header('location:../logelApp/caissier.php?res=true&msg=Le paiement est bien enregistre');
    // }
    // else
    //   header('location:../logelApp/caissier.php?res=false&msg=Erreur de lors de l\'enrigistement du paiement');
  }

  if(isset($_POST['pwd'])){
    $state = $etudiantManager->updatePassword($_SESSION['carte'],$_POST['pwd']);
    if($state){
      header('location:../logelApp/param_etu.php?res=true&msg=Mot de passe bien modifie');
    }
    else
      header('location:../logelApp/param_etu.php?res=false&msg=Erreur de lors de l\'enregistement du paiement');
  }
 ?>
