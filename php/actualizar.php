<?php
//Conexión a la base de datos.
$host = "localhost";
$alerta;
$connection = mysqli_connect('localhost', 'root', '', 'bibliotecavirtual') or die ('error en la base de datos');

$sql = "UPDATE libro SET clave = '$_REQUEST[clave]' 'autor = $_REQUEST[autor]','name = $_REQUEST[name]','editorial = $_REQUEST[editorial]','fecha = $_REQUEST[fecha]','pdf = $_REQUEST[pdf]','imagen = $_REQUEST[imagen]";

mysqli_query($con,$sql);
mysqli_close($con);

echo "Actualizacion Exitosa";
header( "refresh:5;url=#" );
?>