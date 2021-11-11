<?php
require 'Interface.php';
class Parcial implements Lectura, Escritura, Gramatica{
    public function getLectura(){
        echo 'Libro favorito';
    }
    public function getEscritura()
    {
        echo 'Minusculas';
    }

    public function getGramatica()
    {
        echo 'correcta';
    }

}
$aux = new Parcial();
$aux->getLectura();
$aux->getEscritura();
$aux->getGramatica();
?>