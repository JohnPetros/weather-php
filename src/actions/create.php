<?php

require_once '../helpers/get_weather_data.php';


$sql = $pdo->prepare("INSERT INTO city (name, country, temp, weather, week_day, date, icon, pressure, humidity, wind, temp_max, temp_min, feels_like) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$sql->execute(array($name, $country, $temp, $weather, $week_day, $date, $icon, $pressure, $humidity, $wind, $temp_max, $temp_min, $feels_like))) {
    if (strpos($sql->errorInfo()[2], "Duplicate") !== false) {
        $_SESSION["error_msg"] = "CIDADE JÁ CADASTRADA!";
    }
}

header('location: ../../index.php');
