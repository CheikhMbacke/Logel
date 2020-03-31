<!DOCTYPE html>
<html>
<head>
	<title>Interface cassier</title>
	<?php require_once 'assets/bootstrap.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/style2.css">
	<meta charset="utf-8"/>
	<style type="text/css">
		.cassier{
			/*height: 50%;
			width: 40%;*/

			border:.5px solid rgb(131,107,223);
			/*background-color: grey;*/

			/*margin-left: 30%;*/
			margin-top: 10%;
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
			overflow: auto;
		}
		tr{
			font-size: 1.5em;

		}
		label{margin-left:20px;}
		fieldset{
			height: inherit;
			width: inherit;
			font-size: 15px;
		}
		form>input.valider{margin:3px 5px  3px;}
		.box{
		background-color:rgb(131,107,223);
	}
	.box input[type="submit"]{
	border:0;
	background: block;
	margin: 10px ;
	text-align: center;
	border:2px solid rgb(131,107,223);
	/*padding: 4px 12px;*/
	outline: none;
	color:rgb(131,107,223);
	border-radius: 24px;
	font-size: 20px;
	cursor: pointer;
	box-shadow: 2px 2px 1px 1px white;
}

.box input[type="submit"]:hover{
	background: rgb(131,107,223);
	color: white;

}
.box input[type="number"]{

border: 0;
background: white;


text-align: left;
border: 2px solid rgb(131,107,223);
padding: 8px 11px;
width: 200px;
outline: none;
color: rgb(131,107,223);
border-radius: 24px;
transition: 0.25s;
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
