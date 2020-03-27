<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
				<input type="text" placeholder="Rechercher ..." class="ico" name="search" class="search">
				<span class="glyphicon glyphicon-search"></span>
			</form>
			<span class="glyphicon user glyphicon-user"></span>
			<a href="authEtudiant.php" class="btn bton">Se déconnecter</a>
	</nav>
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="btnclose" onclick="closeNav()">&times;</a><br>
  		<!-- <a href="home_etu.html">Voir pavillons</a><br> -->
  		<a href="home_etu.php">Home</a>
        <a href="param_etu.html">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a><br>
  		<a href="authEtudiant.php" class="logout">Se déconnecter</a>
	</div>
	<?php
		try
		{
			require_once './env.php';
			//$host = 'localhost';
			$bdd = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $key, array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
			//echo 'connexion à la base de données réussie';
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		
		if($_SESSION['sexe'] == 'F') 
			$sexe = 'FILLE' ;
		else
			$sexe = 'GARCON';
		
		//La liste des chambres
        $reqPavillon = $bdd->prepare('SELECT idPav FROM pavillon WHERE libelle=?');
        $reqPavillon->execute(array($_GET['pav']));
        $idPav = $reqPavillon->fetch();
        $reqChambres = $bdd->prepare('SELECT * FROM chambre WHERE pav=? AND typeChambre=?');
		$reqChambres->execute(array($idPav[0],$sexe));
		
	?>
        <div class ="container-fluid">
		<div class="row">
			<div class= "col-md-8 col-xs-7 add">
				<h2>Liste des chambres</h2><br><br>
				<table width="800" border="0">
					<tr>
                        <th>Pavillon</th>
                        <th>Genre logé</th>
                        <th>N° Chambre</th>
					</tr>
					<?php
                        while($chambres = $reqChambres->fetch()){
                        ?>
					<tr>
						<td><?php echo $_GET['pav'];?></td>
						<td class="val"><?php echo $chambres["typeChambre"];?></td>
						<td class="val"><?php echo $chambres["numero"];?></td>
					</tr>
						<?php }?>
				</table>
				
			</div>
		</div>
	 
		<footer>
			<div class="row">
				<div class="col-md-12 footer2">
					
				</div>
			</div>
		</footer>
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