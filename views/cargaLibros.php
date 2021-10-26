<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cargaLibros.css" type="text/css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/db956a52fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Carga libros</title>
</head>


<body>
    <!-- HEADER -->
    <header>
        <div class="header">
            <a href="paginaPrincipal.php" class="logo"><img src="../img/icono.png" alt="Logo Escuela Industrial" class="logoescuela"></a>
        </div>
    </header>
        
    <div class="topnav" id="myTopnav">
        <a class="active" href="../views/paginaPrincipal.php">Inicio</a>
        <a href="#about">Acerca de</a>
        <a href="contacto.html">Contacto</a>
        </div>
    </div>


    <!-- Main -->
        <form action="../php/insertar.php" method="POST" class="container">
        <p>
            <input type="form" name="autor" required placeholder="Autor del Libro">
        </p>
        <p>
            <input type="form" name="name" required placeholder="Titulo del Libro">
        </p>
        <p>
            <input type="form" name="editorial" required placeholder="Editorial del Libro">
        </p>
        <p>
            <input type="form" name="year" required placeholder="Año del Libro">
        </p>

        <h4>Añade documento PDF del libro:</h4>
        <input type="file" name="pdf" accept=".pdf" />
        <br>
        
        <h4>Añade portada del libro:</h4>
        <input type="file" name="imagen" accept=".jpeg,.jpg,.png"/>
        <br>

        <button class="button-submit" type="submit"> Subir libro </button>
    </form>
</body>
</html>