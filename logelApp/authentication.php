<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=logel_db', 'cheikh', 'passer123', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
 
    
    //verification numero carte etudiant
     $reponse = $bdd->prepare('SELECT carte FROM etudiantcodif WHERE carte=:carte AND password=:password');
     $reponse->execute(array(
         ':carte'=>$_REQUEST['carte'],
         ':password'=>$_REQUEST['password']
        ));

            $donnees = $reponse->fetch();

            if($donnees)   {
                header("Location:home_etu.php?msg_success=Authentification reussie");
            } 
            else{
                header("Location:authEtudiant.php?msg_error=Mail ou mot de passe incorrecte");
            }  
?>