
    <?php
        require_once '../assets/bootstrap.php';
        require_once '../controllers/Etudiant.php';
       ?>
    <form class="form w-25" method="POST" action="login.php">
      <div class="form-label-group">
        <label for="log" class="">Numero carte etudiant</label>
        <input type="text" class="form-control" id="log" name="login" placeholder="numero carte" />
      </div>
      <div class="form-label-group">
        <label for="pwd" class="">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" />
      </div>
      <div class="form-label-group">
        <input type="submit" class="btn btn-primary ml-4 mt-2" name="" value="Codifier">
      </div>
    </form>

    <?php
      if(isset($_POST['login'])){
        $studentManager = new Etudiant();
        $student = $studentManager->login($_POST['login'], $_POST['pwd']);
        var_dump($student);
      }
    ?>
