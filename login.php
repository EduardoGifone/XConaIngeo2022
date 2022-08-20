<?php 
    session_start();
    if(isset($_SESSION["contrasenia"])){
        header("location: profile.php");
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
    <link rel="stylesheet" href="./styles/styles_login.css">
    <link rel="stylesheet" href="./styles/styles_alert.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Fuente Didact Gothic-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=+51902408050" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <?php
        include("HeaderPublic.php");
    ?>
    <main class="main">
        <div class="main__contenedor">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Iniciar sesión</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <div class="content animated bounceInUp">
                <img class="bee" src="./Imagenes/people.png" alt="">
                <div class="formulario">
                    <form action="LoginController.php" method="POST" name="formLog">
                        <p>
                            <label><i class="fa-solid fa-user"></i>Correo electrónico</label>
                            <?php 
                            if (!isset($_SESSION["correo"])){
                            ?>
                            <input type="email" name="user" required value="">
                            <?php  
                            } 
                            else{ 
                                $us = $_SESSION["correo"]; 
                                ?>                  
                                <input type="email" name="user" required value=<?php echo $us?>>
                            <?php
                            }
                            ?>
                        </p>
                        <p>                          
                            <label><i class="fa-solid fa-lock"></i>Contraseña</label>
                            <input type="password" name="pass" maxlength="20" required>
                        </p>
                        <p class="block">
                            <button>
                                Iniciar sesión
                            </button>
                        </p>
                        <a href="recuperarCon.php #foot">Olvidé mi contraseña</a>
                    </form>
                </div>      
            </div>
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
    if (isset($_SESSION["errorEmail"])){
        $boolEmail = $_SESSION["errorEmail"];
        if ($boolEmail){
            $_SESSION["errorEmail"] = false;
            ?>
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
    if(isset($_SESSION["errorPassword"])){
        $boolPass = $_SESSION["errorPassword"];
        if($boolPass){
            $_SESSION["errorPassword"] = false;
        ?>
            <script>
                swal({buttons: false, 
                title: "Error!",
                icon: "error",
                text: "Contraseña incorrecta",
                timer: 2000,});
            </script>
        <?php
        }
    }   
?>
