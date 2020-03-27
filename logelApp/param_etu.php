<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap2/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="./assets/style2.css">
	
</head>
<body class ="boddy">
	<nav class="navbar nbar navbar-expand-md bg-light fixed-top py-3">
		<div class="container">
			<a class="icomain2" href="javascript:void(0)" onclick="openNav()">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</a>
			<form>
				<input type="text" placeholder="Rechercher..." class="ico2" name="search" class="search">
				<span class="glyphicon glyphicon-search"></span>
			</form>
			<span class="glyphicon user2 glyphicon-user"></span>
			<a hreh="authEtudiant.php" class="btn bton">Se déconnecter</a>
		</div>
	</nav>

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="btnclose" onclick="closeNav()">&times;</a><br>
  		<a href="home_etu.php">Home</a><br>
  		<a href="#">
  			<span class="glyphicon glyphicon-cog"></span>
  			Parametres</a><br>
  		<a href="authEtudiant.php" class="logout">Se déconnecter</a>
	</div>
	<div class ="container-fluid">
		<div class="row">
			<div class= "col-md-8 col-xs-7 add">
				<h2>Parametres</h2><br><br>

				<table width="800"  cellpadding="20">
					<form methode="post" id="num" action="maj.php">
					<tr>
						<td class="titre val">Nom</td>
						<td class="val">BA</td>
						<td class="val"></td>
					</tr>

					<tr>
						<td class="titre val">Prénom</td>
						<td class="val">Fatou</td>
						<td></td>
					</tr>
					<tr>
						<td class="titre val">Numéro</td>
						<td class="val">776600840</td>
						<td class="val"><a href="#" onclick="displayFormNum()">Modifier</a></td>
					</tr>
					<tr>	 
						<td class="hde">	
							<form methode="post" class="formmodif" id="name" action="">

								<label>Nouveau numéro</label><input placeholder="Saisir le nouveau numéro" type ="text" class="inp" name="nom">

						</td>
						<td class="hde"></td>
						<td class="hde"></td>
					</tr>

					<tr>
						<td class="titre val">Mot de passe</td>
						<td class="val">*******</td>
						<td class="val"><a href="#" onclick="displayFormpwd()">Modifier</a></td>
					</tr>
					<tr>
						<td class="pw" >
						
							<label>Nouveau mot de passe</label><input type="password" class="inp" name="nom">
							<label>Confirmer mot de passe</label><input class="inp" type="password" name="nom">
						</form>

						</td>
						<td class="pw"></td>
						<td class="pw"></td>
					</tr>
					<tr>
							<td class="valide" id="subm"><input type="submit"  value ="valider" class=" btn valider" name="">	
							</td>
						</form>
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
	function displayFormNum(){
		document.getElementById("subm").style.border="0px";
		document.getElementById("subm").style.position="relative";
		document.getElementById("subm").style.top="0px";
		document.getElementById("subm").style.left="0px";
		var el =document.getElementsByClassName("hde");
		for (var i =0;i<el.length;i++) {
			el[i].style.position="relative";
			el[i].style.top="0px";
			el[i].style.left="0px";
		}
	}
	function displayFormpwd(){
		var el =document.getElementsByClassName("pw");
		for (var i =0;i<el.length;i++) {
			el[i].style.position="relative";
			el[i].style.top="0px";
			el[i].style.left="0px";
		}
	}
</script>
</body>
</html>