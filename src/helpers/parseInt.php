<?php

function parseInt($numbers)
{
    $numbers = array_map(function ($number) {
        return intval($number);
    }, $numbers);
    return $numbers;
}
