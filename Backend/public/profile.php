<?php
    session_start();
    if(!isset($_SESSION['correo'])){
        header("location: login.php");
    }
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
    <link rel="stylesheet" href="../styles/styles-profile.css">
</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
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
                        <p class="ticket__p">NRO: 1002</p>
                    </div>
                    <img src=" " alt="portada de tematica">
                    <div class="perfil-usuario-avatar">
                        <img src="  " alt="avatar">
                        <button type="button" class="boton-avatar">
                            <i class="far fa-image"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                    <h3 class="titulo">Anthony Mayon Loprz Oquendo</h3>
                    <p class="texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ipsa asperiores debitis facilis a iste voluptatibus harum in? Tempore dignissimos iure natus! Ducimus atque, sunt sit reiciendis pariatur corrupti facere?</p>
                </div>
                <div class="perfil-usuario-footer">
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-user-check"></i> Perfil</li>
                        <li><i class="icono fas fa-university"></i> Universidad</li>
                        <li><i class="icono fas fa-location-arrow"></i> Direccion de usuario</li>
                    </ul>
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-arrow-up"></i>Telefono</li>
                        <li><i class="icono fas fa-at"></i> Email</li>
                        <li><i class="icono fas fa-ballot"></i>Registro</li>
                    </ul>
                    <form action="Logout.php">
                        <button>Cerrar sesion</button>
                    </form>
                </div>
                <div class="redes-sociales">
                    <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                    <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                    <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
                </div>
            </div>
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
