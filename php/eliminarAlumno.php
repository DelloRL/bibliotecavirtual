<?php
//Conexión a la base de datos.
$dbname="bibliotecavirtual";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$idUsuario=$_GET['id'];
$sql = "DELETE FROM usuario WHERE idUsuario = ".$idUsuario;

mysqli_query($connection,$sql);
mysqli_close($connection);

echo "Borrado Exitoso";
header( "refresh:5 url=alumnos.php" );
?>