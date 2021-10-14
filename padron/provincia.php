<?php
include_once("config_bd.php");

// Query a la BD para traer las provincias

//$provincias = "Buenos Aires";

// $query =    "SELECT *
//             FROM provincias
//             ORDER BY nombre ASC";


$query =    "SELECT DISTINCT provincia as nombre
            FROM personas
            ORDER BY provincia ASC";
$resultado = mysqli_query($mysqli, $query);

$provincias = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $provincias[] = $fila;
}

echo json_encode($provincias);
?>