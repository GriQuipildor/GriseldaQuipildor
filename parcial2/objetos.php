<?php
require 'Persona.php';
require 'Profesor.php';
require 'motrar.php';

$profesor = new Profesor();
$profesor->nombreCompl();
echo $profesor;
?>