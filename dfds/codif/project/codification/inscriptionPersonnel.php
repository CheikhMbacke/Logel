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
//inscription personnel 
        $var1 = $_REQUEST['prenom'];
        $var2 = $_REQUEST['nom'];
        $var3 = $_REQUEST['numtel'];
        $var4 = $_REQUEST['mail'];
       

     
        $insertion=$bdd->prepare("INSERT INTO personnel (idPersonnel, prenom, nom, numeroTelephone, mail) VALUES ('', :prenom, :nom, :numtel, :mail)");
        $inscription= $insertion->execute(array(
            "prenom"=>$var1,
            "nom"=>$var2,
            "numtel"=>$var3,
            "mail"=>$var4

        ));
        if ($inscription) {
             echo("inscription reussie");
        }
        else{
            echo("Echec inscription");
        }


?>