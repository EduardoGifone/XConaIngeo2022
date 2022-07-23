<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>XCONAEINGEOXI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="XCONAEINGEO UNSAAC CUSCO 2022">
    <link rel="icon" href="../../Imagenes/LOGO SIN FONDO-13.png">
    <script src="https://kit.fontawesome.com/04ab370843.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_Bienvenida.css">
    <link rel="stylesheet" href="../styles/styles_base.css">
    <link rel="stylesheet" href="../styles/whatsapp.css">
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
            <h1 class="main__contenedor__h1">BIENVENIDA</h1>            
        </div>        
    </main>

    <article class="article">
        <section class="Bienvenida">
            <figure class="Imagen__Bienvenida" >
                <img src="../../Imagenes/BienvenidaK.png" width="960" alt="Bienvenida Xconaeingeo2022" class="figure__img">
            </figure>
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