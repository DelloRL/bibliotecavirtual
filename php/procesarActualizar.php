<?php
//Conexión a la base de datos.
$dbname="bibliotecavirtual";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$idUsuario = $_POST['idUsuario'];
$NombreUsuario = $_POST['NombreDeUsuario'];
$ContrasenaUsuario = $_POST['ContraseñaDelUsuario'];
$NombreCompleto = $_POST['NombreCompletoDelAlumno'];
$emailUsuario = $_POST['CorreoDelAlumno'];
$rolUsuario = $_POST['RolDelUsuario'];

//Actualizar los datos
$sql = "UPDATE usuario 
        SET NombreUsuario = '$NombreUsuario', ContrasenaUsuario = '$ContrasenaUsuario', NombreCompleto = '$NombreCompleto',
        emailUsuario = '$emailUsuario', idRol = '$rolUsuario' 
        WHERE idUsuario = '$idUsuario'";
$result=mysqli_query($connection, $sql);

if ($result) {
    echo "<script> alert('Se han actualizado los datos correctamente') </script>";
    header("Location: alumnos.php");
} else {
    echo "<script> alert('No se han podido actualizar los datos') window.history.go(-1); </script>";
}
?>