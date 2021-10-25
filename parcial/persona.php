<?php
include_once("conexionBaseDatos.php");
$dni = $_POST["dni"];

$query = "SELECT nombre, apellido, sexo, TIMESTAMPDIFF(YEAR,fec_nac,CURDATE()) AS edad FROM `personas` WHERE dni = '$dni'";

$resultado = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_assoc($resultado));
?>