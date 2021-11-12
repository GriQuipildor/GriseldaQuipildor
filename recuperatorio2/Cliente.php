<?php
require_once 'Persona.php';
class Cliente extends Persona{
    public $nroCliente;
    public $dni;

    public function mostrarDatos(){
        // echo 'Cliente: '.$this->apellido.', '.$this->nroCliente;
}
}

?>