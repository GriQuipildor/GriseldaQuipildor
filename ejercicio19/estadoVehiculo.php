<?php
    require 'clases/Moto.php';
    $vehiculo = new Vehiculo();
    $vehiculo->estado();
    $vehiculo->encender();
    $vehiculo->estado();
    $vehiculo->encender();

    //$moto = new Moto();
    //$moto->estado();