<?php
require_once 'src/db/connect.php';
require_once 'src/helpers/insert_card.php';


$sql = $pdo->prepare("SELECT * FROM city");
$sql->execute();
$cities = $sql->fetchAll();

if (count($cities) > 0) {

    $cities = array_reverse($cities);

    foreach ($cities as $city) {
        lapidate_city_name($city["name"]);
        insert_card($city);
    }
    
} else {
    echo '
    <div class="empty">
        <strong>Nenhuma cidade cadastrada!</strong>
    </div>
    ';
}
