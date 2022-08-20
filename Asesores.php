<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CONAEINGEOXI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="XCONAEINGEO UNSAAC CUSCO 2022">
    <link rel="icon" href="./Imagenes/LOGO SIN FONDO-13.png">
    <script src="https://kit.fontawesome.com/04ab370843.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/styles_Asesores.css">
    <link rel="stylesheet" href="./styles/styles_base.css">
    <link rel="stylesheet" href="./styles/whatsapp.css">
        <!-- Fuente Didact Gothic-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=902408050" target="_blank">
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
            <h1 class="main__contenedor__h1">ASESORES</h1>            
        </div>        
    </main>

    <article class="article">
        <section class="Bienvenida">
            <figure class="Imagen__Bienvenida" >
                <img src="./Imagenes/Asesor1.png" width="960" alt="Bienvenida Xconaeingeo2022" class="figure__img">
                <img src="./Imagenes/Asesor1.png" width="960" alt="Bienvenida Xconaeingeo2022" class="figure__img">
            </figure>
        </section>
    </article>
    <footer class="footer">
        <h2 class="footer__h2">XI | CONAEINGEO CUSCO 2022</h2>
    </footer>

    <script src="./scripts/simplyCountdown.min.js"></script>
    <script src="./scripts/contador.js"></script>
    <script src="./scripts/scroll.js"></script>
</body>
</html>
