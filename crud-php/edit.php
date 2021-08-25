<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Editar Datos</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos/estilosCrud.css">
</head>

<body class="fondo">
	<a href="index.php" class="btn btn-dark botonHome">Inicio</a>
	<div class="centrarContenido">
		<h3>Editar datos</h3>
	</div>
	<div class="recuadro tablaResultado">
		<form name="form1" method="post" action="edit.php">
			<table width="100%">
				<tr> 
					<td><span class="tituloTabla">Nombre</span></td>
					<td><input class="form-control bordeRosa" type="text" name="name" value="<?php echo $name;?>"></td>
				</tr>
				<tr> 
					<td><span class="tituloTabla">Edad</span></td>
					<td><input class="form-control bordeRosa" type="text" name="age" value="<?php echo $age;?>"></td>
				</tr>
				<tr> 
					<td><span class="tituloTabla">Email</span></td>
					<td><input class="form-control bordeRosa" type="text" name="email" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input class="btn btn-dark" type="submit" name="update" value="Actualizar"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
