<?php
    session_start();
    require_once './env.php';
    try
    {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $key, array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
 
    //authentification de l'etudiant
    //verification numero carte etudiant
    if(isset($_REQUEST['carte'])){
        $reponse = $bdd->prepare('SELECT carte FROM etudiantcodif WHERE carte=:carte AND password=:password');
        $reponse->execute(array(
            ':carte'=>$_REQUEST['carte'],
            ':password'=>$_REQUEST['password']
           ));
   
               $donnees = $reponse->fetch();
   
               if($donnees)   {
                   // sert de token pour une connexion unique
                   /* $_SESSION['id'] = 'ok'; */
                   $reqSexe = $bdd->prepare('SELECT sexe FROM etudiant WHERE numCarte=(
                   SELECT carte FROM etudiantcodif WHERE carte=?) ');
                   $reqSexe->execute(array($donnees['carte']));
                   $sexe = $reqSexe->fetch();
                   $_SESSION['sexe'] = $sexe[0];
                   header("Location:home_etu.php?msg_success=Authentification reussie");
               } 
               else{
                   header("Location:authEtudiant.php?msg_error=Carte ou mot de passe incorrecte");
               } 
    } 
    //authentification du personnel
    if(isset($_REQUEST['email'])){
        $reponse = $bdd->prepare('SELECT email FROM personnel WHERE email=:email AND password=:password');
        $reponse->execute(array(
            ':email'=>$_REQUEST['email'],
            ':password'=>$_REQUEST['password']
           ));
   
               $donnees = $reponse->fetch();
   
               if($donnees)   {
                   header("Location:authPersonnel.php?msg_success=Authentification reussie");
               } 
               else{
                   header("Location:authPersonnel.php?msg_error=Mail ou mot de passe incorrecte");
               } 
    }
?>