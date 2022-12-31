<?php
session_start();

include '../db/connect.php';
include '../helpers/clear.php';
include '../api/index.php';
include '../helpers/handle_date.php';

$city = clear($_POST['city']);

$data = get_weather_data($city);

if (isset($data["message"]) && $data["message"] == "city not found") {
    $_SESSION["error_msg"] = "CIDADE NÃO ENCONTRADA!";
}

$name = $data['name'];
$country = $data['sys']['country'];
$temp = intval($data['main']['temp']);
$weather = $data['weather'][0]['description'];
$week_day = get_current_week_day();
$date = get_current_date();
$icon = $data['weather'][0]['icon'];
$pressure = intval($data['main']['pressure']);
$humidity = intval($data['main']['humidity']);
$wind = $data['wind']['speed'];
$temp_max = intval($data['main']['temp_max']);
$temp_min = intval($data['main']['temp_min']);
$feels_like = intval($data['main']['feels_like']);
