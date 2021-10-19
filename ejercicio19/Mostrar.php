<?php
    require 'clases/Coche.php';
    $auto = new Coche(2010, 'rojo', 250);
    $auto->mostrarInfo();
    //echo $auto->getColor();

    $auto->estado();
    $auto->encender();
    