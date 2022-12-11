<?php
require_once 'src/api/index.php';

function lapidate_city_name($name) {
    $name = str_replace(' ', '+', $name);
    return $name;
}

function insert_card($city)
{
    $card = '
<form action="./src/actions/delete.php" method="POST" class="card city">
    <div class="city-data" style="background-image: url(' . API_UNSPLASH . lapidate_city_name($city['name']) . ');">
        <main>
            <div class="city-name">
                <i class="fa-solid fa-location-dot"></i>
                <strong class="name">' .  $city['name'] . ' - ' . $city['country'] . '</strong>
                <img src="https://countryflagsapi.com/png/' . $city['country'] . '" id="country" class="country" alt="Bandeira do país" />
                <span class="date">' . $city['time'] . 'h</span>
                <span class="date">' . $city['date'] . '</span>
                <span class="day">' . $city['week_day'] . '</span>
            </div>
            <div>
            </div>
            <div class="city-weather">
                <i class="fa-solid fa-temperature-low"></i>
                <strong class="temp">' . $city['temp'] . '&deg;C</strong>
                <div class="weather">
                    <span class="weather-name">' . $city['weather'] . '</span>
                    <img src="http://openweathermap.org/img/wn/' . $city['icon'] . '.png" alt="Condições do tempo" id="weather-icon" />
                </div>
            </div>
        </main>
    </div>
    <div class="weather-data">
        <input type="hidden" id="delete-id" name="delete-id" value="' . $city['id'] . '" />
        <i id="button-close" class="fa-solid fa-x button delete-city"></i>
        <dl class="weather-data-list">
            <div class="item">
                <dt>Pressão atmos. <i class="fa-solid fa-cloud"></i></dt>
                <dd>' . $city['pressure'] . ' hPa</dd>
            </div>
            <div class="item">
                <dt>Umidade <i class="fa-solid fa-droplet"></i></dt>
                <dd>' . $city['humidity'] . ' %</dd>
            </div>
            <div class="item">
                <dt>Vento <i class="fa-solid fa-wind"></i></dt>
                <dd>' . $city['wind'] . ' km/h</dd>
            </div>
        </dl>
        <ul class="weather-data-plus">
            <li class="item max">
                <i class="fa-solid fa-sun"></i>
                <div class="title">
                    <span>Máx.</span>
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <strong>' . $city['temp_max'] . '&deg;C</strong>
            </li>
            <li class="item min">
                <i class="fa-solid fa-snowflake"></i>
                <div class="title">
                    <span>Min.</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
                <strong>' . $city['temp_min'] . '&deg;C</strong>
            </li>
            <li class="item feels">
                <i class="fa-solid fa-smog"></i>
                <div class="title">
                    <span>Sens. térmica</span>
                </div>
                <strong>' . $city['feels_like'] . '&deg;C</strong>
            </li>
        </ul>
        <button class="button change-city" type="button" value=' . $city['id'] . '>
            <i class="fa-solid fa-location-crosshairs"></i>Mudar cidade
        </button>
    </div>
</form>
    ';
    echo $card;
}
