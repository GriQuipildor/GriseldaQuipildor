<?php
require 'Persona.php';

class Profesor extends Persona{
    public $dni;
    public $carrera;
    public $materia;

    public function __construct(){
        $this->dni = $dni;
        $this->carrera = $carrera;
        $this->materia = $materia;
    }
    public function nombreCompleto();
}




?>