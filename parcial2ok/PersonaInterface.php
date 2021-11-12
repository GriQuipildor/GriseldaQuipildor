<?php
interface PersonaInterface{
    public function get_nombre();
    public function set_nombre($nombre);

    public function get_apellido();
    public function set_apellido($apellido);

    public function get_edad();
    public function set_edad($edad);

    public function nombreCompl();
    
}



?>