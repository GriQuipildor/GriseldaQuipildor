<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio6</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha de nacimiento</th>
            <th>Correo electronico</th>
            <th>Provincia</th>
            <th>Donante</th>    
        </tr>
        <tr>
            <td><?php echo $_POST["nombre"];?></td>
            <td><?php echo $_POST["apellido"];?></td>
            <td><?php echo $_POST["dni"];?></td>
            <td><?php echo $_POST["fechaNac"];?></td>
            <td><?php echo $_POST["email"];?></td>
            <td><?php echo $_POST["provincia"];?></td>
            <td><?php echo $_POST["donante"];?></td>
        </tr>
    </table>
</body>
</html>