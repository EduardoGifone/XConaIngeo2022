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
    <link rel="stylesheet" href="../styles/styles_base.css">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/styles-contacto.css">
</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <?php
    if (!isset($_SESSION['correo'])){
        include("HeaderPublic.php");
    }
    else{
        include("HeaderPrivate.php");
    }
    ?>
    <main class="main">
        <div class="main__contenedor">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Cambiar contraseña</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->

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