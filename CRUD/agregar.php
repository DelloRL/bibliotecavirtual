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
    <title>AGREGAR</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <?php
        if(isset($_POST['Enviar'])){
            $autorLibro=$_POST['autorLibro'];
            $nombreLibro=$_POST['nombreLibro'];
            $editorialLibro=$_POST['editorialLibro'];
            $fechaLibro=$_POST['fechaLibro'];
            $pdfLibro=$_POST['pdfLibro'];
            $imagenLibro=$_POST['imagenLibro'];

            include("conexion.php");
            //insert into libro(idLibro, autorLibro, nombreLibro, editorialLibro, fechaLibro, pdfLibro, imagenLibro)
            //values ($idLibro, $autorLibro, $nombreLibro, $editorialLibro, $fechaLibro, $pdfLibro, $imagenLibro);
            $sql="insert into libro(autorLibro, nombreLibro, editorialLibro, fechaLibro, pdfLibro, imagenLibro)
            values('".$autorLibro."', '".$nombreLibro."', '".$editorialLibro."', '".$fechaLibro."', '".$pdfLibro."', '".$imagenLibro."')";

            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                //Los datos ingresaron a la base de datos
                echo "<script languaje='JavaScript'>
                        alert('Los datos fueron ingresados correctamente a la base de datos');
                        location.assign('index.php');
                        </script>";
            }else{
                //Los datos NO ingresaron a la base de datos
                echo "<script languaje='JavaScript'>
                        alert('ERROR Los datos NO fueron ingresados correctamente a la base de datos');
                        location.assign('index.php');
                        </script>";
            }
            mysqli_close($conexion);
        }else
    ?>
    <h1>Agregar nuevo libro</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Autor del libro</label>
        <input type="text" name="Autor del libro"> <br>
		<label>Nombre del libro</label>
        <input type="text" name="Nombre del libro"> <br>
		<label>Editorial del libro</label>
        <input type="text" name="Editorial del libro"> <br>
		<label>Fecha del libro</label>
        <input type="text" name="Fecha del libro"> <br>
		<label>Pdf del libro</label><br>
        <input type="file" name="Pdf del libro" accept=".pdf" /><br>
		<label>Imagen del libro</label><br>
        <input type="file" name="Imagen del libro" accept=".jpeg,.jpg,.png"/><br>
        <input type="submit" name="Enviar" value="AGREGAR">
        <a href="index.php">REGRESAR</a>
    </form>

</body>
</html>