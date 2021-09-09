<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
        <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilosCrud.css">
</head>
<body>
    <!-- # porque se encuentra vacio -->
    <!-- <a href="#">Ingresar</a>
    <a href="registro.php">Registrar</a> -->
    <div class="recuadro tablaResultado">
        <form action="validarlogin.php" method="post">
            <table width="85%">
                <tr> 
                    <td><span class="tituloTabla">Email</span></td>
                    <td><input type="email" name="email" class="form-control bordeRosa" required></td>
                </tr>
                <tr> 
                    <td><span class="tituloTabla">Password</span></td>
                    <td><input type="password" name="password" class="form-control bordeRosa" required></td>
                </tr>
            </table>
            <div class="centrarContenido">
                <button type="submit" name="submit" class="btn btn-dark">Ingresar</button>
                <!-- <a class="btn btn-dark" href= "#">Ingresar</a> -->
                <a class="btn btn-dark" href="registrar.html">Registrar</a>
            </div>
        </form>
    </div>
</body>
</html>