<?php
require_once 'PersonaInterface.php';
class Persona implements PersonaInterface{
    public $nombre;
    public $apellido;
    public $edad;
    
    public function __construct($nomb, $ape, $ed){
        $this->set_nombre($nomb);
        $this->set_apellido($ape);
        $this->set_edad($ed);
    }
    public function set_nombre($nomb){
        $this->nombre = $nomb;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function set_apellido($ape){
        $this->apellido = $ape;
    }
    public function get_apellido(){
        return $this->apellido;
    }
    public function set_edad($ed){
        $this->edad = $ed;
    }
    public function get_edad(){
        return $this->edad;
    }
    public function nombreCompl(){
        echo 'Nombre: '.$this->get_nombre();
        echo '<br>Apellido: '.$this->get_apellido().'<br>';
    }

}




?>