<?php

function get_current_date()
{
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $current_date = strftime("%d de %B de %Y", strtotime('today'));
    return $current_date;
}

function get_current_week_day()
{
    $week_days = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado');
    $current_week_day_number = date('w', strtotime(date('Y-m-d')));
    $current_week_day = $week_days[$current_week_day_number];
    return $current_week_day;
}
