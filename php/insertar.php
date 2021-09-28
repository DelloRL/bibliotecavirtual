<?php
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

$sql = " INSERT INTO libro (autorLibro, nombreLibro, editorialLibro, fechaLibro, pdfLibro, imagenLibro) 
VALUES ('$_REQUEST[autor]','$_REQUEST[name]','$_REQUEST[editorial]','$_REQUEST[fecha]','$_REQUEST[pdf]','$_REQUEST[imagen]',)";

mysqli_query($con,$sql);
mysqli_close($con);

echo "Inserciòn exitosa";
header( "refresh:5;url=#" );
?>