<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="C:/wamp/www/bootstrap2/dist/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="./assets/style2.css">
</head>
<body class ="boddy">
	<nav class="navbar nbar navbar-expand-md bg-light fixed-top py-3">
		<div class="container">
			<a class="icomain" href="javascript:void(0)" onclick="openNav()">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</a>
			<form>
				<input type="text" placeholder="Rechercher..." class="ico" name="search" class="search">
				<span class="glyphicon glyphicon-search"></span>
			</form>
			<span class="glyphicon user glyphicon-user"></span>
			<button class="btn bton">Se déconnecter</button>
		</div>
	</nav>
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="btnclose" onclick="closeNav()">&times;</a><br>
  		<a href="parametreAdmin.php">Home</a>
		<a href="listePersonnel.php">
  			<span class="glyphicon glyphicon-user"></span>
  			Personnels</a><br>
  		<a href="compte_personnel.php">Créer comptes</a><br>
  		<a href="parametreAdmin.php">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a><br>
  		<a href="#" class="logout">Se déconnecter</a>
	</div>
	<?php
		try
		{
			//$host = 'localhost';
			$bdd = new PDO('mysql:host=localhost;dbname=logel', 'kande', 'passer', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
			//echo 'connexion à la base de données réussie';
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		//La liste des personnels
		$reqPersonnel = $bdd->query('SELECT * FROM personnel');
	?>
	<div class ="container-fluid">
		<div class="row">
			<div class= "col-md-8 col-xs-7 add">
				<h2>Listes personnels</h2><br><br>
				<table width="800" border="0">
					<tr>
						<th>Profil</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Numéro</th>
					</tr>
					<?php
						while($personnel = $reqPersonnel->fetch()){
							$reqProfil = $bdd->prepare('SELECT libelle FROM typeprofile WHERE idProfile=?');
							$reqProfil->execute(array($personnel['role']));
							$profil = $reqProfil->fetch();
						?>
					<tr>
						<td><span class="glyphicon val glyphicon-user"></span><?php echo $profil[0] ;?></span></td>
						<td class="val"><?php echo $personnel['nom'] ;?></td>
						<td class="val"><?php echo $personnel['premom'] ;?></td>
						<td class="val"><?php echo $personnel['numero'] ;?></td>
					</tr>
						<?php }?>
				</table>

			</div>
		</div>

	</div>
<script type="text/javascript">
	function openNav() {
 		document.getElementById("mySidenav").style.display = "block";
 		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
  		document.getElementById("mySidenav").style.width = "0";

	}
</script>
</body>
</html>
