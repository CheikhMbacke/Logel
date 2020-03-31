<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=logel', 'kande', 'passer', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }


    //verification numero carte etudiant
     $reqNumCarte = $bdd->prepare('SELECT numCarte FROM etudiant WHERE numCarte=?');
     $reqNumCarte->execute(array($_REQUEST['numEtudiant']));
     $numCarte = $reqNumCarte->fetch();
      //Verifier si le compte est deja active ou nom
     $reqCarte = $bdd->prepare('SELECT carte FROM etudiantcodif WHERE carte=?');
     $reqCarte->execute(array($_REQUEST['numEtudiant']));
     $carte = $reqCarte->fetch();


    if($numCarte)   {
        if($numCarte['numCarte'] != $carte['carte']){
             try {
              $req = $bdd->prepare('INSERT INTO etudiantcodif(carte,pwd) values (?,?) ');
              $req->execute(array($_REQUEST['numEtudiant'],'passer'));
            } catch (Exception $ex) {
                die('Erreur : ' . $e->getMessage());
            }
            header("Location:compte_etudiant.php?msg_success=Compte ".$numCarte['numEtudiant']." activé ");
        }else{
            header("Location:compte_etudiant.php?msg_info=Compte ".$numCarte['numEtudiant']." deja activé ");
        }
    }
    else{
        header("Location:compte_etudiant.php?msg_error=Le numero de l 'etudiant n'est pas admis");
    }
?>
