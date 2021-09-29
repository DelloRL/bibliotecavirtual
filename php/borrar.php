<?php
//Conexión a la base de datos.
$host = "localhost";
$alerta;
$connection = mysqli_connect('localhost', 'root', '', 'bibliotecavirtual') or die ('error en la base de datos');

$sql = " DELETE FROM libro WHERE clave = '$_REQUEST[clave]'";

mysqli_query($con,$sql);
mysqli_close($con);

echo "Borrado Exitoso";
header( "refresh:5;url=#" );
?>