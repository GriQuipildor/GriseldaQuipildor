<?php
class Coche {
   public $modelo;
   public $color;
   public $velocidad;

   public function __construct ($modelo, $color, $velocidad){
    //llamo al metodo o funcion siempre dentro de la misma clase  
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = $velocidad;
    }

    public function getColor(){
        return $this->color;
    }

    public function mostrarInfo(){
        $info = "<h1>Información del coche</h1>";
        $info .= "Modelo: ". $this->modelo."<br>";
        $info .= "Velocidad: ". $this->velocidad."<br>";
        $info .= "Color: ". $this->getColor();
    echo $info;
    }
}
