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
 ?>
