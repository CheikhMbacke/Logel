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
	<?php
		session_start();
		require_once '../controllers/Etudiant.php';
		$etudiantManager = new Etudiant();
		$student = $etudiantManager->getStudentByCarte($_SESSION['carte']);
		$student = $student->fetch();
	 ?>
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
			<button class="btn bton">Se déconnecter</button>
		</div>
	</nav>
	<?php
	if(isset($_GET['res'])){
		$class = $_GET['res'] == 'true' ? 'alert alert-success' : 'alert alert-danger';
		echo '<div class="mt-3 '.$class.'">'.$_GET['msg'].'</div>';
	}
	 ?>
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

				<table width="800"  cellpadding="20">

					<tr>
						<td class="titre val">Nom</td>
						<td class="val"><?php echo $student['nom']; ?></td>
						<td class="val"></td>
					</tr>

					<tr>
						<td class="titre val">Prénom</td>
						<td class="val"><?php echo $student['prenom'] ?></td>
						<td></td>
					</tr>
					<tr>
						<td class="titre val">Numéro</td>
						<td class="val"><?php echo $student['numero'] ?></td>
						<td class="val"><a href="#" onclick="displayFormNum()">Modifier</a></td>
					</tr>
					<tr>
						<td class="hde">
							<form action="../controllers/functions.php" method="POST" class="formmodif" id="name" >

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

							<label>Nouveau mot de passe</label><input type="password" setCustomValidity=""  id="password" class="inp" name="pwd">
							<label>Confirmer mot de passe</label><input class="inp" required setCustomValidity="Ce champs est required"  onfocusout="check()" id="confirm_password" type="password" name="password">


						</td>
						<td class="pw"></td>
						<td class="pw"></td>
					</tr>
					<tr>
							<td class="valide" id="subm"><input type="submit" value ="valider" class=" btn valider" name=""></td>
					</tr>
						</form>
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

	function check(input) {
         if (document.getElementById('confirm_password').value != document.getElementById('password').value) {
             alert('Les mots de passes ne correspondent pas');
         } else {
             input.setCustomValidity('');
         }
     }

</script>
</body>
</html>
