<?php

$server = "localhost";
$db = "formulario";
$user = "root";
$passwd = "";

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$fecha=$_POST['fecha_nacimiento'];
$sexo=$_POST['genero'];


$conexion = mysqli_connect($server, $user, $passwd, $db);

$sql = "INSERT INTO clientes (nombre, apellido1, apellido2, fec_nacimiento, sexo) VALUES ('$nombre','$apellido1','$apell
ido2','$fecha','$sexo')";

mysqli_query($conexion, $sql);
mysqli_close($conexion);


$resultado= "Usuario $nombre $apellido1 $apellido2, con el genero: '$sexo', nacido/a el dia: '$fecha' introducido correc
tamente en la Base de Datos";

?>

<!DOCTYPE html>
<html>
<head>
        <title>Formulario</title>
</head>
<body>

        <h1> <?php echo $resultado; ?> </h1>

</body>
</html>