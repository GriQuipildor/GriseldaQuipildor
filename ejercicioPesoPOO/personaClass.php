<?php
class Persona {

    public $nombre;
    public $apellido;
    public $peso;

    public function presentar(){
        echo 'Mi nombre es '.$this->nombre.' '.$this->apellido.', mi peso es: '.$this->peso.'<br> <hr>';
    }
}