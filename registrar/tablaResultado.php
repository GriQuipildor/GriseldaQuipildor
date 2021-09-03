<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Tabla</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos/estilosCrud.css">
</head>

<body class="fondo">
<a href="registro.php" class="btn btn-dark botonHome">Agregar Nuevos Datos</a><br/><br/>

	<table width='80%'class="table table-bordered border-dark tablaDatos">
	<tr>
		<th><span class="tituloTabla">Nombre</span></th>
		<th><span class="tituloTabla">Edad</span></th>
		<th><span class="tituloTabla">Email</span></th>
		<th><span class="tituloTabla">Modificar</span></th>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a class='btn btn-dark btn-sm' href=\"edit.php?id=$res[id]\">Editar</a> <a class='btn btn-dark btn-sm' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Está seguro que desea eliminar este registro?')\">Borrar</a></td>";		
	}
	?>
	</table>
</body>
</html>
