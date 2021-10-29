<?php
include_once("conexionBaseDatos.php");
$dniM = $_POST["dni"];

$query = "SELECT nombre, apellido, sexo 
FROM  `personas`
WHERE dni = '$dniM' and sexo LIKE 'n'";

$resultado = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_assoc($resultado));
?>