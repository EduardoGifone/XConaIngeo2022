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
    <link rel="stylesheet" href="../styles/styles_recuperar.css">
    <link rel="stylesheet" href="../styles/styles_alert.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <?php
        include("HeaderPublic.php");
    ?>
    <main class="main">
        <div class="main__contenedor">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Recuperar clave</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <div class="content ">
                <img class="bee" src="../../Imagenes/message.jpg" >
                <h3>Recuperar mi contraseña</h3>
                <p class="info">Se enviará un mensaje con tu contraseña a tu correo.</p>
                <div class="formulario ">
                    <form action="getPasswordController.php" method="POST">
                        <p>
                            <label><i class="fa-solid fa-envelope"></i>Correo electrónico</label>
                            <input type="email" name="correoInput" required>
                        </p>
                        <p class="block">
                            <button>
                                Recuperar
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
            <h2 class="footer__h2">X | CONAEINGEO CUSCO 2022</h2>
        </section>
    </footer>
    <script src="../scripts/simplyCountdown.min.js"></script>
    <script src="../scripts/contador.js"></script>
    <script src="../scripts/scroll.js"></script>
</body>
</html>
<?php   
    if (isset($_SESSION["errorCorreoInput"])){
        $boolEmail = $_SESSION["errorCorreoInput"];
        if ($boolEmail){
            $_SESSION["errorCorreoInput"] = false;
            ?>
            <!-- <script src="../scripts/sweetAlertEmail.js"></script> -->
            <script>
                swal({buttons: false, 
                    title: "Error",
                    icon: "error",
                    text: "No existe el correo ingresado",
                    timer: 2000,});
            </script>
            <?php
        }
    }
    if(isset($_SESSION["claveEnviada"])){
        $boolEnviado = $_SESSION["claveEnviada"];
        if($boolEnviado){
            $_SESSION["claveEnviada"] = false;
            ?>
            <script>
                swal({buttons: false, 
                title: "Correo enviado",
                icon: "success",
                text: "Se ha enviado tu contraseña, por favor revisa tu correo",
                timer: 3000,});
            </script>
            <style>
                .swal-title{
                    color:green;
                }
            </style>
            <?php
        }
    }  
?>