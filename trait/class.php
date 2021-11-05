<?php
class Comunicar{
    use Saludar, Despedir;
    public function getName(){

    }
}
$aux = new Comunicar;
$aux->decirHola();
$aux->decirChau();
?>