<?php
	session_destroy();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<title>Authentification</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	
</head>
<body>
	<header>
		<h1></h1>
		
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<a class="navbar-brand" href="#"><span class= "navbar-brand">SamaCampus</span></a>
			<ul class="navbar-nav mr-auto cul">
				<li class='nav-item'><a href="index.php" class="nav-link"><button class="btn bton bt">Home</button></a></li>
				<li class='nav-item'><a href="compte_etudiant.php" class="nav-link"><button class="btn bton">Créer un compte</button></a></li>
				<li class='nav-item'><a href="authEtudiant.php" class="nav-link"><button class="btn bton">Se connecter</button></a></li>
			</ul>
	</nav>
		
	</header>
	<div class="container">
		<form class="box" action="authentication.php" method="post" >
		

		<input type="text" name="carte" placeholder="Carte d'étudiant">

		<input type="Password" name="password" placeholder="Mot de passe">
		<?php if(isset($_GET['msg_error'])){
				?>
				<div class="alert alert-danger"> <?php echo $_GET['msg_error'] ;?></div>
			<?php
			} ?>
		<a href="">Mot de passe oublié ?</a>
		<input type="submit" name="" value="Se connecter">
	</form>
	</div>

</body>
</html>