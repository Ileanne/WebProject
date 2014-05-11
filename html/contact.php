<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Proyecto final para la materia de desarrollo web del ciclo escolar 2014-1.">
    <meta name="author" content="González Méndez Mónica Ileanne">

    <title>Tatto Arte</title>

    <!--CSS-->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/custom.css" rel="stylesheet" type="text/css">
    <link href="../css/font.css" rel="stylesheet" type="text/css" >

</head>
<body>
    <img id="bg" src="../images/main-bg.png">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand nav-link-large" href="../index.html">Tattoo Arte</a>
            </div>

            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li><a href="gallery.html" class="menu-link">Galería</a>
                    </li>
                    <li><a href="care.html" class="menu-link">Cuidados</a>
                    </li>
                    <li><a href="multimedia.html" class="menu-link">Multimedia</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html" class="nav-link"> <span class="glyphicon glyphicon-user"></span> About</a>
                    </li>
                    <li class="active">
                        <a href="contact.html" class="nav-link"> <span class="glyphicon glyphicon-envelope"></span> Contacto</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <header class="container top-buffer">
        <div id="logo">
            <img src="../images/logo.png" class="center-block img-responsive">
        </div>
    </header>

    <section  id="contact" class="main-content container contact">

    <?php
        error_reporting(E_ERROR);
        
        $mysqli = new mysqli("localhost", "root", "", "contact");
        
        if ($mysqli->connect_errno) {
            printf("<h3>Error al intentar conectarse a la base de datos.<h3>");
            exit();
        }
        
        if (!($sentencia = $mysqli->prepare("INSERT INTO contact(nombre, email, asunto, mensaje) VALUES (?)"))) {
    echo "Falló la preparación";
        }

        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $topic = $_POST['asunto'];
        $message = $_POST['mensaje'];


        if (!$sentencia->bind_param($name,$email,$topic,$message)){
    echo "Falló la vinculación de parámetros";
        }
        
        if (!$sentencia->execute()) {
    echo "Falló la ejecución";
        }
        
        $sentencia->close();
        
       $resultado = $mysqli->query("SELECT id FROM contact");        

        ?>
    
    </section>

    <footer>
        <div class="container">
            <p class="text-muted credit footer-large">Página realizada por <a href="#">Mónica I. González</a>.</p>
        </div>

    </footer>

    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap-lightbox.min.js"></script>
</body>
</html>