<!DOCTYPE html>
<html>
<head>
    <title>guardar</title>
</head>
<body>
    <?php
        $id=$_REQUEST['id'];

        include("conexon.php");

        $query="SELECT * FROM Usuarios WHERE id='$id'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
    ?>

    <form action="modificarproceso.php?id=<?php echo $row['id'];?>" method="POST">
        <br/><br/><br/>
        <input type="text" required name="nombre" placeholder="nombre..." value="<?php echo $row['nombre']; ?>" /><br/><br/>
        <input type="text" required name="apellido" placeholder="apellido..." value="<?php echo $row['apellido']; ?>" /><br/><br/>
        <input type="text" required name="correo" placeholder="correo..." value="<?php echo $row['correo']; ?>" /><br/><br/>
        <input type="submit" value="aceptar" />
    </form>
</body>
</html>       
