<?php
include_once("conexionBaseDatos.php");
$dni = $_POST["dni"];

$query = "SELECT nombre, apellido, fec_nac, sexo FROM `personas` WHERE dni = '$dni'";

$resultado = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_assoc($resultado));
?>