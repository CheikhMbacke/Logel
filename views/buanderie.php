

<head>
<link rel="stylesheet" type="text/css" href="assets/style2.css">

</head>

<body>
	<?php
			require_once '../assets/bootstrap.php';
			require_once '../controllers/Chambre.php';
			require_once '../controllers/Pavillon.php';
			$roomManager = new Chambre();
		?>
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
  		<a href="#">
  			<span class="glyphicon glyphicon-user"></span>
  			Personnels</a><br>
  		<a href="#">Créer comptes</a><br>
  		<a href="#">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a>
	</div>
	<div class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2 buanderie">
		<form method="post" class="">
			<legend><span>Prenom-Nom: </span><span>Num-Carte:</span></legend>
			<fieldset>
				<legend>Caution</legend>
				<span>Montant payé: </span>
			</fieldset>
			<fieldset>
				<legend>Emprunt:</legend>
				<table>
					<tr>
						<td><label>Couverture :</label></td>
						<td><input class="" type="checkbox" name="Couverture" value="aCourverture"  /></td>


					</tr>
					<tr>
						<td><label>Drap:</label></td>
						<td><input class="" type="checkbox" name="drap" value="aDrap"/></td>
					</tr>
					<tr>
						<td><label>Rideaux :</label></td>
						<td><input class="" type="checkbox" name="rideau" value="aRideau"/></td>

					</tr>

				</table>
			</fieldset>
			<input classe="valider" type="submit" name="submit" value="Valider">
		</form>
	</div>

	<?php

		if(isset($_POST['submit'])){
			$roomManager = new Chambre();
			echo "string";
			foreach ($_POST as $key => $value) {
				if($key != 'submit'){
					echo 'here';
					$roomManager->lingerie('201607E0R',$value);
					echo 'end';
				}
			}
		}
		$roomManager->hasLingerie('201607E0R');
	 ?>
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
