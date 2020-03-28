<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="C:/wamp/www/bootstrap2/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="./assets/style2.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

</head>
<body class ="boddy">
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<a class="navbar-brand " href="#"><span class= "navbar-brand logo">SamaCampus</span></a>
			<a class="icomain" href="javascript:void(0)" onclick="openNav()">
			<span class="glyphicon glyphicon-menu-hamburger"></span>
			</a>
			<form>
				<input type="text" placeholder="Rechercher..." class="ico" name="search" class="search">
				<span class="glyphicon glyphicon-search"></span>
			</form>
			<span class="glyphicon user glyphicon-user"></span>
			<button class="btn btn-danger float-left">Se déconnecter</button>
	</nav>
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="btnclose" onclick="closeNav()">&times;</a><br>
  		<!-- <a href="home_etu.html">Voir pavillons</a><br> -->
  		<a href="home_etu.php">Home</a>
        <a href="param_etu.html">
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
				session_start();
        //La liste des chambres
        $reqPavillon = $bdd->prepare('SELECT idPav FROM pavillon WHERE libelle=?');
        $reqPavillon->execute(array($_GET['pav']));
        $idPav = $reqPavillon->fetch();
        $reqChambres = $bdd->prepare('SELECT * FROM chambre WHERE pav= :pav and genre = :genre');
        $reqChambres->execute(array(
					'pav' => $idPav[0],
					'genre' => $_SESSION['genre']
				));
	?>
        <div class ="container-fluid">
		<div class="row">
			<div class= "col-md-8 col-xs-7 add">
				<h2>Codification</h2><br><br>
				<form class="form w-25" action="../controllers/functions.php" method="post">
						<h3>Pavillon choisi : <?php echo $_GET['pav']; ?></h3>
						<div class="form-group">
							<label for="">Numero de chambre</label>
							<select class="form-control" name="num">
								<?php
										while ($ch = $reqChambres->fetch()) {
											echo '<option value="'.$ch['idChambre'].'">'.$ch['numero'].'</option>';
										}
								 ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Statut</label>
							<select class="form-control" name="statut">
								<option value="titulaire">Titulaire</option>
								<option value="suppleant">Suppleant</option>
							</select>
						</div>
						<div class="mt-2">
							<input class="btn btn-primary" type="submit" name="" value="Choisir">
						</div>
				</form>
				<?php
					if ($_GET['err']) { ?>
						<div class="alert alert-danger">
						  <strong>Erreur :</strong> <?php echo $_GET['err']; ?>
						</div>
					<?php }
				 ?>
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

	function getValue(){
		var elem = document.getElementById('tit').value;

	}
</script>
</body>
</html>
