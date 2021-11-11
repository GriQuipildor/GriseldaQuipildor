<?php
class Auto{
    private $color;
    private $modelo;
    public function __construct($color, $modelo){
    $this->color = $color;
    $this->modelo = $modelo;
    }
public function get_color(){
    return $this->color;
}

public function get_modelo(){
    return $this->modelo;
}

public function set_color($color){
    $this->color = $color;
}

public function set_modelo($modelo){
    $this->color = $modelo;
}
}
$peugeot = new Auto ('Rojo', 2010);
 echo $peugeot->get_color();

//  cambiar color rojo y  verde

// $peugeot->set_color('verde');