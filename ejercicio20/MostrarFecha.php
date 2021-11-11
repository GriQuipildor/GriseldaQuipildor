<?php
    require 'fecha.php';
    date_default_timezone_set('America/Buenos_Aires');
    $fecha = fecha::getFecha();
    $horario = fecha::getHora();

    echo 'La fecha de hoy es: '.$fecha.' y la hora es: '.$horario;