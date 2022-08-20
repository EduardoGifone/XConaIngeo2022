<?php
    session_start();
    if(!isset($_SESSION['contrasenia'])){
        header("location: login.php");
    }
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
    <link rel="stylesheet" href="./styles/styles_base.css">
    <link rel="stylesheet" href="./styles/whatsapp.css">
    <link rel="stylesheet" href="./styles/styles-profile.css">
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
        include("HeaderPrivate.php");
    ?>
    <main class="main">
        <div class="main__contenedor">
            <h1 class="main__contenedor__h1">MI PERFIL</h1>
        </div>        
    </main>
    <article class="article">
        <section class="seccion-perfil-usuario">
            <div class="perfil-usuario-header">
                <div class="perfil-usuario-portada">
                    <div class="ticket">
                        <img class="ticket_imagen" src="./Imagenes/11.png" alt="">
                        <p class="ticket__p">Miembro N° <?php echo $_SESSION['id'] ?></p>
                    </div>
                    <div class="perfil-usuario-avatar">
                    </div>
                </div>
            </div>
            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                    <h3 class="titulo"> 
                        <?php 
                            echo $_SESSION['nombre'];
                            print(" ");
                            echo $_SESSION['apellido'] 
                        ?>  
                    </h3>
                    <p> </p>
                </div>
                <div class="perfil-usuario-footer">
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-user-check"></i>Verificado </li>
                        <li><i class="icono fas fa-university"></i> <?php echo $_SESSION['universidad'] ?> </li>
                        <li><i class="icono fas fa-at"></i> <?php echo $_SESSION['correo'] ?> </li>
                    </ul>
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-mobile-screen "></i> <?php echo $_SESSION['telefono'] ?></li>
                        <li><i class="icono far fa-address-card"></i><?php echo $_SESSION['dni'] ?> </li>
                        <li><i class="icono fab fa-whatsapp"></i>  902 408 050</li>
                    </ul>
                </div>
                <div class="redes-sociales">
                    <a href="https://www.facebook.com/XI-Conaeingeo-Cusco-2022-107191221809301" target="_blank" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                    <a href="https://twitter.com/hashtag/Conaeingeo?src=hashtag_click" target="_blank" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                    <a href="https://instagram.com/xiconaeingeocusco2022?igshid=YmMyMTA2M2Y=" target="_blank" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
                </div>
            </div>
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
