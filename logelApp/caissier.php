<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<title>Authentification</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>

  <?php
		require_once '../controllers/Etudiant.php';
    $studentManager = new Etudiant();
   ?>
	<header>
		<h1></h1>

			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
			<a class="navbar-brand" href="#"><span class= "navbar-brand">SamaCampus</span></a>
			<ul class="navbar-nav mr-auto cul">
				<li class='nav-item'><a href="home.html" class="nav-link"><button class="btn bton bt">Home</button></a></li>
				<li class='nav-item'><a href="authEtudiant.php" class="nav-link"><button class="btn btn-danger float-left">Se deconnecter</button></a></li>
			</ul>
	</nav>

	</header>
	<div class="container">
		<form class="box" action="../controllers/functions.php" method="post" >

		<input required  type="text" id="card" name="carte" placeholder="Carte Etudiant">

			<div class="form-label-group">
				<label for="">Caution</label>
	      <input class="form-control" type="checkbox" name="caution" value="1">
			</div>
    <select class="form-control" multiple name="mois[]">
      <?php
        $mois = array("Octobre","Novembre","Decembre","Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre");
        for ($i=0; $i < 12 ; $i++) {
          echo '<option value="'.$mois[$i].'">'.$mois[$i].'</option>';
        }
       ?>
    </select>
		<?php if(isset($_GET['msg'])){
        $class = $_GET['res'] == 'false'? 'alert alert-success' : 'alert alert-danger';
      ?>
				<div  <?php echo 'class="mt-3 '.$class.'"'; ?>> <?php echo $_GET['msg'] ;?></div>
			<?php
			} ?>
		<input type="submit" name="" value="Enregistrer">
	</form>
  </div>
	</div>
  <script type="text/javascript">

      function checkCaution(){
        var card = document.getElementById('card').value;
         window.location.href = "caissier.php?check=" + card;
      }
  </script>
</body>
</html>
