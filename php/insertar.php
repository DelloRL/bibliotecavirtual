<?php
//Conexión a la base de datos.
$host = "localhost";
$alerta;
$connection = mysqli_connect('localhost', 'root', '', 'bibliotecavirtual') or die ('error en la base de datos');

//Insersión
$sql = "INSERT INTO `libro` (`idLibro`, `autorLibro`, `nombreLibro`, `editorialLibro`, `fechaLibro`, `pdfLibro`, `imagenLibro`) VALUES ('', '".$_POST["autor"]."', '".$_POST["name"]."', '".$_POST["editorial"]."', '".$_POST["year"]."', '".$_POST["pdf"]."', '".$_POST["imagen"]."')";
echo $sql;

$resultado=mysqli_query($connection, $sql) or die ('error en el query');

mysqli_close($connection);
echo "Inserción exitosa";
header( "refresh:5; url=../views/paginaPrincipal.php" );

?>