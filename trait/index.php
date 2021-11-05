<?php
require 'class.php';
trait Saludar{
    function decirHola(){
        echo 'Hola<br>';
    }
    abstract public function getName();
}
// class Comunicar{
//     use Saludar, Despedir;
// }
// $aux = new Comunicar;
// $aux->decirHola();
// $aux->decirChau();

trait Despedir{
    function decirChau(){
        echo 'Chau';
    }
}
?>