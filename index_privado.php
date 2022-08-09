<!DOCTYPE html>
<html lang="es">
<head>
    <title>XICONAEINGEOXI</title>
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
    <link rel="stylesheet" href="./styles/styles_index_privado.css">
    <link rel="stylesheet" href="./styles/styles_universidades.css">
    <link rel="stylesheet" href="./styles/styles_sponsors.css">


</head>
<body>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=987654321" target="_blank">
        <i class="icon icon-whatsapp"></i>
    </a>
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav__a">Inicio</a>
            <div class="nav__a nav__a-options nav__a-organizacion">
                Organizacion ᐁ
                <div class="nav__a__options">
                    <ul class="nav__a__options__list">
                        <li><a href="/Frontend/public/Bienvenida.php" class="nav__a__options__a">Bienvenida</a></li>
                        <li><a href="/Frontend/public/Asesores.php" class="nav__a__options__a">Asesores</a></li>
                        <li><a href="/Frontend/public/Directiva.php" class="nav__a__options__a">Directiva</a></li>
                    </ul>                    
                </div>
            </div>
            <div class="nav__a nav__a-options nav__a-evento">
                Evento ᐁ
                <div class="nav__a__options">
                    <ul class="nav__a__options__list">
                        <li><a href="/Frontend/public/Programacion.php" class="nav__a__options__a">Programacion</a></li>
                        <li><a href="/Frontend/public/Ponentes.php" class="nav__a__options__a">Ponentes</a></li>
                    </ul>                    
                </div>
            </div>
            <a href="#" class="nav__a-img"><img src="../../Imagenes/Brujula.png" alt="Xconaeingeo-Brujula" class="nav__brujula"></a>
            <a href="/Frontend/public/profile.php" class="nav__a">Usuario</a>
            <a href="/Frontend/public/contacto.php" class="nav__a">Contacto</a>
            <a href="/Frontend/public/login.php" class="nav__a nav__a-login">Iniciar Sesion</a>
        </nav>
    </header>
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
            <button class="inscribete__button">Inscribirme</button>
        </section>
        <div class="separacion"></div>
        <section class="video">
            <video class="video__video" src="../../Videos/prueba.mp4" autoplay controls loop muted></video>
        </section>        
        <div class="separacion separacion-bajo"></div>
        <section class="representamos">
            <h2 class="representamos__h2">¿Que Representamos?</h2>
            <div class="representamos__contenedor">
                <figure class="figure">
                    <img src="../../Imagenes/mision.png" alt="Mision del congreso Xconaeingeo2022" class="figure__img">
                    <div class="figure__capa">
                        <h3 class="figure__capa__h3">MISION</h3>
                        <p class="figure__capa__p">Tiene la misión de crear un escenario que fomente una mejor formación académica en temas relacionados a las geociencias y ramas afines. Así como una mejor formación humana para mejorar la confraternización entre estudiantes de ingeniería geológica y futuros colegas.</p>
                    </div> 
                </figure>                   
                <figure class="figure">
                    <img src="../../Imagenes/vision.png" alt="Vision del congreso Xconaeingeo2022" class="figure__img">
                    <div class="figure__capa">
                        <h3 class="figure__capa__h3">VISION</h3>
                        <p class="figure__capa__p">Constituirse y permanecer como el evento líder y que más impacto genera a nivel nacional, reconocida nacionalmente por su carácter innovador sobre conocimientos en geociencias.</p>
                    </div>   
                </figure>                 
                <figure class="figure">
                    <img src="../../Imagenes/meta.png" alt="Meta del congreso Xconaeingeo2022" class="figure__img">
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
                    <div class="redes-sociales__ul__link__img youtube"></div>
                </a>
                <a href="#" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img facebook"></div>
                </a>
                <a href="#" class="redes-sociales__ul__link" target="_blank">
                    <div class="redes-sociales__ul__link__img instagram"></div>
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
                                <img src="../../Imagenes/pon-1.PNG" alt="">
                                <div class="capa">
                                    <h3>DR. HERNANDO TAVERA HUARACHE</h3>
                                    <p>Ingeniero geofísico egresado de la Universidad Nacional de San Agustín de Arequipa</p>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img src="../../Imagenes/pon-2.PNG" alt="">
                                <div class="capa">
                                    <h3>Dr. Torró i Abat Lisard</h3>
                                    <p>Licenciado en Geología (2009, Universidad de Barcelona) 
                                        y en Ingeniería de Minas (2011, Universidad Politécnica de Cataluña)</p>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img src="../../Imagenes/pon-3.PNG" alt="">
                                <div class="capa">
                                    <h3>Dr. Antonio Samaniego</h3>
                                    <p>PhD MSc Mecánica de Rocas, BSc Minería e Ingenieria Civil Antonio </p>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img src="../../Imagenes/pon-4.PNG" alt="">
                                <div class="capa">
                                    <h3>Dr. Vallance Jean Francois Victor</h3>
                                    <p>Ph.D Tesis en  metalogenia y geoquímica, en CREGU – Nancy, Francia.  
                                        Master’s degree en Ciencias de la Tierra en Universidad de Nancy, Francia </p>
                                </div>
                            </figure>
                        </div>

                        <div class="carousel-item contenedor">
                            <figure>
                                <img src="../../Imagenes/pon-5.PNG" alt="">
                                <div class="capa">
                                    <h3>Dra. Silvia Rosas Lizárraga</h3>
                                    <p>Ingeniera Geóloga de la Universidad Nacional de Ingeniería
                                        y PhD de la Universidad de Heidelberg–Alemania.</p>
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
                    <span style="--i:1;"><div><img src="../../Imagenes/U01.png" alt="01"></div></span>
                    <span style="--i:2;"><div><img src="../../Imagenes/U02.jpg" alt="02"></div></span>
                    <span style="--i:3;"><div><img src="../../Imagenes/U03.png" alt="03"></div></span>
                    <span style="--i:4;"><div><img src="../../Imagenes/U04.png" alt="04"></div></span>
                    <span style="--i:5;"><div><img src="../../Imagenes/U05.png" alt="05"></div></span>
                    <span style="--i:6;"><div><img src="../../Imagenes/U06.png" alt="06"></div></span>
                    <span style="--i:7;"><div><img src="../../Imagenes/U07.jpg" alt="07"></div></span>
                    <span style="--i:8;"><div><img src="../../Imagenes/U08.jpg" alt="08"></div></span>
                    <span style="--i:9;"><div><img src="../../Imagenes/U09.png" alt="09"></div></span>
                    <span style="--i:10;"><div><img src="../../Imagenes/U10.png" alt="10"></div></span>
                </div>
            </div>
        </section>

        <section class="sponsors">
            <h2 class="center-align titulo Sponsors__h2">Nos patrocinan!!!</h2>
            <div class="caja-sponsors">
                <div class="sponsors-1">
                    <a href="#"><img class="img-sponsors-1" src="../../Imagenes/LOGOS AUSPICIADORES/GEOTEKH PERU.jpg"></a>
                    <a href="#"><img class="img-sponsors-1" src="../../Imagenes/LOGOS AUSPICIADORES/GLOBAL MINING ACADEMY.jpg"></a>
                    <a href="#"><img class="img-sponsors-1" src="../../Imagenes/LOGOS AUSPICIADORES/Peruvian Geothermal Association.jpg"></a>
                    <a href="#"><img class="img-sponsors-1" src="../../Imagenes/LOGOS AUSPICIADORES/ScanViz GEO-Ingeniería.jpg"></a>
                </div>
                <div class="sponsors-2">
                    <a href="#"><img class="img-sponsors-2" src="../../Imagenes/LOGOS AUSPICIADORES/SMARTX-EXPLORER.png"></a>
                    <a href="#"><img class="img-sponsors-2" src="../../Imagenes/LOGOS AUSPICIADORES/SOCIEDAD GEOLOGICA DEL PERU.jpg"></a>
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

    <script src="../scripts/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
</body>
</html>