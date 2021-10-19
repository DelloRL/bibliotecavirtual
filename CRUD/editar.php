<?php
    include("conexion.php");
?>
<html>
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <?php
        if(isset($_POST['Enviar'])){

            //aqui entra cuando se presiona el boton de enviar
        }else{
            //aqui entra si no se ha presionado el boton enviar
            $id=$_GET['id'];
            $sql="select * from libro where idLibro=".$id;
            $resultado=mysqli_query($conexion, $sql);

            $fila= mysqli_fetch_assoc($resultado);
            $idLibro=$fila["idLibro"];
            $autorLibro=$fila["autorLibro"];
            $nombreLibro=$fila["nombreLibro"];
            $editorialLibro=$fila["editorialLibro"];
            $fechaLibro=$fila["fechaLibro"];
            $pdfLibro=$fila["pdfLibro"];
            $imagenLibro=$fila["imagenLibro"];
        
            mysqli_close($conexion);
    ?>
    <h1>Editar Libros<h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>ID del libro</label>
        <input type="text" name="ID del libro" value="<?php echo $idLibro; ?>"> <br>
		<label>Autor del libro</label>
        <input type="text" name="Autor del libro" value="<?php echo $autorLibro; ?>"> <br>
		<label>Nombre del libro</label>
        <input type="text" name="Nombre del libro" value="<?php echo $nombreLibro; ?>"> <br>
		<label>Editorial del libro</label>
        <input type="text" name="Editorial del libro" value="<?php echo $editorialLibro; ?>"> <br>
		<label>Fecha del libro</label>
        <input type="text" name="Fecha del libro" value="<?php echo $fechaLibro; ?>"> <br>
		<label>Pdf del libro</label>
        <input type="text" name="Pdf del libro" value="<?php echo $pdfLibro; ?>"> <br>
		<label>Imagen del libro</label>
        <input type="text" name="Imagen del libro" value="<?php echo $imagenLibro; ?>"> <br>

        <input type="hidden" name="id" 
        value="<?php echo $idLibro; ?>">
        <input type="submit" name="Enviar" value="ACTUALIZAR">
        <a href="index.php">REGRESAR</a>
    </form>
    <?php
        }
    ?>
</body>
</html>