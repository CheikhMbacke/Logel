<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require_once('/opt/lampp/htdocs/codif/project/codification/envoimail/PHPMailermaster/src/PHPMailer.php');
	require_once('/opt/lampp/htdocs/codif/project/codification/envoimail/PHPMailermaster/src/SMTP.php');
	require_once('/opt/lampp/htdocs/codif/project/codification/envoimail/PHPMailermaster/src/Exception.php');


$currentMois=(int)date("m");

	try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=logel_db', 'root', '', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        //echo 'connexion à la base de données réussie';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
 
    
    //verification numero carte etudiant
    $reponse1= $bdd->query('SELECT numCarte,email FROM etudiant');
     

           $i=0;
           while ($listeEtudiants= $reponse1->fetch()){
           		


               $req = $bdd->prepare('SELECT etudi,idMois FROM paiement  WHERE etudi = ? AND idMois = ?');
			   $req->execute(array($listeEtudiants['numCarte'],$currentMois));
			    $req2=$req->fetch();
			   //echo ($req2);
			   if (!$req2) {
			   		
			   		
			   			$destinataires[]=$listeEtudiants['email'];
			   		
			   	$i++;	
			   }
            } 
    
       

	if ($destinataires ) {
		# code...

		// Instantiate Class
		$mail = new PHPMailer;

		// Set up SMTP
		$mail->IsSMTP();                // Sets up a SMTP connection
		$mail->SMTPDebug  = 2;          // This will print debugging info
		$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
		$mail->SMTPSecure = "tls";      // Connect using a TLS connection
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->Encoding = '7bit';       // SMS uses 7-bit encoding
		$email="neinediop1@gmail.com" ;
		 
		// Authentication
		$mail->Username   = "mettre votre addresse gmail pour que ca marche"; // Login
		$mail->Password   = "mettre votre mot de passe gmail aussi"; // Password
		 
		// Compose
		$mail->Subject = "Rappel de paiement ";     // Subject (which isn't required)
		$mail->Body = "Cher(e) etudiant(e), veuillez proceder au paiement de votre loyer avant le 15 du mois sinon votre matelas et votre cle vous seront retires.\n Le Chef Comptable.";        // Body of our message
		$mail->setFrom($email) ;
		 
		for ($j=0; $j <$i ; $j++) { 
			$mail->AddAddress( $destinataires[$j] ); // Where to send it
		}
		


		if($mail->send())
				echo "send";      // Send!
		else
					echo "pas envoyé";
	}
	else{
		echo "gneup fay nagn";
	}


?>