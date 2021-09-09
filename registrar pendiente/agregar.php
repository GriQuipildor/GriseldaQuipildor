<?php
    include_once("config.php");

    if(isset($_POST['Submit'])) {	
        $nombre = mysqli_real_escape_string($conexionBd, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($conexionBd, $_POST['apellido']);
        $email = mysqli_real_escape_string($conexionBd, $_POST['email']);
        $pass = mysqli_real_escape_string($conexionBd, $_POST['password']);

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
                
            //insert data to database
            //md5 encriptar contraseña
            $pass = md5($pass);
            $result = mysqli_query($conexionBd, "INSERT INTO usuario(nombre,apellido,email,password) VALUES('$nombre','$apellido','$email', '$pass')");
            
            //display success message
            echo "<div class='centrarContenido alert alert-success tablaResultado'>";
            echo "<font color='black'>Datos agregados con éxito.<br>" ;
            echo "<br/><a class='btn btn-dark' href='index.php'>Ver resultados</a>";
            echo "</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar datos</title>
    <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos/estilosCrud.css">
</head>
<body>
<a href="index.php" class="btn btn-dark botonHome">Inicio</a>
	<div class="centrarContenido">
		<h3>Agregar datos</h3>
	</div>
	<div class="recuadro tablaResultado">
		<form action="" method="post">
			<table width="100%">
				<tr> 
					<td><span class="tituloTabla">Nombre</span></td>
					<td><input type="text" name="nombre" class="form-control bordeRosa" required></td>
				</tr>
				<tr> 
					<td><span class="tituloTabla">Apellido</span></td>
					<td><input type="text" name="apellido" class="form-control bordeRosa" required></td>
				</tr>
				<tr> 
					<td><span class="tituloTabla">Email</span></td>
					<td><input type="email" name="email" class="form-control bordeRosa" required></td>
				</tr>
                <tr> 
					<td><span class="tituloTabla">Password</span></td>
					<td><input type="password" name="password" class="form-control bordeRosa" required></td>
				</tr>
			</table>
			<div class="centrarContenido botonAgregar">
				<input type="submit" name="Submit" value="Agregar" class="btn btn-dark">
			</div>
		</form>
	</div>
</body>
</html>