<?php
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

$user = $_POST["usuario"];
print 'El usuario es ' . $user . '<br>';
$contrasena = $_POST["contrasena"];
print 'La contraseña es ' . $contrasena . '<br>';

if (!$connection){
    echo "No se ha podido conectar con el servidor" . mysqli_error();
}
else {
    echo "Hemos conectado al servidor <br>";
}

$db = mysqli_select_db($connection,$database);

if(!$db){
    echo "No se ha podido encontrar la base de datos <br>";
}
else {
    echo "Tabla seleccionada <br>";
    $consulta = "SELECT * FROM USUARIO where NombreUsuario = '".$user."' and ContraseñaUsuario = '".$contrasena."' ";
    echo $consulta . "<br>";
    $result = mysqli_query($connection,$consulta);
    $fila = mysqli_fetch_array($result);
}

session_start();
$_SESSION['usuario'] = $consulta;

if(mysqli_num_rows($result)!=1){
    echo "Usuario no válido. <br>";
}
else{
    $cUsuario = $fila['NombreUsuario'];
    echo "<br>Bienvenido " . $cUsuario . ".";
    header( "refresh:5; url=../views/paginaPrincipal.php" );
}

mysqli_close( $connection );

?>