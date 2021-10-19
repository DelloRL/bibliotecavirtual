<?php
    $idLibro=$_GET['id'];
    include("conexion.php");

    //delete from libro where id=$id
    $sql="DELETE FROM libro WHERE idLibro=".$idLibro;
    echo $sql;
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
        echo "<script languaje='JavaScript'>
                alert('Los datos se eliminaron correctamente de la base de datos');
                location.assign('index.php');
                </script>";
    }else{
        echo "<script languaje='JavaScript'>
                alert('Los datos NO se eliminaron correctamente de la base de datos');
                location.assign('index.php');
                </script>";

    }
?>