<?php
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == null || $varsession = '' ){
    echo 'Usted no tiene autorización para ver esta página, inicie sesiòn o regìstrese. ';
    header( "refresh:5; url=../views/LoginYRegistro.html" );
    die();
}
?>

<?php
//Conexión a la base de datos.
$dbname="bibliotecavirtual";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$connection=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
</head>

<body>
<a href="../views/paginaPrincipal.php">Home</a> <br>
<br>
<table border='1'>
    <tr>
        <td>id</td>
        <td>Usuario</td>
        <td>Contraseña</td>
        <td>Nombre Completo</td>
        <td>Email</td>
        <td>Rol</td>
    </tr>

<?php
    //SELECT
    $sql="SELECT * FROM usuario";
    $result=mysqli_query($connection, $sql);

    while($mostrar = mysqli_fetch_array($result)){
?>

    <tr>
        <td> <?php echo $mostrar['idUsuario'] ?> </td>
        <td> <?php echo $mostrar['NombreUsuario'] ?> </td>
        <td> <?php echo $mostrar['ContrasenaUsuario'] ?> </td>
        <td> <?php echo $mostrar['NombreCompleto'] ?> </td>
        <td> <?php echo $mostrar['emailUsuario'] ?> </td>
        <td> <?php echo $mostrar['idRol'] ?> </td>
        <td> <?php echo "<a href='editarAlumno.php?id=".$mostrar['idUsuario']."'>EDITAR</a>"; ?> </td>
        <td> <?php echo "<a onClick=\"javascript: return confirm('Desea eliminar este usuario? Este cambio no puede revertirse.');\" href='eliminarAlumno.php?id=".$mostrar['idUsuario']."'> ELIMINAR </a>"; ?> </td>
    </tr>

<?php
    }
?>

</table>
</body>

<?php
    mysqli_close($connection);
?>

</html>


