<?php
    session_start();
    if (!isset($_SESSION["contrasenia"])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ponentes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="XCONAEINGEO UNSAAC CUSCO 2022">
    <link rel="icon" href="../../Imagenes/LOGO SIN FONDO-13.png">
    <script src="https://kit.fontawesome.com/04ab370843.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_base.css">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/styles_ponentesII.css">
</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <?php
    if (!isset($_SESSION['contrasenia'])){
        include("HeaderPublic.php");
    }
    else{
        include("HeaderPrivate.php");
    }
    ?>
    <main class="main">
        <div class="main__contenedor">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Ponentes</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <div class="container__cards">
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../../Imagenes/pon-1.PNG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>DR. HERNANDO TAVERA HUARACHE</h2>
                            <hr>
                            <p>Ingeniero geof??sico egresado de la Universidad Nacional de San Agust??n de Arequipa</p>
                        </div>
                    </div>
                </div> 
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../../Imagenes/pon-2.PNG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Dr. Torr?? i Abat Lisard</h2>
                            <hr>
                            <p>Licenciado en Geolog??a (2009, Universidad de Barcelona) 
                                y en Ingenier??a de Minas (2011, Universidad Polit??cnica de Catalu??a)</p>
                        </div>
                    </div>
                </div> 
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../../Imagenes/pon-3.PNG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Dr. Antonio Samaniego</h2>
                            <hr>
                            <p>PhD MSc Mec??nica de Rocas, BSc Miner??a e Ingenieria Civil Antonio </p>
                        </div>
                    </div>
                </div> 
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../../Imagenes/pon-4.PNG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Dr. Vallance Jean Francois Victor</h2>
                            <hr>
                            <p>Ph.D Tesis en  metalogenia y geoqu??mica, en CREGU ??? Nancy, Francia.  
                                Master???s degree en Ciencias de la Tierra en Universidad de Nancy, Francia </p>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </section>
    </article>
    <footer class="footer">
        <h2 class="footer__h2">X | CONAEINGEO CUSCO 2022</h2>
    </footer>

    <script src="../scripts/simplyCountdown.min.js"></script>
    <script src="../scripts/contador.js"></script>
    <script src="../scripts/scroll.js"></script>


</body>
</html>