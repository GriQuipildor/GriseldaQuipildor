<?php
	include_once("config.php");
	$email=$_POST["email"];
	$password=md5($_POST["password"]);

	$resultado = $mysqli->query("SELECT id, email FROM usuario WHERE email='$email' and password='$password'");
	if ($resultado->num_rows >= 1){
		// si encontro email
		while ($fila = $resultado->fetch_row()) {
        	// printf("%s (%s)\n", $fila[0], $fila[1]);
			echo 'Ingreso correcto: '.$fila[1];
    	}
	}else{
		echo "El email y contraseña ingresados no coinciden. Intente nuevamente.<br>";
		echo "Si no esta registrado, por favor registrese <a href='registrar.html'>aquí.</a>";
	}


	//die($password);
	//var_dump($password);
	//echo $password;
	//printf($password);

?>