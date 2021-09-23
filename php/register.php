<?php
$host = "localhost";
$alerta;

$connection = mysqli_connect('localhost', 'root', '', 'bibliotecavirtual') or die ('error en la base de datos');

$a = "INSERT INTO usuario VALUES(null, '".$_POST["txtUsuario"]."', '".$_POST["txtContraseña"]."', '".$_POST["txtNombre"]."', '".$_POST["txtCorreo"]."')";

echo $a;

$resultado=mysqli_query($connection, $a) or die ('error en el query');

mysqli_close($connection);

echo 'Se ha registrado correctamente';
header('location: ../views/paginaPrincipal.php');
?>