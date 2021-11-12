<?php
//obtengo los datos por POST

$nombre = $_POST["nombre"];
echo $_POST["apellido"];
echo $_POST["dni"];
echo $_POST["carrera"];
echo $_POST["materia"];
echo $_POST["edad"];

echo $_POST["nombreAl"];
echo $_POST["apellidoAl"];
echo $_POST["materiaAl"];
echo $_POST["edadAl"];

$alumno = new Alumno();

?>