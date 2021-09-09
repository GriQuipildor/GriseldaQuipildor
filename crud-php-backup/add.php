<html>
<head>
	<title>Agregar datos</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos/estilosCrud.css">
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
		echo "<div class='centrarContenido alert alert-danger tablaResultado'>";		
		if(empty($name)) {
			echo "<font color='black'>El campo <b>nombre</b> esta vacío.</font><br/>"; 
		}
		
		if(empty($age)) {
			echo "<font color='black'>El campo <b>edad</b> esta vacío.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='black'>El campo <b>email</b> esta vacío.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a class='btn btn-dark' href='javascript:self.history.back();'>Volver</a>";
		echo "</div>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
		//display success message
		echo "<div class='centrarContenido alert alert-success tablaResultado'>";
		echo "<font color='black'>Datos agregados con éxito.<br>" ;
		echo "<br/><a class='btn btn-dark' href='index.php'>Ver resultados</a>";
		echo "</div>";
	}
}
?>
</body>
</html>
