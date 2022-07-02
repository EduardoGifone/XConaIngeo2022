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
    <link rel="stylesheet" href="../styles/styles_login.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<?php
#Si ya se logeo que no regrese a login
session_start();
?>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <header class="header">
        <nav class="nav">
            <a href="/Frontend/public/index.html" class="nav__a">Inicio</a>
            <div class="nav__a nav__a-options">
                Organizacion ᐁ
                <div class="nav__a__options">
                    <ul class="nav__a__options__list">
                        <li><a href="/Frontend/public/Bienvenida.html" class="nav__a__options__a">Bienvenida</a></li>
                        <li><a href="/Frontend/public/Asesores.html" class="nav__a__options__a">Asesores</a></li>
                        <li><a href="#" class="nav__a__options__a">Directiva</a></li>
                    </ul>                    
                </div>
            </div>
            <a href="/Frontend/public/index.html" class="nav__a-img"><img src="../../Imagenes/Brujula.png" alt="Xconaeingeo-Brujula" class="nav__brujula"></a>
            <a href="/Frontend/public/contacto.html" class="nav__a">Contacto</a>
            <a href="#" class="nav__a nav__a-login">Iniciar Sesion</a>
        </nav>
    </header>
    <main class="main">
        <div class="main__contenedor">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Iniciar sesión</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>
    </main>
    <article class="article">
        <section class="contenido">
            <div class="login">
                <div class="content">
                    <br>
                    <br>
                    <!-- <h1 class="logo">Iniciar <span>Sesión</span></h1> -->

                    <div class="login-wrapper animated bounceInUp">
                        <div class="login-info">
                            <div class="bee">
                                <img src="../../Imagenes/people.png" alt="">
                            </div>
                            <h2 class="titleInfo">¿Te gustaría acceder a contenido exclusivo de nuestra conferencia?</h2>
                            <p>¡Contáctanos para obtener una cuenta a solo S/100. Podrás tener acceso al material de nuestros ponentes, 
                                cronograma de actividades y mucho más!</p>
                        </div>
                        <div class="login-form">
                            <h3>Iniciar Sesión</h3>
                            <form action="../../Backend/LoginController.php" method="post">
                                <p>
                                    <label><i class="fa-solid fa-user"></i>Correo electrónico</label>
                                    <input type="email" name="user" required>
                                </p>
                                <p>

                                    <label><i class="fa-solid fa-lock"></i>Contraseña</label>
                                    <input type="password" name="pass" required>
                                </p>
                                <p class="block">
                                    <button>
                                        Iniciar sesión
                                    </button>
                                </p>
                                <a href="recuperarCon.html">Olvidé mi contraseña</a>
                            </form>
                        </div>
                    </div>
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