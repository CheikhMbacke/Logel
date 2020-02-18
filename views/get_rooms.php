<?php
    require_once '../assets/bootstrap.php';
    require_once '../controllers/Chambre.php';

    $roomManager = new Chambre();
    $roomDatas = $roomManager->getAttribute("*");

?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Pavillon</th>
                <th scope="col">Genre logé</th>
                <th scope="col">N° Chambre</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
            while ($roomData = $roomDatas->fetCH()) {
                if($roomData["nomPavillon"]== $_GET["nomPav"]){
                ?>
            <tr>
                <td><?php echo $roomData["nomPavillon"];?></td>
                <td><?php echo $roomData["typeChambre"];?></td>
                <td><?php echo $roomData["numeroChambre"];?></td>
            </tr>    
                <?php
            }}?>
        </tbody>
    </table>
    <a href="/logel/views/get_pavillons.php" class="btn btn-info mt-5">< BACK</a>