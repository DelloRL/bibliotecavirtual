<?php
//Conexión a la base de datos.
$host = "localhost";
$alerta;
$connection = mysqli_connect('localhost', 'root', '', 'bibliotecavirtual') or die ('error en la base de datos');

//Registro
$a = "INSERT INTO `usuario` (`idUsuario`, `NombreUsuario`, `ContraseñaUsuario`, `NombreCompleto`, `emailUsuario`) VALUES('', '".$_POST["txtUsuario"]."', '".$_POST["txtContraseña"]."', '".$_POST["txtNombre"]."', '".$_POST["txtCorreo"]."')";

echo $a;

$resultado=mysqli_query($connection, $a) or die ('error en el query');

mysqli_close($connection);
echo 'Se ha registrado correctamente';
header( "refresh:5; url=../views/paginaPrincipal.php" );
?>