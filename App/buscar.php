<?php
    $connection = mysqli_connect("localhost", "root", "", "bibliotecavirtual");


    $database="bibliotecavirtual";
    $db = mysqli_select_db($connection,$database);
    $salida= "";
    $query="SELECT * FROM libro ORDER By nombreLibro";


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
        if (isset($_POST['search'])){
            $q=$_POST['search'];
            $consulta = "SELECT idLibro, autorLibro, nombreLibro, editorialLibro, pdfLibro FROM libro WHERE nombreLibro LIKE'%" .$q. "%' OR autorLibro LIKE '%".$q."%' OR idLibro LIKE '%".$q."%'";
            $result = mysqli_query($connection,$consulta);
            $fila = mysqli_fetch_array($result);
        }
    }
    
    if(mysqli_num_rows($result)>0){
            $salida.="<table class='tabla_datos'>
            <table border='1'>
            <thead>
                <tr>
                    <th>ID del libro</th>
                    <th>Autor del libro</th>
                    <th>Nombre del libro</th>
                    <th>Link al Libro</th>
                    
                </tr>
            </thead>
            <tbody>";

            while($fila = mysqli_fetch_row($result)){
                
            $salida.="<tr>
                    <td>".$fila[0]."</td>
                    <td>".$fila[1]."</td>
                    <td>".$fila[2]."</td>
                    <td> <a href='".$fila[4]."'>Link Al Libro</a> </td>
               

            </tr>";
         }
            $salida.="</tbody></table>";
          }
      else{
        echo "No existen libros. <br>";
      }
    echo $salida;
    mysqli_close( $connection );
    //comentario
?>