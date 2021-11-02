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


$sql = "SELECT * FROM usuario WHERE idUsuario = idUsuario";
$resultado = mysqli_query($connection, $sql);

$mostrar= mysqli_fetch_array($resultado);

$idUsuario = $mostrar['idUsuario'];
$NombreUsuario = $mostrar['NombreUsuario'];
$ContrasenaUsuario = $mostrar['ContrasenaUsuario'];
$NombreCompleto = $mostrar['NombreCompleto'];
$emailUsuario = $mostrar['emailUsuario'];
$rolUsuario = $mostrar['idRol'];
?>

<form action="procesarActualizar.php" method="POST">
  
        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>"> <br>
    <label>Nombre de Usuario</label>
        <input type="text" name="NombreDeUsuario" value="<?php echo $NombreUsuario; ?>"> <br>
	<label>Contraseña del usuario</label>
        <input type="text" name="ContraseñaDelUsuario" value="<?php echo $ContrasenaUsuario; ?>"> <br>
	<label>Nombre Completo del Usuario</label>
        <input type="text" name="NombreCompletoDelAlumno" value="<?php echo $NombreCompleto; ?>"> <br>
	<label>Correo del Usuario</label>
        <input type="text" name="CorreoDelAlumno" value="<?php echo $emailUsuario; ?>"> <br>
	<label>Rol del Usuario</label>
        <select name="RolDelUsuario" value="<?php echo $rolUsuario; ?>">
            <option value="Usuario" <?php if ($rolUsuario ="Usuario") {echo "selected"; } ?>>Usuario</option>
            <option value="Admnistrador" <?php if ($rolUsuario ="Administrador"){ echo 'selected';}?>>Administrador</option>
        </select> <br>
        <br>
    <input type="submit" name="Enviar" value="ACTUALIZAR"> <br>
</form>
<br>
<a href="alumnos.php">REGRESAR</a>



<?php
    mysqli_close($connection);
?>