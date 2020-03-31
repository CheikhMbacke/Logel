<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <body>
        <?php
          session_start();
            require_once '../assets/bootstrap.php';
            require_once '../controllers/Chambre.php';
            require_once '../controllers/Pavillon.php';
            $roomManager = new Chambre();
            $pavManager = new Pavillon();
            $roomDatas = $roomManager->getAttribute("*");
            $pavDatas = $pavManager->getAttribute("*");
        ?>

        <form class="form-inline form-horizontal" method="POST" >
          <div class="form-label-group">
            <label for="num" class="sr-only">Numero</label>
            <input required type="text" class="form-control" id="num" name="num" placeholder="numero" />
          </div>
          <div class="form-label-group">
            <label for="num" class="sr-only">Pavillon</label>
            <select required class="form-control" name="pav">
              <?php
                while($pav = $pavDatas->fetch()){
                  echo '<option value="'.$pav['idPav'].'">'.$pav['libelle'].'</option>';
                }
               ?>
            </select>
          </div>
          <div class="form-label-group">
            <label for="type" class="sr-only">type</label>
            <select required class="form-control" name="type">
                <option selected disabled>choisir..</option>
                <option value="GARÇON">GARÇON</option>
                <option value="FILLE">FILLE</option>
            </select>
          </div>
          <input type="submit" class="btn btn-success" role="button" value="Ajouter">
        </form>

        <?php
          if(isset($_POST['num']) and isset($_POST['pav'])){
            echo 'hghghg';
            $roomManager->addStudentIntoRoom($_POST['num'], $_SESSION['carte']);
            echo '<script>alert("chambre bien ajoute"); </script>';
          }
         ?>

  </body>
</html>
