<?php
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == null || $varsession = '' ){
    echo 'Usted no tiene autorización para ver esta página, inicie sesiòn o regìstrese. ';
    header( "refresh:5; url=../views/LoginYRegistro.html" );
    die();
}
?>

<html>
<head>
    <title>Lista de libros</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminaran los datos');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://kit.fontawesome.com/db956a52fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
    include("conexion.php");
    //select * from libro
    $sql="SELECT * FROM libro";
    $resultado=mysqli_query($conexion, $sql);
?>
    <a href="../views/paginaPrincipal.php">Home</a>
    <h1>Lista de libros</h1>
    <a href="agregar.php">Nuevo libro</a><br><br>
    <table border='1'>
        <thead>
            <tr>
				<th>ID del libro</th>
				<th>Autor del libro</th>
				<th>Nombre del libro</th>
				<th>Editorial del libro</th>
				<th>Fecha del libro</th>
				<th>Pdf del libro</th>
				<th>Imagen del libro</th>
                <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td> <?php echo $filas['idLibro'] ?> </td>
                <td> <?php echo $filas['autorLibro'] ?> </td>
                <td> <?php echo $filas['nombreLibro'] ?> </td>
                <td> <?php echo $filas['editorialLibro'] ?> </td>
                <td> <?php echo $filas['fechaLibro'] ?> </td>
                <td> <?php echo $filas['pdfLibro'] ?> </td>
                <td> <?php echo $filas['imagenLibro'] ?> </td>
                <td> 
<?php echo "<a href='editar.php?id=".$filas['idLibro']."'>EDITAR</a>
    "; ?>
<?php echo "<a href='eliminar.php?id=".$filas['idLibro']."' >ELIMINAR</a>
    "; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>