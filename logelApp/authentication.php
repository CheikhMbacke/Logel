<?php
if(isset($_POST['carte'])){
  $bdd = '';
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=logel', 'kande', 'passer');
    //echo 'connexion à la base de données réussie';
  }
  catch (\Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }


  //verification numero carte etudiant
  $reponse = $bdd->prepare('SELECT carte FROM etudiantcodif WHERE carte = :carte AND pwd = :password');
  $reponse->execute(array(
    'carte' => $_POST['carte'],
    'password' => $_POST['password']
  ));

  $donnees = $reponse->fetch();
    if($donnees)   {
      $reponse = $bdd->prepare('SELECT * FROM etudiant WHERE numCarte = :carte');
      $reponse->execute(array(
        'carte' => $_POST['carte']
      ));
      $etudiant = $reponse->fetch();
      session_start();
      $_SESSION['carte'] = $etudiant['numCarte'];
      $_SESSION['nom'] = $etudiant['nom'];
      $_SESSION['prenom'] = $etudiant['prenom'];
      $_SESSION['genre'] = $etudiant['sexe'];
      header("Location:home_etu.php?msg_success=Authentification reussie");
  }
  else{
      header("Location:authEtudiant.php?msg_error=Mail ou mot de passe incorrecte");
   }
}
?>
