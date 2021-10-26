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
$rolUsuario = $mostrar['rolUsuario'];
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>Nombre de Usuario</label>
        <input type="text" name="Nombre de Usuario" value="<?php echo $NombreUsuario; ?>"> <br>
	<label>Contraseña del usuario</label>
        <input type="text" name="Contraseña del usuario" value="<?php echo $ContrasenaUsuario; ?>"> <br>
	<label>Nombre Completo del Usuario</label>
        <input type="text" name="Nombre Completo del Alumno" value="<?php echo $NombreCompleto; ?>"> <br>
	<label>Correo del Usuario</label>
        <input type="text" name="Correo del Alumno" value="<?php echo $emailUsuario; ?>"> <br>
	<label>Rol del Usuario</label>
        <select name="Rol del Usuario" value="<?php echo $rolUsuario; ?>">
            <option value="Usuario">Usuario</option>
            <option value="Admnistrador">Administrador</option>
        </select> <br>
        <br>
    <input type="submit" name="Enviar" value="ACTUALIZAR"> <br>
    <br>
    <a href="alumnos.php">REGRESAR</a>
</form>


<?php
    mysqli_close($connection);
?>