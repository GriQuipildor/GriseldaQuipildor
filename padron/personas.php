<?php
include_once("config_bd.php");

$dni = $_POST["dni"];
$sexo = $_POST["sexo"];

// dni pruebas: 34608031


// Buscar en la base de datos en que colegio vota esta persona
$colegio = '';
$query =    "SELECT c.nombre, c.direccion, c.numero
            FROM personas p INNER JOIN colegios c ON p.colegio_id = c.colegio_id 
            WHERE dni = $dni";
$resultado = mysqli_query($mysqli, $query);            
// var_dump(mysqli_fetch_assoc($resultado));die;

// Devolver colegio
echo json_encode(mysqli_fetch_assoc($resultado));

?>