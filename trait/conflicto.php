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
class Reproductor{
    use Juego, Musica{
        // aqui llamo a la funcion Musica
        // Musica::Play insteadOf Juego;
        Juego::Play insteadOf Musica;
    }
}
$reproductor = new Reproductor;
$reproductor->Play();

?>