<!DOCTYPE html>
<html lang="es">
<?php
//Conexiòn a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$database = "bibliotecavirtual";

$connection = mysqli_connect($host, $user, $pass);
?>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title> Biblioteca virtual </title>
        <script src="https://kit.fontawesome.com/db956a52fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/paginaPrincipal.css" type="text/css" rel="stylesheet" />
    </head>

    <body> 
        <header>
            <div class="header">
                <a href="#" class="logo"><img src="../img/icono.png" alt="Logo Escuela Industrial" class="logoescuela"></a>
              </div>
        </header>
        

        <div class="topnav" id="myTopnav">
            <a class="active" href="../views/paginaPrincipal.php">Inicio</a>
            <a href="#about">Acerca de</a>
            <a href="contacto.html">Contacto</a>
            <a href="LoginYRegistro.html"><i class="fas fa-user"></i> Usuario</a>
            <div class="search-container">
                <form action="">
                    <input type="text" placeholder="Busca tu libro" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="text">
            <h2>Nuestro catálogo de libros</h2>
        </div>

        <div class="container-libros">
        <a href="https://shortest.link/DOA"><img src="../img/im1.jpg" class="portada-libro" title="matematicas"></a>
            <a href="https://shortest.link/DOD"><img src="../img/img2.jpg" class="portada-libro" title="tecnologia"></a>
            <a href="https://shortest.link/DOF"><img src="../img/img3.jpg" class="portada-libro" title="formacion etica y ciudadana"></a>
            <a href="https://shortest.link/DOH"><img src="../img/img4.jpg" class="portada-libro" title="educacion fisica"></a>
            <a href="https://shortest.link/DOJ"><img src="../img/img5.jpg" class="portada-libro" title="lengua"></a>
            <a href="https://shortest.link/DNX"><img src="../img/img6.jpg" class="portada-libro" title="de la lógica del niño a la lógica del adolescente"></a>
            <a href="https://shortest.link/DOh"><img src="../img/img7.jpg" class="portada-libro" title="la psicologia del niño"></a>
            <a href="https://shortest.link/DOX"><img src="../img/img8.jpg" class="portada-libro" title="6 estudios de psicologia"></a>
            <a href="https://shortest.link/DPm"><img src="../img/img9.jpg" class="portada-libro" title="ciencias sociales"></a>
            <a href="https://shortest.link/DPu"><img src="../img/img10.jpg" class="portada-libro" title="ciencias naturales"></a>
            <a href="https://shortest.link/DPx"><img src="../img/img11.jpg" class="portada-libro" title="visual basic manual "></a>
            <a href="https://shortest.link/F79"><img src="../img/img12.jpg" class="portada-libro" title="enciclopedia aula abierta"></a>
            <a href="https://shortest.link/F7k"><img src="../img/img13.jpg" class="portada-libro" title="economia de la argentina"></a>
            <a href="https://shortest.link/F7z"><img src="../img/img14.jpg" class="portada-libro" title="relaciones humanas"></a>
            <a href="https://shortest.link/DQ9"><img src="../img/img15.jpg" class="portada-libro" title="los cambios mundiales y la enseñanza de la geografía"></a>
            <a href="https://shortest.link/DQe"><img src="../img/img16.jpg" class="portada-libro" title="la romanización de España"></a>
            <a href="https://shortest.link/DQq"><img src="../img/img17.jpg" class="portada-libro" title="la España visigoda y cristiana "></a>
            <a href="https://shortest.link/DQB"><img src="../img/img18.jpg" class="portada-libro" title="las culturas indígenas"></a>
            <a href="https://shortest.link/F8j"><img src="../img/img19.jpg" class="portada-libro" title="filosofía para niños y la comunidad de indagación"></a>
            <a href="https://shortest.link/DQT"><img src="../img/img20.jpg" class="portada-libro" title="Geometría su enseñanza"></a>
            <a href="https://shortest.link/DZ9"><img src="../img/img21.jpg" class="portada-libro" title="hacia una didáctica general dinámica"></a>
            <a href="https://shortest.link/DZg"><img src="../img/img22.jpg" class="portada-libro" title="compendio de didáctica general"></a>
            <a href="https://shortest.link/DZT"><img src="../img/img23.jpg" class="portada-libro" title="ciencia para todos en secundaria"></a>
            <a href="https://shortest.link/DZZ"><img src="../img/img24.jpg" class="portada-libro" title="tecnología : estrategia didáctica"></a>
            <a href="https://shortest.link/D-c"><img src="../img/img25.jpg" class="portada-libro" title="Lecturas críticas sobre la narrativa argentina"></a>
            <a href="https://shortest.link/D-s"><img src="../img/img26.jpg" class="portada-libro" title="Biologìa : El origen de la vida"></a>
            <a href="https://shortest.link/D-u"><img src="../img/img27.jpg" class="portada-libro" title="Las sociedades y los espacios geogràficos"></a>
            <a href="https://shortest.link/D-O"><img src="../img/img28.jpg" class="portada-libro" title="ciencias naturales"></a>
            <a href="https://shortest.link/D-U"><img src="../img/img29.jpg" class="portada-libro" title="fisica"></a>
            <a href="https://shortest.link/Gem"><img src="../img/img30.png" class="portada-libro" title="El aprendizaje basado en problemas "></a>
            <a href="https://shortest.link/HBP"><img src="../img/img31.jpg" class="portada-libro" title="La enseñanza de las ciencias"></a>
            <a href="https://shortest.link/Gf9"><img src="../img/img32.jfif" class="portada-libro" title="Pensamiento científico"></a>
            <a href="https://shortest.link/Gfq"><img src="../img/img33.jfif" class="portada-libro" title="Biología. 1 : la vida en la tierra"></a>
            <a href="https://shortest.link/Gfu"><img src="../img/img34.jpg" class="portada-libro" title="Psicología del desarrollo"></a>
            <a href="https://shortest.link/Gfx"><img src="../img/img35.jpg" class="portada-libro" title="La escuela inteligente"></a>
            <a href="https://shortest.link/HCw"><img src="../img/img36.jfif" class="portada-libro" title="Pedagogía general"></a>
            <a href="https://shortest.link/HCB"><img src="../img/img37.png" class="portada-libro" title="matematicas"></a>
            <a href="https://shortest.link/HCN"><img src="../img/img38.jfif" class="portada-libro" title="Matemática : de EGB 3 al polimodal"></a>
            <a href="https://shortest.link/GjU"><img src="../img/img39.jfif" class="portada-libro" title="La enseñanza y el aprendizaje de las ciencias de la naturaleza en la educación secundaria"></a>
            <a href="https://shortest.link/HGV"><img src="../img/img40.jpg" class="portada-libro" title="La educación matemática en la enseñanza secundaria"></a>
            <a href="https://shortest.link/Gkb"><img src="../img/img41.jpg" class="portada-libro" title="Administración organizacional : calidad, capacitación, evaluación"></a>
            <a href="https://shortest.link/Gkq"><img src="../img/img42.jpg" class="portada-libro" title="Aprendizaje cooperativo : teoría, investigación y práctica"></a>
            <a href="https://shortest.link/Gkx"><img src="../img/img43.jpg" class="portada-libro" title="Lengua y literatura : los estudios semióticos : el caso de la crónica periodística"></a>
            <a href="https://shortest.link/GkG"><img src="../img/img44.png" class="portada-libro" title="Ecología : el agua en Argentina"></a>
            <a href="https://shortest.link/HJe"><img src="../img/img45.jpg" class="portada-libro" title="El ambiente en la sociedad colonial"></a>
            <a href="https://shortest.link/HJn"><img src="../img/img46.jfif" class="portada-libro" title="Temas para la educación tecnológica : modelos, materiales, energía, sistemas, lectura del objeto"></a>
            <a href="https://shortesgt.link/HJt"><img src="../img/img47.jfif" class="portada-libro" title="Lecturas críticas sobre la narrativa argentina"></a>
            <a href="https://bit.ly/3DuFpMm"><img src="../img/img48.jpg" class="portada-libro" title="Las sociedades y los espacios geogràficos"></a>
            <a href="https://bit.ly/3DmmIdu"><img src="../img/img49.jpg" class="portada-libro" title="fisica 1"></a>
            <a href="https://bit.ly/3km1wvA"><img src="../img/img50.jfif" class="portada-libro" title="la formación del estado argentino"></a>
            <a href="https://bit.ly/3krB8jV"><img src="../img/img51.jpg" class="portada-libro" title="epoca de rosas"></a>
            <a href="https://bit.ly/38fuMyv"><img src="../img/img52.png" class="portada-libro" title="filosofia para la ciencia y sociedad"></a>
            <a href="https://bit.ly/3gzfIR0"><img src="../img/img53.jfif" class="portada-libro" title="Los Servicios Sociales en Gran Bretaña"></a>
        </div>

        <a href="cargaLibros.php">
            <button class="btn" title="Carga libros"><i class="fas fa-plus"></i></button>
        </a>

    </body>
</html>

