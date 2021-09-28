<?php
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

$sql = " DELETE FROM libro WHERE clave = '$_REQUEST[clave]'";

mysqli_query($con,$sql);
mysqli_close($con);

echo "Borrado Exitoso";
header( "refresh:5;url=#" );
?>