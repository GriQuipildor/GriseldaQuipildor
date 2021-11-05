<?php
require 'interfacePersona.php';
class Persona implements Favoritos{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function MayorEdad(){
        if ($this->edad >= 18) {
            echo 'Es mayor de edad: ' .$this->edad;
        }
        else{
            echo 'No es mayor de edad: <br>';
        }
    }
    public function NombreCompleto(){
        echo '<br>Nombre: '.$this->nombre.'<br>Apellido: '.$this->apellido;
    }

    public function getColorFavorito(){
        echo 'Rojo <br>';
    }
    public function getCancionFavorita(){
        echo 'Bohemian Rhapsody';
    }
}
    $aux = new Persona($nombre, $apellido, $edad);
    $aux->getColorFavorito();
    $aux->getCancionFavorita();

?>