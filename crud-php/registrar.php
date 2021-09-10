<?php
    include_once("config.php");

    if(isset($_POST['Submit'])) {	
        $nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

        // checking empty fields
        if(empty($nombre) || empty($apellido) || empty($email) || empty($pass)) {
            echo "<div class='centrarContenido alert alert-danger tablaResultado'>";		
            if(empty($nombre)) {
                echo "<font color='black'>El campo <b>nombre</b> esta vacío.</font><br/>"; 
            }
            
            if(empty($apellido)) {
                echo "<font color='black'>El campo <b>apellido</b> esta vacío.</font><br/>";
            }
            
            if(empty($email)) {
                echo "<font color='black'>El campo <b>email</b> esta vacío.</font><br/>";
            }
            
            if(empty($pass)) {
                echo "<font color='black'>El campo <b>contraseña</b> esta vacío.</font><br/>";
            }
            //link to the previous page
            echo "<br/><a class='btn btn-dark' href='javascript:self.history.back();'>Volver</a>";
            echo "</div>";
        } else { 
            // if all the fields are filled (not empty) 
            
//ver si ya esta registrado en la BD haciendo un SELECT

            //insert data to database
            //md5 encriptar contraseña
            $pass = md5($pass);
            $result = mysqli_query($mysqli, "INSERT INTO usuario(nombre,apellido,email,password) VALUES('$nombre','$apellido','$email', '$pass')");
            
            //display success message
            echo "<div class='centrarContenido alert alert-success tablaResultado'>";
            echo "<font color='black'>Datos agregados con éxito.<br>" ;
            echo "<br/><a class='btn btn-dark' href='index.php'>Volver</a>";
            echo "</div>";
        }
    }
?>