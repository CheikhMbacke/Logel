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
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<a class="navbar-brand" href="index.php"><span class= "navbar-brand">SamaCampus</span></a>
			<ul class="navbar-nav mr-auto cul" >
				<li class='nav-item'><a href="Admin_index.php"  class="btn btn-info lg">Retour</a></li>
			</ul>
		</nav>
	</header>
	<?php 
		try
		{
			//$host = 'localhost';
			require_once './env.php';
			$bdd = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $key, array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
			//echo 'connexion à la base de données réussie';
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
		//La liste des profiles
		$reqProfil = $bdd->query('SELECT idProfile,libelle FROM typeprofile');
	?>
	<form  action="savePersonnel.php" method="post" class="box">
		<h1>Personnel</h1>
		<select class="custom-select" name="role" id="inputGroupSelect01">
			<option selected >Choisir</option>
			<?php 
				while ($profiles = $reqProfil->fetch()) { ?>
					<option value="<?php echo $profiles['idProfile'];?>"><?php echo $profiles['libelle'];?></option>
				<?php } ?>
		</select>
		<input type="text" name="nom" placeholder="Nom">

		<input type="text" name="prenom" placeholder="Prenom">

		<input type="text" name="email" placeholder="Email">

		<input type="text" name="numero" placeholder="Numéro de Téléphone">

		<input type="Password" name="password" placeholder="Mot de passe">

		<input type="Password" name="cpassword" placeholder="Confirmer le mot de passe">

		<a href="">Aide ?</a>
		<input type="submit" name="" value="Créer">
		<?php
			if(isset($_GET['msg_error'])){
				?>
				<div class="alert alert-danger"> <?php echo $_GET['msg_error'] ;?></div>
			<?php
		} 
			if(isset($_GET['msg_success'])){
				?>
				<div class="alert alert-success"> <?php echo $_GET['msg_success'] ;?></div>
			<?php
		} 
			if(isset($_GET['msg_info'])){
			?>
			<div class="alert alert-info"> <?php echo $_GET['msg_info'] ;?></div>
		<?php
		} ?>
	</form>

</body>
</html>