<?
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";
$connection = mysqli_connect($host, $user, $pass);


if (isset($_POST['register'])){
    if (strlen($_POST['txtNombre']) >= 1 && strlen($_POST['txtUsuario']) >= 1 && strlen($_POST['txtContraseña']) >= 1 && strlen($_POST['txtCorreo']) >= 1) {
        $name = $_POST['txtNombre'];
        $username = $_POST['txtUsuario'];
        $password = $_POST['txtContraseña'];
        $email = $_POST['txtCorreo'];
        $consulta = "INSERT INTO usuario(NombreUsuario, ContraseñaUsuario, NombreCompleto, emailUsuario) VALUES ('$name','$username','$password','$email')";
        $result = mysqli_query($connection,$consulta);
        if ($result){
            header('Location: paginaPrincipal.php');
        } else {
            echo "Algo salió mal.";
        }
    }
}

?>