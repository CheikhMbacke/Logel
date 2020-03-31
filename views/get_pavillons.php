<?php
    require_once '../assets/bootstrap.php';
    require_once '../controllers/Pavillon.php';

    $pavillonManager = new Pavillon();
    $pavillons = $pavillonManager->getAttribute("libelle");

?>
    <ul class="list-group">
    <?php
        while ($data = $pavillons->fetch()) {
            ?>
            <li class="list-group-item"><?php echo $data["libelle"];?>
            <a href='get_rooms.php?nomPav=<?php echo $data["libelle"];?>' style="float:right">Voir les chambres</a>
            </li>
        <?php } ?>
    </ul>

    <a href="/logelv2/views" class="btn btn-info sm mt-5">< BACK</a>
      <a href="/logelv2/views/add-room.php" class="btn btn-success mt-5 ml-2">BACK</a>
