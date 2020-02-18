<?php
    require_once '../assets/bootstrap.php';
    require_once '../controllers/Pavillon.php';

    $pavillonManager = new Pavillon();
    $pavillons = $pavillonManager->getAttribute("nomPavillon");

?>
    <ul class="list-group">
    <?php
        while ($data = $pavillons->fetch()) {
            ?>
            <li class="list-group-item"><?php echo $data["nomPavillon"];?>
            <a href='get_rooms.php?nomPav=<?php echo $data["nomPavillon"];?>' style="float:right">Voir les chambres</a>
            </li>
        <?php } ?>
    </ul>

    <a href="/logel/views" class="btn btn-info sm mt-5">< BACK</a>
    