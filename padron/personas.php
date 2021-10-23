<?php
include_once("config_bd.php");

$dni = $_POST["dni"];
$sexo = $_POST["sexo"];
$provincia = $_POST["provincia"];

// dni pruebas: 34608031 sexo: i
// Buscar en la base de datos en que colegio vota esta persona
$query =    "SELECT c.nombre, c.direccion, c.numero, p.nombre as nombreP, p.apellido
            FROM personas p INNER JOIN colegios c ON p.colegio_id = c.colegio_id 
            WHERE dni = $dni and provincia = '$provincia' and sexo = '$sexo'";

//mysqli_query: manda la consulta a la bd, la ejecuta y trae el resultado
$resultado = mysqli_query($mysqli, $query);            
//var_dump(mysqli_fetch_assoc($resultado));die;

// Devolver colegio
echo json_encode(mysqli_fetch_assoc($resultado));

?>