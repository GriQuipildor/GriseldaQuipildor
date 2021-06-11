<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if ($usuario === "" || $contraseña === ""){
    // json_encode porque fetch recibe resp en formato json
    echo json_encode ("Complete los campos");
}else {
    echo json_encode ("<br>Usuario:".$usuario."<br>Contraseña:".$contraseña);
}