<?php
class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct ($nomb, $apell, $edad){
    $this->set_nombre($nomb);
    $this->set_apellido($apell);
    $this->set_edad($edad);
    }
    public function set_nombre($nom){
        $this->nombre = $nom;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function set_apellido($apell){
        $this->apellido = $apell;
    }
    public function get_apellido(){
        return $this->apellido;
    }
    public function set_edad($edad){
        $this->edad = $edad;
    }
    public function get_edad(){
        return $this->edad;
    }


}


?>