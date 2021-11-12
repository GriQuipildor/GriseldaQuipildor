<?php
require_once 'Persona.php';
require_once 'Empleado.php';
require_once 'Cliente.php';
// require_once 'trait.php';

// var_dump($_POST);
$nombreE = $_POST["nombreE"];
$apellidoE = $_POST["apellidoE"];
$edadE = $_POST["edadE"];
$nroEmpl = $_POST["nroEmpl"];
$puesto = $_POST["puesto"];

$nombreCl = $_POST["nombreCl"];
$apellidoCl = $_POST["apellidoCl"];
$edadCl= $_POST["edadCl"];
$nroCl = $_POST["numCl"];
$dniCl = $_POST["dniCl"];

$depositar = $_POST["depositar"];

$monto = $_POST["monto"];


$cliente = new Cliente($nombreCl, $apellidoCl, $nroCl);
$cliente->mostrarDatos();




?>