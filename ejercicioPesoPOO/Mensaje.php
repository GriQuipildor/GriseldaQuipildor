<?php
    require 'personaClass.php';
    $persona1 = new Persona();
    $persona1->nombre   = 'Javier';
    $persona1->apellido = 'Parra';
    $persona1->peso     = '85';
    $persona1->presentar();

    $persona2 = new Persona();
    $persona2->nombre   = 'Brian';
    $persona2->apellido = 'Martinez';
    $persona2->peso     = '70';
    $persona2->presentar();

    if ($persona1->peso > $persona2->peso) {
        echo 'El más pesado es: '.$persona1->nombre;
    }else{
        echo 'El más pesado es: '.$persona2->nombre;
    }