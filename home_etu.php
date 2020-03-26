<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
		<?php require_once 'assets/bootstrap.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/style2.css">

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
			<button class="btn bton">Se déconnecter</button>
	</nav>
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="btnclose" onclick="closeNav()">&times;</a><br>
  		<a href="home_etu.html">Voir pavillons</a><br>
  		<a href="param_etu.html">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a><br>
  		<a href="#" class="logout">Se déconnecter</a>
	</div>
	<div class="container ct">
		<div class="row row2">
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon A</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon B</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon C</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon D</a>
			</div>
		</div>
		<div class="row rw22">
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon E</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon F</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon G</a>
			</div>
			<div class= "col-md-2 affiche">
				<a href=#>Pavillon H</a>
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
