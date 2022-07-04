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
            <h1 class="main__contenedor__h1">Contacto</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.2226277003588!2d-71.96050948559478!3d-13.521924774770104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5fdf70d465d%3A0xcbddd8e36a2171d!2sUniversidad%20Nacional%20de%20San%20Antonio%20Abad%20del%20Cusco%20(UNSAAC)!5e0!3m2!1ses!2spe!4v1652574448528!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <section>
            <br><br>
            <div class="content">       
                <div class="contact-wrapper">
                    <div class="contact-form">                       
                        <h3>Escríbenos</h3>
                        <form action="">
                            <p>
                                <label>Nombres</label>
                                <input type="text" name="fullname">
                            </p>
                            <p>
                                <label>Apellidos</label>
                                <input type="text" name="surname">
                            </p>

                            <p class="block">
                            <label>Tu mensaje</label> 
                                <textarea name="message" rows="3"></textarea>
                            </p>
                            <p class="block">
                                <button>
                                    Enviar
                                </button>
                            </p>
                        </form>
                    </div>
                    <div class="contact-info">
                        <h4>Más información</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Ubícanos</li>
                            <p>Escuela de Ingeniería Geológica</p>
                            <p>Universidad Nacional de San Antonio Abad del Cusco</p>
                            <p>Av. de la Cultura, Nro. 733 · Cusco, Perú</p>  
                            <li><i class="fas fa-phone"></i> Llámanos</li>
                            <p>+51 932341738</p>
                            <p>De lunes a viernes de 8 a.m. a 11 a.m.</p>
                            <li><i class="fas fa-envelope-open-text"></i> Información legal</li>
                            <p>Derechos reservados</p>
                        </ul>
                        
                    </div>
                </div>
        
            </div>
        </section>
        <br>
        <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
    </article>
    <footer class="footer">
        <h2 class="footer__h2">X | CONAEINGEO CUSCO 2022</h2>
    </footer>
    <script src="../scripts/simplyCountdown.min.js"></script>
    <script src="../scripts/contador.js"></script>
    <script src="../scripts/scroll.js"></script>
</body>
</html>