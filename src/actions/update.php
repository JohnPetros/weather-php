<?php

$id = $_POST['update-id'];

require_once '../helpers/get_weather_data.php';

$sql = $pdo->prepare("UPDATE city SET name = ?, country = ?, temp = ?, weather = ?, week_day = ?, date = ?, icon = ?, pressure = ?, humidity = ?, wind = ?, temp_max = ?, temp_min = ?, feels_like = ? WHERE id = ?");

if ($sql->execute(array($name, $country, $temp, $weather, $week_day, $date, $icon, $pressure, $humidity, $wind, $temp_max, $temp_min, $feels_like, $id))) {
} else {
    if (strpos($sql->errorInfo()[2], "Duplicate") !== false) {
        $_SESSION["error_msg"] = "CIDADE JÁ CADASTRADA!";
    }
}
header('location: ../../index.php');
