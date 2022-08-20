<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>CONAEINGEOXI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="XICONAEINGEO UNSAAC CUSCO 2022">
    <link rel="icon" href="./Imagenes/LOGO SIN FONDO-13.png">
    <script src="https://kit.fontawesome.com/04ab370843.js" crossorigin="anonymous"></script>

    <!-- Materialize.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="./styles/styles_index.css">
    <link rel="stylesheet" href="./styles/whatsapp.css">
    <link rel="stylesheet" href="./styles/styles_ponentes.css">
    <link rel="stylesheet" href="./styles/styles_universidades.css">
    <link rel="stylesheet" href="./styles/styles_sponsors.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
    if (!isset($_SESSION['correo'])){
        include("HeaderPublic.php");
    }
    else{
        include("HeaderPrivate.php");
    }
    ?>
    <main class="main">
        <div class="main__contenedor">
            <div class="main__contenedor__izq">
                <div class="main__contenedor__izq__img-logo"></div>
            </div>
            <div class="main__contenedor__der">
                <h1 class="main__contenedor__der__h1">Del 22 al 28 de agosto</h1>
                <div class="contador">
                    <div class="contador__img-contador"></div>
                    <div id="contador__contador"></div>
                </div>
            </div>
        </div>
    </main>
    <article class="article">
        <section class="inscribete">
            <h2 class="inscribete__h2">¡Inscríbete ya!</h2>
            <p class="inscribete__p">Accede al congreso XCONAEINGEO, llevado a cabo del 02 al 06 de agosto de 2022.</p>
            <!-- <button class="inscribete__button">Inscribirme</button> -->
        </section>
        <div class="separacion"></div>
        <section class="video">
            <video class="video__video" src="./Videos/prueba.mp4" autoplay controls loop muted></video>
        </section>
        <div class="separacion separacion-bajo"></div>
        <section class="representamos">
            <h2 class="representamos__h2">¿Que Representamos?</h2>
            <div class="representamos__contenedor">
                <figure class="figure">
                    <img src="./Imagenes/mision.png" alt="Mision del congreso Xconaeingeo2022" class="figure__img">
                    <div class="figure__capa">
                        <h3 class="figure__capa__h3">MISION</h3>
                        <p class="figure__capa__p">Tiene la misión de crear un escenario que fomente una mejor formación académica en temas relacionados a las geociencias y ramas afines. Así como una mejor formación humana para mejorar la confraternización entre estudiantes de ingeniería geológica y futuros colegas.</p>
                    </div> 
                </figure>                   
                <figure class="figure">
                    <img src="./Imagenes/vision.png" alt="Vision del congreso Xconaeingeo2022" class="figure__img">
                    <div class="figure__capa">
                        <h3 class="figure__capa__h3">VISION</h3>
                        <p class="figure__capa__p">Constituirse y permanecer como el evento líder y que más impacto genera a nivel nacional, reconocida nacionalmente por su carácter innovador sobre conocimientos en geociencias.</p>
                    </div>   
                </figure>                 
                <figure class="figure">
                    <img src="./Imagenes/meta.png" alt="Meta del congreso Xconaeingeo2022" class="figure__img">
                    <div class="figure__capa">
                        <h3 class="figure__capa__h3">META</h3>
                        <p class="figure__capa__p">Lograr una participación masiva de todos los estudiantes y profesionales afines a las geociencias y la Ingeniería Geológica con el fin de lograr un alcance nacional para su mayor conocimiento, importancia y divulgación.</p>
                    </div>  
                </figure>                  
            </div>
        </section>
        <section class="redes-sociales">
            <h2 class="redes-sociales__h2">¡Ven y se parte de nuestro Gran Evento!</h2>
            <p class="redes-sociales__p">Siguenos en nuestras redes sociales</p>
            <ul class="redes-sociales__ul">
                <a href="#" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img youtube"><i class="fab fa-youtube"></i></div>
                </a>
                <a href="https://www.facebook.com/XI-Conaeingeo-Cusco-2022-107191221809301/" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img facebook"><i class="fab fa-facebook-f"></i></div>
                </a>
                <a href="https://instagram.com/xiconaeingeocusco2022?igshid=YmMyMTA2M2Y=" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img instagram"><i class="fab fa-instagram"></i></div>
                </a>
                <a href="https://www.linkedin.com/company/xi-congreso-nacional-de-estudiantes-de-ingenier%C3%ADa-geologica/" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img linkedin"><i class="fab fa-linkedin-in"></i></div>
                </a>
            </ul>
        </section>

        <section class="ponentes">
            <div class="row ponentes">
                <div class="col s12">
                    <h2 class="center-align titulo ponentes__h2">Ponentes</h2>
                    <div class="carousel center-align">
                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Dr. Dimas Apaza Idme.png" alt="">
                                <div class="capa">
                                    <h3>Dr. Dimas Apaza Idme</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Aldo Carlos Villazana.jpg" alt="">
                                <div class="capa">
                                    <h3>Ing. Aldo Carlos Villazana</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Christian Aquino Llico.PNG" alt="">
                                <div class="capa">
                                    <h3>Ing. Christian Aquino Llico</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. EVELYN CAIZA.jpg" alt="">
                                <div class="capa">
                                    <h3>Ing. EVELYN CAIZA</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Nancy Encarnación Bermúdez.jpg" alt="">
                                <div class="capa">
                                    <h3>Ing. Nancy Encarnación Bermúdez</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Pedro Isique Chanamé.JPG" alt="">
                                <div class="capa">
                                    <h3>Ing. Pedro Isique Chanamé</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Percy Torres Garcia.jpg" alt="">
                                <div class="capa">
                                    <h3>Ing. Percy Torres Garcia</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/Ing. Victor Manuel Vargas Rodriguez.jpg" alt="">
                                <div class="capa">
                                    <h3>Ing. Victor Manuel Vargas Rodriguez</h3>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/M.Sc.. Jul Roldan Guevara.jpg" alt="">
                                <div class="capa">
                                    <h3>MS.c. Jul Roldan Guevara</h3>
                                </div>
                            </figure>
                        </div>  

                        <div class="carousel-item contenedor">
                            <figure>
                                <img class="img-ponente" src="./Imagenes/PONENTES/MS.c. Samuel Canchaya.jpg" alt="">
                                <div class="capa">
                                    <h3>MS.c. Samuel Canchaya</h3>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>                        
        
        <section class="universidades">          
            <h2 class="center-align titulo universidades__h2">Universidades</h2>  
            <div class="ruleta_universidades">
                <div class="content">
                    <span style="--i:1;"><div><img src="./Imagenes/U01.png" alt="01"></div></span>
                    <span style="--i:2;"><div><img src="./Imagenes/U02.jpg" alt="02"></div></span>
                    <span style="--i:3;"><div><img src="./Imagenes/U03.png" alt="03"></div></span>
                    <span style="--i:4;"><div><img src="./Imagenes/U04.png" alt="04"></div></span>
                    <span style="--i:5;"><div><img src="./Imagenes/U05.png" alt="05"></div></span>
                    <span style="--i:6;"><div><img src="./Imagenes/U06.png" alt="06"></div></span>
                    <span style="--i:7;"><div><img src="./Imagenes/U07.jpg" alt="07"></div></span>
                    <span style="--i:8;"><div><img src="./Imagenes/U08.jpg" alt="08"></div></span>
                    <span style="--i:9;"><div><img src="./Imagenes/U09.png" alt="09"></div></span>
                    <span style="--i:10;"><div><img src="./Imagenes/U10.png" alt="10"></div></span>
                    <span style="--i:11;"><div><img src="./Imagenes/unsaac.jfif" alt="11"></div></span>
                </div>
            </div>
        </section>

        <section class="sponsors">
            <h2 class="center-align titulo Sponsors__h2">Nos patrocinan!!!</h2>
            <div class="caja-sponsors">
                <div class="sponsors-1">
                    <a href="https://www.facebook.com/smartxexplorer/" target="_blank"><img class="img-sponsors-1" src="./Imagenes/LOGOS AUSPICIADORES/SMARTX-EXPLORER.png"></a>
                    <a href="https://www.sgp.org.pe/" target="_blank"><img class="img-sponsors-1" src="./Imagenes/LOGOS AUSPICIADORES/SOCIEDAD GEOLOGICA DEL PERU.jpg"></a>
                    <a href="https://www.sgp.org.pe/" target="_blank"><img class="img-sponsors-1" src="./Imagenes/LOGOS AUSPICIADORES/hidroandes.jpg" alt=""></a>
                </div>
                <div class="sponsors-2">
                    <a href="https://www.gob.pe/ingemmet" target="_blank"><img class="img-sponsors-2" src="./Imagenes/LOGOS AUSPICIADORES/ingemmet.png" alt=""></a>
                    <a href="https://www.facebook.com/Geocidsac/" target="_blank"><img class="img-sponsors-2" src="./Imagenes/LOGOS AUSPICIADORES/geomorfologia.png" alt=""></a>
                    <a href="http://www.piasaconsultores.com" target="_blank"><img class="img-sponsors-2" src="./Imagenes/LOGOS AUSPICIADORES/piasa.jpeg" alt=""></a>
                </div>
                <div class="sponsors-3">
                    <a href="https://www.linkedin.com/company/minex-field" target="_blank"><img class="img-sponsors-3" src="./Imagenes/LOGOS AUSPICIADORES/minexfield.png" alt=""></a>
                    <a href="https://www.facebook.com/Inkas-Machupicchu-Explorer-EIRL-tour-operador-108686111434217" target="_blank"><img class="img-sponsors-3" src="./Imagenes/LOGOS AUSPICIADORES/logo inkas machupicchu.png" alt=""></a>
                    <a href="https://innova.lat/" target="_blank"><img class="img-sponsors-3" src="./Imagenes/LOGOS AUSPICIADORES/innova.jpg" alt=""></a>
                </div>
                <div class="sponsors-4">
                    <a href="https://www.dataminesoftware.com/es/acerca-de-datamine/" target="_blank"><img class="img-sponsors-4" src="./Imagenes/LOGOS AUSPICIADORES/Datamine_cmyk.png" alt=""></a>
                    <a href="https://www.sampling-ok.com/Sampling-OK" target="_blank"><img class="img-sponsors-4" src="./Imagenes/LOGOS AUSPICIADORES/SOK.jpg" alt=""></a>
                </div>
                <div class="sponsors-5">
                    <a href="https://www.facebook.com/Geopoint-PERU-105527981478973/?__tn__=kK*F" target="_blank"><img class="img-sponsors-5" src="./Imagenes/LOGOS AUSPICIADORES/geopoint peru.jpg" alt=""></a>
                    <a href="https://www.minsup.com.pe/" target="_blank"><img class="img-sponsors-5" src="./Imagenes/LOGOS AUSPICIADORES/minsup.jpg" alt=""></a>
                    <a href="#"><img class="img-sponsors-5" src="./Imagenes/LOGOS AUSPICIADORES/minerales cristalizados.jpeg" alt=""></a>
                </div>

                <div class="sponsors-6">
                    <a href="https://ise-academy.net/about-us/"><img class="img-sponsors-6" src="./Imagenes/LOGOS AUSPICIADORES/ise.png" alt=""></a>
                    <a href="#"><img class="img-sponsors-6" src="./Imagenes/LOGOS AUSPICIADORES/GEOTEKH PERU.jpg"></a>
                </div>
                <div class="sponsors-0">
                    
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

    <script src="./scripts/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel();
        });
    </script>
</body>

</html>
