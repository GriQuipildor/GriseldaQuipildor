<?php
trait Juego{
    function Play(){
        echo 'Estoy jugando';
    }
}
trait Musica{
    function Play(){
        echo 'Estoy escuchando música';
    }
}
trait Fecha{
    function getFecha(){
        echo date("d/m/Y");
    }
}
trait Saludo{
    function getSaludo(){
        echo '<br> <mark>Hola mundo</mark>';
    }
}

class Reproductor{
    use Juego, Musica, Fecha, Saludo{
        // aqui llamo a la funcion Musica
        // Musica::Play insteadOf Juego;
        Juego::Play insteadOf Musica;
    }
}
$reproductor = new Reproductor;
$reproductor->Play();
$reproductor->getFecha();
$reproductor->getSaludo();

?>