<?php
    // dominio de BD
    $databaseHost = 'localhost';
    // nombre de BD
    $databaseName = 'registrar';
    $databaseUsername = 'root';
    $databasePassword = '';

    $conexionBd = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>