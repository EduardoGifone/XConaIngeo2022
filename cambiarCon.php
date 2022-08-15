<?php 
    session_start();
    if (!isset($_SESSION["contrasenia"])){
        header("location: index.php");
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
    <link rel="stylesheet" href="./styles/styles_recuperar.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            <h1 class="main__contenedor__h1">Cambiar contraseña</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <div class="content ">
                <img class="bee" src="./Imagenes/message.jpg" >
                <h3>Cambiar mi contraseña</h3>
                <div class="formulario ">
                    <form action="changePasswordController.php" method="POST">
                        <p>
                            <label><i class="fa-solid fa-envelope"></i>Contraseña actual</label>
                            <input type="password" name="actualPass" minlength="6"  maxlength="20">
                        </p>
                        <p>
                            <label><i class="fa-solid fa-envelope"></i>Nueva contraseña</label>
                            <input type="password" name="newPass" minlength="6"   maxlength="20" required>
                        </p>
                        <p>
                            <label><i class="fa-solid fa-envelope"></i>Vuelva a escribir la nueva contraseña</label>
                            <input type="password" name="confNewPass" minlength="6"  maxlength="20" required>
                        </p>
                        <p class="block">
                            <button>
                                Cambiar
                            </button>
                        </p>
                    </form>
                </div>
            </div>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </section>
    </article>
    <footer class="footer">
        <section id="foot">
            <h2 class="footer__h2">XI | CONAEINGEO CUSCO 2022</h2>
        </section>
    </footer>
    <script src="./scripts/simplyCountdown.min.js"></script>
    <script src="./scripts/contador.js"></script>
    <script src="./scripts/scroll.js"></script>
</body>
</html>
<?php
    include('alertasCambiarCon.php');
?>