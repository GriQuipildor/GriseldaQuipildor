<?php
class Comunicar{
    //use para acceder a los traits
    use Saludar, Despedir;
    public function getName(){

    }
}
$aux = new Comunicar;
$aux->decirHola();
$aux->decirChau();
?>