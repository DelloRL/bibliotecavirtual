<?php
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

$sql = "UPDATE libro SET clave = '$_REQUEST[clave]' 'autor = $_REQUEST[autor]','name = $_REQUEST[name]','editorial = $_REQUEST[editorial]','fecha = $_REQUEST[fecha]','pdf = $_REQUEST[pdf]','imagen = $_REQUEST[imagen]";

mysqli_query($con,$sql);
mysqli_close($con);

echo "Actualizacion Exitosa";
header( "refresh:5;url=#" );
?>