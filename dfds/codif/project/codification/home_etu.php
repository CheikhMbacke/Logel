<!DOCTYPE html>
<html>
<head>
	<title>Home-Codif</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body class ="boddy">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><span class= "navbar-brand">SamaCampus</span></a>
			<ul class="navbar-nav mr-auto cul">
				<li class='nav-item'><a href="#" class="nav-link"><button class="btn bton bt">Home</button></a></li>
				<li class='nav-item'><a href="#" class="nav-link"><button class="btn bton">Modifier identifiants</button></a></li>
				<li class='nav-item'><a href="authentification.php" class="nav-link"><button class="btn bton">Se déconnecter</button></a></li>
			</ul>
	</nav>
	<div class="container mt-4">
		<?php
			if(isset($_GET['msg_success'])){
				?>
				<div class="alert alert-success"> <?php echo $_GET['msg_success'] ;?></div>
			<?php
			}?>
		<div class="row">
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

</body>
</html>