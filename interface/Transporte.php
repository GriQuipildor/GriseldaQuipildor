<?php
require 'Interface.php';
class Transporte implements Automovil{

    public function getColor(){
        echo 'azul <br>';
    }

    public function getRuedas(){
        echo 'asd';
    }
} 
    $aux = new Transporte;
    $aux->getColor();
    $aux->getRuedas();


?>