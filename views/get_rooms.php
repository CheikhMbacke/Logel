<?php
    require_once '../assets/bootstrap.php';
    require_once '../controllers/Chambre.php';

    $roomManager = new Chambre();
    $roomDatas = $roomManager->getAttribute("*");

?>
    <table class="table w-75 content-center">
        <thead>
            <tr>
              <th scope="col">N° Chambre</th>
                <th scope="col">Genre logé</th>
            </tr>
        </thead>
        <tbody>

        <?php
            while ($roomData = $roomDatas->fetCH()) {
                ?>
            <tr>
              <td><?php echo $roomData["numero"];?></td>
                <td><?php echo $roomData["genre"];?></td>
            </tr>
                <?php
            }?>
        </tbody>
    </table>
    <a href="/logelv2/views/get_pavillons.php" class="btn btn-info mt-5">< BACK</a>
      <a href="/logelv2/views/add-room.php" class="btn btn-success mt-5 ml-2">Ajouter chambre</a>
