<?php
    try
    {
        //$host = 'localhost';
        $bdd = new PDO('mysql:host=localhost;dbname=logel_db', 'cheikh', 'passer123', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    if(
        !empty($_REQUEST['role']) &&
        !empty($_REQUEST['nom']) &&
        !empty($_REQUEST['prenom']) &&
        !empty($_REQUEST['email']) &&
        !empty($_REQUEST['numero']) &&
        !empty($_REQUEST['password']) &&
        !empty($_REQUEST['cpassword'])
    ){
        // Champs remplis
        $role = $_REQUEST['role'];
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $email = $_REQUEST['email'];
        $numero = $_REQUEST['numero'];
        $password = $_REQUEST['password'];
        $cpassword = $_REQUEST['cpassword'];
        
     
        //Les profils
        //$reqProfils = $bdd->query('SELECT libelle FROM typeprofile ');
        $reqPersonnel = $bdd->prepare('SELECT email FROM personnel WHERE email=?');
        $reqPersonnel->execute(array($email));
        $personnel = $reqPersonnel->fetch();
        if($personnel['email'] != $email){
            $reqSavePersonnel = $bdd->prepare('INSERT INTO personnel
            (nom,prenom,email,numero,role,password) 
            values (?,?,?,?,?,?)');
            $reqSavePersonnel->execute(array($nom,$prenom,$email,$numero,$role,$password));
            header("Location:compte_personnel.php?msg_success=Personnel enregistré avec succés");     
        }else{
           header("Location:compte_personnel.php?msg_info=Personnel existe deja");
        }
    }else{
        header("Location:compte_personnel.php?msg_error=Veuiller remplir les champs vides");
    } 
?>