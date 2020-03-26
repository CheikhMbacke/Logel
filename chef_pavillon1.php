<!DOCTYPE html>
<html>
<head>
	<title>Interface chef de pavillon</title>
	<?php require_once 'assets/bootstrap.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/style2.css">
	<meta charset="utf-8"/>
	<style type="text/css">
		body{font-size: 15px;}
		.pavillon{
			border:.5px solid rgb(131,107,223);

			overflow: auto;
			border-radius: 6px;
			box-shadow: 10px 10px 7px 2px rgb(131,107,223);
			z-index: 10;
		}
		table{

			height: auto;
			width: auto;
			top: 10px;
			left: 30%;
			right: 10px;
			margin:auto;
			overflow: scroll;
			}
		tr{
			font-size: 1.5em;

		}
		td{margin-left:20px;
			padding: 3px;
			border:1px solid grey;
		}
		fieldset{
			height: inherit;
			width: inherit;
		}
		form>input.valider{margin:3px 5px  3px;}
		.box{
		background-color:rgb(131,107,223);
	}

tr:nth-child(2n+1){
	background-color: rgba(131,107,223,.8);
}
tr:nth-child(2n+2){
	background-color: rgba(131,107,223,.4);
}
.affichage{
	height: 50%;
	min-height: 100px;
	max-height: 500px;
	margin-top: 9%;
	margin-bottom: 5%;
}
</style>


</head>
<body>
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
	<div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2 affichage pavillon">
		<table>
			<tr>
				<td>Numéro Carte</td>
				<td>Prenom</td>
				<td>Nom</td>
				<td>Téléphone</td>
				<td>Mail</td>
				<td>Niveau</td>
				<td>Numéro Chambre</td>
				<td>Buanderie</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>NO-OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>NO-OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>OK</td>
			</tr>
			<tr>
				<td>2020ABC</td>
				<td>Moussa</td>
				<td>Ndiaye</td>
				<td>77000000</td>
				<td>Moussa.Ndiaye@gmail.com</td>
				<td>DUT-2</td>
				<td>40-A</td>
				<td>NO-OK</td>
			</tr>
		</table>
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
