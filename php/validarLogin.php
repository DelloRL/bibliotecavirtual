<?php

session_start();


//Conexion a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

$user = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

if (!$connection){
    echo "No se ha podido conectar con el servidor" . mysqli_error();
}
else {
    echo "Hemos conectado al servidor. <br>";
    
}

$db = mysqli_select_db($connection,$database);

if(!$db){
    echo "No se ha podido encontrar la base de datos <br>";
}
else {
    $consulta = "SELECT * FROM USUARIO where NombreUsuario = '".$user."' and ContrasenaUsuario = '".$contrasena."' ";
    $result = mysqli_query($connection,$consulta);
    $fila = mysqli_fetch_array($result);
}


if(mysqli_num_rows($result)!=1){
    echo "Usuario no válido. <br>";
    header( "refresh:5; url=../views/LoginYRegistro.html" );
}
else{
    $_SESSION['usuario'] = $user;
    $cUsuario = $fila['NombreUsuario'];
    echo "<br>Bienvenido, " . $cUsuario . ".";
    header( "refresh:5; url=../views/paginaPrincipal.php" );
}

mysqli_close( $connection );

?>