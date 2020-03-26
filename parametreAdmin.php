<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
	<?php require_once 'assets/bootstrap.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/style2.css">

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
  		<a href="#">
  			<span class="glyphicon glyphicon-user"></span>
  			Personnels</a><br>
  		<a href="#">Créer comptes</a><br>
  		<a href="#">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a><br>
  		<a href="#" class="logout">Se déconnecter</a>
	</div>
	<div class ="container-fluid">
		<div class="row">
			<div class= "col-md-8 col-xs-7 add">
				<h2>Parametres</h2><br><br>
				<table width="800" border="0">
					<tr>
					<th>Profil</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Numéro</th>
					<th>Action</th>
				</tr>
				<tr>
				<td><span class="glyphicon val glyphicon-user"></span>&nbsp Chef de pavillon</span></td>
				<td class="val">Samaké</td>
				<td class="val">Fatou</td>
				<td class="val">776600840</td>
				<td class="val"><a href="suprimer/id">Supprimer</a></td>
			</tr>
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
