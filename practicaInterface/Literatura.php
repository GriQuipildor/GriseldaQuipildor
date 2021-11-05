<?php
require 'Interface.php';
class Literatura implements Lectura, Escritura, Gramatica{
    public function getLectura(){
        echo 'Libro favorito';
    }

}

?>