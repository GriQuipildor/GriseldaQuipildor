<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/styleEj7.css">
</head>
<body>
    <div class="centrarContenido">
        <table class="table table-dark tablaResultado">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th> 
                    <th>Mensaje</th>  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST["nombre"];?></td>
                    <td><?php echo $_POST["email"];?></td>
                    <td><?php echo $_POST["mensaje"];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>