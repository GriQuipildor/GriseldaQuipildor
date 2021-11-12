<?php
require_once 'Persona.php';
require_once 'trait.php';
class Profesor extends Persona{
    //'use' trait
    use Funciones;
    public $dni;
    public $carrera;
    public $materia;

    public function DatosProf($dni, $carr, $mat){
        $this->dni = $dni;
        $this->carrera = $carr;
        $this->materia = $mat; 
    }
   
}

?>