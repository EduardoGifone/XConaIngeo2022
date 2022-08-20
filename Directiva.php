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
    <link rel="stylesheet" href="./styles/styles_base.css">
    <link rel="stylesheet" href="./styles/whatsapp.css">

    <!-- Fuente Didact Gothic-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/styles_Directiva.css">
    <!--Required style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.min.css">
    <!--Optional theme style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.min.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <h1 class="main__contenedor__h1">Directiva</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            
            <div class="directiva">
                <h2>Mesa directiva</h2>
                <div class="col-8">
                    <div class="glide1 glide">
                        <div class="glide__track" data-glide-el="track">
                          <ul class="glide__slides">
                            <li class="glide__slide"><img src="./Imagenes/Directivas/PRESIDENTE EJECUTIVO - ALEX ROLY CHALLHUA PACHA.jpeg" alt="">
                                <h3 class="directiva__Nombre">ALEX ROLY CHALLHUA PACHA</h3> 
                                <p class="directiva__Cargos">Presidente ejecutivo</p> 
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/SECRETARIA DE TESORERIA y finanzas- MARY CARMEN QUISPE QUISPE.jpeg" alt="">
                                <h3 class="_Nombre">MARY CARMEN QUISPE QUISPE</h3>
                                <p class="directiva__Cargos">Secretaria de tesoreria y finanzas</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/SECRETARIO DE ACTAS Y ARCHIVOS -  RENBERTH CONDORI CUTIPA.png" alt="">
                                <h3 class="directiva__Nombre">RENBERTH CONDORI CUTIPA</h3>
                                <p class="directiva__Cargos">Secretario de actas y archivos</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/VICEPRESIDENTA EJECUTIVA - NAYDA LISBET HUAMAN CONDE.jpeg" alt="">
                                <h3 class="directiva__Nombre">NAYDA LISBET HUAMAN CONDE</h3>
                                <p class="directiva__Cargos">Vicepresidenta ejecutiva</p>
                            </li>
                            
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>  
            </div>  
            
            <div class="directiva">
                <h2>Comisiones</h2>
                <div class="col-8">
                    <div class="glide2 glide">
                        <div class="glide__track" data-glide-el="track">
                          <ul class="glide__slides">
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. ASUNTOS SOCIALES - EDMARY FELIX PEREZ .jpg" alt="">
                                <h3 class="directiva__Nombre">EDMARY FELIX PEREZ</h3> 
                                <p class="directiva__Cargos">ASUNTOS SOCIALES</p> 
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. DE CONCURSOS ACADEMICOS- JANELY VANNIA CHILE AÑO.jpg" alt="">
                                <h3 class="_Nombre">JANELY VANNIA CHILE AÑO</h3>
                                <p class="directiva__Cargos">CONCURSOS ACADEMICOS</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. IMAGEN INSTITUCIONAL- SONALY MONRROY PALOMINO.jpg" alt="">
                                <h3 class="directiva__Nombre">SONALY MONRROY PALOMINO</h3>
                                <p class="directiva__Cargos">IMAGEN INSTITUCIONAL</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. Logistica-YAMELY CHOQUE QUISPE .jpeg" alt="">
                                <h3 class="directiva__Nombre">YAMELY CHOQUE QUISPE</h3>
                                <p class="directiva__Cargos">LOGISTICA</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. RECURSOS HUMANOS- NANDY MILAGROS ENRIQUEZ AYMA.jpg" alt="">
                                <h3 class="directiva__Nombre">NANDY MILAGROS ENRIQUEZ AYMA</h3>
                                <p class="directiva__Cargos">RECURSOS HUMANOS</p>
                            </li>
                            <li class="glide__slide"><img src="./Imagenes/Directivas/C. WORKSHOP -  DANNY OJEDA QUISPE .jpg" alt="">
                                <h3 class="directiva__Nombre">DANNY OJEDA QUISPE</h3>
                                <p class="directiva__Cargos">WORKSHOP</p>
                            </li>
                          </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>  
            
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </section>
    </article>
    <footer class="footer">
        <h2 class="footer__h2">XI | CONAEINGEO CUSCO 2022</h2>
    </footer>

    <script src="./scripts/simplyCountdown.min.js"></script>
    <script src="./scripts/contador.js"></script>
    <script src="./scripts/scroll.js"></script>

    <!--Scripts para Directivas-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>

    <script>
        new Glide('.glide1', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            focusAt: 'center', //para enfocar el segundo
            breakpoints: {
                550: {
                    perView: 1
                },
                1025: {
                    perView: 2
                }
            }

        }).mount()

        new Glide('.glide2', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            focusAt: 'center', //para enfocar el segundo
            breakpoints: {
                550: {
                    perView: 1
                },
                1025: {
                    perView: 2
                }
            }
        }).mount()

        new Glide('.glide3', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            focusAt: 'center', //para enfocar el segundo
            breakpoints: {
                550: {
                    perView: 1
                },
                1025: {
                    perView: 2
                }
            }
        }).mount()

    </script>
</body>
</html>
