<?php
    $connection = new  mysqli_connect(("localhost", "root", "", "bibliotecavirtual");


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
        if (isset($_POST['consulta'])){
            $q=real_escape_string($_POST['consulta']);
            $consulta = "SELECT idLibro, autorLibro, nombreLibro, editorialLibro FROM libros WHERE nombreLibro LIKE'%" .$q. "%' OR autorLibro LIKE '%".$q."%' OR idLibro LIKE '%".$q."%'";
            echo $consulta . "<br>";
            $result = mysqli_query($connection,$consulta);
            $fila = mysqli_fetch_array($result);
        }
    }
    
    if(mysqli_num_rows($result)>0){
            $salida.="<table class='tabla_datos'>
            <thead>
                <tr>
                    <th>ID del libro</th>
                    <th>Autor del libro</th>
                    <th>Nombre del libro</th>
                    <th>Editorial del libro</th>
                </tr>
            </thead>
            <tbody>";

            while($fila = mysql_fetch_row($result)){
            $salida.="<tr>
                    <td>".$fila['idLibro']."</td>
                    <td>".$fila['autorLibro']."</td>
                    <td>".$fila['nombreLibro']."</td>
                    <td>".$fila['editorialLibro']."</td>
            </tr>";
            }
            $salida.="</tbody></table>";
         
      else{
        echo "No existen libros. <br>";
      }
    echo $salida;
    mysqli_close( $connection );
    
?>