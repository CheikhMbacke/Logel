<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<title>Création de compte</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body class ="boddy">
	<header>
		<h1></h1>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<a class="navbar-brand" href="#"><span class= "navbar-brand">SamaCampus</span></a>
			<ul class="navbar-nav mr-auto cul">
				<li class='nav-item'><a href="home.html" class="nav-link"><button class="btn bton bt">Home</button></a></li>
				<li class='nav-item'><a href="compte_etudiant.php" class="nav-link"><button class="btn bton">Créer un compte</button></a></li>
				<li class='nav-item'><a href="authEtudiant.php" class="nav-link"><button class="btn bton">Se connecter</button></a></li>
			</ul>
	</nav>
	</header>
	<form class="box" action="validationCompte.php" method="post" >
		<h1>Etudiant</h1>

		<input type="text" name="numEtudiant" placeholder="Carte étudiant">
		<?php
			if(isset($_GET['msg_success'])){
				?>
				<div class="alert alert-success"> <?php echo $_GET['msg_success'] ;?></div>
			<?php
			} 
			if(isset($_GET['msg_error'])){
				?>
				<div class="alert alert-danger"> <?php echo $_GET['msg_error'] ;?></div>
			<?php
			}
			if(isset($_GET['msg_info'])){
				?>
				<div class="alert alert-info"> <?php echo $_GET['msg_info'] ;?></div>
			<?php
			} ?>
		
		<input type="submit" name="" value="Créer">
		<a href="">Aide ?</a>
	</form>

</body>
</html>