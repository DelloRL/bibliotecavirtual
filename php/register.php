<?
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);

if (isset($_POST['submit'])) {
    $user = $_POST ['usuario'];
    $email = $_POST ['email'];
    $password = md5($_POST ['contrasena']);
    $cpassword = md5($_POST ['ccontrasena']);

    if($password = $cpassword) {
        $sql = "INSERT INTO USUARIO (NombreUsuario, emailUsuario, ContraseñaUsuario)
                VALUES ('$user', '$email', '$password')";
        $result = mysqli_query($connection, $sql);
        if(!$result) {
            echo "Algo saliò mal"
        } else {
            echo "La contraseña no coincide"
        }
}
}
?>