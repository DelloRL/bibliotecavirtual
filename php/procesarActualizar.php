<?php
//Conexión a la base de datos.
$dbname="bibliotecavirtual";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$idUsuario = $_POST['idUsuario'];
$NombreUsuario = $_POST['NombreUsuario'];
$ContrasenaUsuario = $_POST['ContrasenaUsuario'];
$NombreCompleto = $_POST['NombreCompleto'];
$emailUsuario = $_POST['emailUsuario'];
$rolUsuario = $_POST['rolUsuario'];

$sql = "UPDATE usuario SET NombreUsuario = '$NombreUsuario', ContrasenaUsuario = '$ContrasenaUsuario', NombreCompleto = '$NombreCompleto',
emailUsuario = '$emailUsuario', rolUsuario = '$rolUsuario' WHERE idUsuario = '$idUsuario'";

$result=mysqli_query($connection, $sql);

if ($result) {
    echo "<script> alert('Se han actualizado los datos correctamente') </script>";
    header( "refresh:5; url=alumnos.php");
} else {
    echo "<script> alert('No se han podido actualizar los datos') window.history.go(-1); </script>";
}
?>