<?php
class Vehiculo{
    public $motor = false;
    public $marca;

    public function estado(){
        if ($this->motor == true){
            echo 'El motor esta encendido <br>';
        }else{ 
            echo 'El motor esta apagado <br>';
        }
    }
    
    public function encender(){
        if($this->motor == true){
            echo "cuidado, ya esta encendido<br>";
        }else{
            echo "ahora esta encendido<br>";
        $this->motor = true;
        }
    }

    public function apagar(){
        if ($this->motor == false) {
            echo "El motor esta apagado<br>";
        }else{
            echo "Ahora el motor esta apagado";
        $this->motor = false;
        }
    }
}