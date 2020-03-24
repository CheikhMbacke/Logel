<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=logel', 'cheikh', 'passer123', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
 
    
    //verification numero carte etudiant
     $reponse = $bdd->prepare('SELECT numeroCarte FROM etudiant WHERE numeroCarte=?');
     $reponse->execute(array($_REQUEST['numEtudiant']));

            $donnees = $reponse->fetch();

            if($donnees)   {
                header("Location:compte_etudiant.php?msg_success=Authentification reussie");
            } 
            else{
                header("Location:compte_etudiant.php?msg_error=Le numero de l 'etudiant n'est pas admis");
            }  
?>