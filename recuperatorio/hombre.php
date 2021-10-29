<?php
include_once("conexionBaseDatos.php");
$dniH = $_POST["dni"];

$query = "SELECT nombre, apellido, sexo 
FROM  `personas`
WHERE dni = '$dniH' and sexo LIKE 'm'";

$resultado = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_assoc($resultado));
?>