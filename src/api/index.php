<?php
define('API_KEY', '13e0954c5a11e3b6ee791959e1ffcd09');
define('API_COUNTRY_URL', 'https://countryflagsapi.com/png/');
define('API_UNSPLASH', 'https://source.unsplash.com/1600x900/?city+');

function get_weather_data($city)
{
    $api_weather_url = 'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&appid=' . API_KEY . '&lang=pt_br';

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $api_weather_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    return json_decode($response, true);
}

