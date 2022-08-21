<?php
    //session_start();
    //if (!isset($_SESSION["contrasenia"])){
    //header("location: index.php");
    //}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ponentes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="XCONAEINGEO UNSAAC CUSCO 2022">
    <link rel="icon" href="./Imagenes/LOGO SIN FONDO-13.png">
    <script src="https://kit.fontawesome.com/04ab370843.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/styles_base.css">
    <link rel="stylesheet" href="./styles/whatsapp.css">
    <link rel="stylesheet" href="./styles/styles_ponentesII.css">
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
            <h1 class="main__contenedor__h1">Ponentes</h1>
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
        </div>        
    </main>
    <article class="article">
        <section class="contenido--Ponentes">
            <!-- ============================================ AQUI PONGAN SU CONTENIDO ============================================ -->
            <div class="container__cards">
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ing. Aldo Carlos Villazana.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Aldo David Carlos Villazana</h2>
                            <!-- <hr> -->
                            <p>Geólogo egresado de la Universidad Nacional de Ingenieria (UNI). 
                                Especialista en machine learning, ha gestionado y desarrollado programas 
                                de inteligencia artificial usando machine learning aplicado a ciencias 
                                geológicas y minería. Cuenta con especialización de postgrado en análisis de geodatos (UTAS- Tasmania). 
                            </p>
                        </div>
                    </div>
                </div> 
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Andrea Elena Morote Delgado.JPEG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Bach. Andrea Elena Morote Delgado</h2>
                            <p>Bachiller en Administración de empresas y Marketing por la Universidad 
                                Peruana de Ciencias Aplicadas (UPC) con seis años de experiencia en el rubro 
                                de educación y gestión humana. Se encuentra trabajando en el rubro minero como jefa del equipo 
                                de Marketing de Datamine para Perú, Bolivia y Ecuador.</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ing. Christian Aquino Llico.PNG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Christian Bernard Aquino Llico</h2>
                            <p>Ingeniero de Minas egresado de la UPN Cajamarca; con estudios en Geomecánica, 
                                Geotecnia y desarrollo de Tecnología aplicada al sector minero, cuenta con experiencia 
                                laborando en supervisión y Geotecnias. 
                                Actualmente, Gerente de GEOTEKH TECHNOLOGIES y Project Management en el desarrollo de 
                                proyectos tecnológicos</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Dr. Dimas Apaza Idme.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>PhD. Dimas Apaza Idme </h2>
                            <p>Ingeniero Geólogo egresado de la Universidad San Antonio Abad del Cusco, 
                                con estudios de Maestría en Tecnología del Agua en la Universidad Politécnica 
                                de Catalunya - Barcelona, y Doctorado en la Universidad de Almería España.
                                Hidrogeólogo Senior con más de 25 años de experiencia en Aguas Subterráneas y Medio Ambiente.</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ing. EVELYN CAIZA.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Evelyn Caiza</h2>
                            <p>Ingeniera Geóloga y estudiante de Máster en Gestión de Proyectos Mineros de la 
                                Universidad Central del Ecuador. Tiene 5 años de experiencia en exploraciones 
                                de oro y cobre desde proyectos iniciales hasta proyectos de exploración avanzada 
                                en Ecuador, Perú y México con empresas como LUMINA GOLD, ANGLO AMERICAN, SAMPLING  
                                OK, OROCO RESOURCES, SUNSTONE METALS. </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/FREDY ÁLVARO ELORRIETA AGRAMONTE.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Fredy Álvaro Elorrieta Agramonte</h2>
                            <p>Ingeniero de minas de la UNSAAC con especialidad en mecánica de rocas. Tiene más 
                                de 15 años de experiencia en la industria minera, con conocimiento en control 
                                de operaciones, planificación y geomecánica aplicada. Actualmente es consultor 
                                geomecánico senior para las principales operaciones en Perú, Colombia, Ecuador.
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Jul Roldán Guevara.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Jul Roldán Guevara </h2>
                            <!-- <hr> -->
                            <p>Ingeniero Geólogo UNSAAC, con Maestría en Ciencias en Ingeniería Geológica en la UNI y 
                                Diplomado en Geoestadistica e hidrogeología, expositor en Cursos de Geología del Petróleo 
                                y Petrofísica, con años de experiencia en 
                                exploración y explotación de hidrocarburos, geología de reservorios,  
                                recursos prospectivos, análisis probabilístico y determinación de riesgo. 
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/marko cesar herrera gonzalez.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Marko Cesar Herrera Gonzalez</h2>
                            <p>Ingeniero Geólogo egresado de la Universidad Nacional San Antonio Abad del Cusco; 
                                Egresado de la Maestría de Geotecnia y Vías Terrestres de la UNSSAC. Evaluador de 
                                Riesgo de Desastres acreditado por CENEPRED. Especialista en la elaboración de Planes 
                                Territoriales. Diplomado en Gestión de Proyectos y en en Sistema de Información Geográfica </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Nancy Encarnación Bermúdez.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Dra. Nancy Encarnación Bermúdez</h2>
                            <p>Ingeniera Petroquímica egresada de la UNI, con estudios 
                                de doctorado en medio ambiente y desarrollo sostenible, especializaciones en Monitoreo 
                                de la Calidad Ambiental y Sistemas de Gestión de la Calidad. Docente nombrado de la 
                                Universidad Nacional de Ingeniería. Miembro integrante del Comité Permanente de Acreditación del INACAL.</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Pedro Guillermjo Isique Chanamé.JPG" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Pedro Guillermjo Isique Chanamé</h2>
                            <!-- <hr> -->
                            <p>
                                Ingeniero Geologo de la UNMSM, Maestria en la UNFV, Diplomado en la Universidad de Valencia,
                                cursos internacionales de Geotecnia en USA y Brasil. Gerente general de PIASA Consultores SA,
                                Consultor internacional en geologia y geotecnia en obras de infraestructura APIG, ex presidente 
                                del XX Congreso Peruano de Geologia.
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/PERCY LUIS TORRES GARCÍA.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Percy Luis Torres García </h2>
                            <p>Ingeniero geólogo egresado de la UNC; con diplomatura en geotecnia y estudios de maestría 
                                en Gestión de Riesgo de Desastres y Ordenamiento Territorial, actualmente doctorando en 
                                la mención de Gestión Ambiental y Recursos Naturales. CEO fundador de la empresa GEOTEKH
                                catedrático de las escuelas de Ingeniería geológica y de minas</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Rocío Pacheco Román.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Dra. Rocío Pacheco Román</h2>
                            <p>Ingeniero Geólogo, graduada de la UNSAAC. Master en Auditoria y Gestión Ambiental, graduada 
                                de la Universidad Politécnica de Catalunya – España. Doctora en Medio Ambiente y desarrollo 
                                sostenible de la Universidad Andina del Cusco. Con 7 años de experiencia en actividades geológicas 
                                (exploración y explotación)</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ronald Zavaleta Yarin.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Ronald Zavaleta Yarin</h2>
                            <p>Ing. Geólogo con especialidad auditoría de IGAs - EIAs de la Universidad UNALM, laboro en el 
                                INGEMMET dentro de proyectos de línea base geoambiental y en el OEFA dentro del Subcomponente
                                 1.2 UCP como supervisor, también en consultoras como Walsh Perú, Sur Amazónica, PERCOQ y Quality 
                                 Management. Trabajo como supervisor de campo en Minas Buenaventura en Huaruro-Cañón del Colca</p>
                        </div>
                    </div>
                </div> 
                
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Samuel P. Canchaya Moya.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Samuel P. Canchaya Moya</h2>
                            <!-- <hr> -->
                            <p>
                            Ing. Geólogo UNI con más de 40 años de experiencia. Magister en Mineralogía obtenido en la Univ. de 
                            Heidelberg-Alemania. Especialista en: Muestreo y QA/QC, Geoestadística, Exploraciones, Análisis 
                            Instrumental y Geometalurgia. Trabajó en Minero Perú, INGEMMET, C° Verde, Buenaventura, Consorcio 
                            , etc. Creador del Concepto de Roca Total (CRT)
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ing. Victor Manuel Vargas Rodriguez.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Víctor Manuel Francisco Javier Vargas Rodríguez</h2>
                            <p>Ingeniero Geólogo, egresado de la Universidad Nacional de Cajamarca. Magister en 
                                Administración Estratégica de Empresas de la Escuela de Negocios. Con más de 16 
                                años de experiencia en exploración e investigación de recursos geotérmicos. Formó parte del 
                                equipo técnico en el «Plan Maestro para el Desarrollo de la Energía Geotérmica en el 
                                País»
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Krover Wilian Lazarte Ponce.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Krover Wilian Lazarte Ponce</h2>
                            <p>Master en Ciencias en Ingeniería Geológica por la Universidad Nacional de Ingeniera.
                            Ingeniero Geofísico de la UNSA con más de 15 años de experiencia en geofísica aplicada.
                            Evaluador gestión de riesgos y desastres originados por fenómenos naturales. Experiencia 
                            en compañías de exploración y explotación petrolera, como Savia Perú S.A.</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Walther Ricardo León Lecaros.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Walther Ricardo León Lecaros</h2>
                            <p>Geólogo egresado y con maestría culminada en la Universidad Nacional Mayor de San Marcos, 
                                con 25 años de experiencia en las especialidades de estratigrafía, geología estructural,
                                 tectónica, cartografía geológica y sistemas petroleros, con amplio conocimiento de la 
                                 geología regional del territorio peruano.  </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Dany Evangelina Alave Chata.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Dany Evangelina Alave Chata</h2>
                            <!-- <hr> -->
                            <p>
                            Ing. Geólogo e Ing. Civil, egresada de la Universidad Nacional del Altiplano 
                            – Puno, especialista en Geotecnia y SSOMA; MSc. En Docencia Universitaria y 
                            Gestión Educativa, con estudios concluidos del doctorado en Ciencia Tecnología
                             y Medio Ambiente. Ing. con 20 años de experiencia laboral en entidades públicas
                              y privadas.
                            </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Ronald Fernando Concha Niño de Guzmán.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2 >Ing. Ronald Fernando Concha Niño de Guzmán</h2>
                            <p>
                            Ingeniero Geólogo, egresado de la UNSAAC. Especialista 
                            en geomorfología glaciar, cambio climático y peligros geológicos. Con más de 12 años en el sector público, fue miembro del Comité Consultivo 
                            Nacional de Asuntos Antárticos y del Comité Nacional de Gestión de Riesgo de Desastres.
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Luis Enrrique Robles Huayllapuma.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Luis Enrrique Robles Huayllapuma </h2>
                            <p>Curso la carrera de Ing. Civil en la Universidad Nacional de San Antonio Abad del Cusco. 
                                Piloto de RPAS por la DGAC desde el 2017. Participación en el levantamiento fotogramétrico 
                                de las carreteras Rio Blanco – Mollepata y Yauri Suyckutambo – Espinar, proyectos realizados 
                                por PER PLAN COPESCO</p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Andrea Villaseca Robertson.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Lic. Andrea Villaseca Robertson</h2>
                            <p>Egresada de la Maestria de Estadística Matemática de la Universidad Nacional Mayor 
                                de San Marcos. Diplomada en Museología y Gestión Cultural. 
                                Apoyo en el Museo Elba Aranda de Sarango, asistente del área de Paleontología 
                                del Museo Didáctico Paleontologico de Ocucaje y practicante-guía en el Museo de Historia 
                                Natural Vera Alleman. Licenciada en biología. </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/FELIX ALEJO LEON MIRANDA GASTAÑAGA.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Felix Alejo Leon Miranda Gastañaga</h2>
                            <p>Geólogo y docente universitario con más de 43 años de Experiencia en la docencia 
                                universitaria de la UNSAAC. Con capacidad de generar grupos de trabajo, motivándolos 
                                hacia el descubrimiento y éxito mediante objetivos comunes de corto y largo plazo.
                                Capacotado en Canadá.
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Kevin.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Geol. Kevin Alexander Gómez Díaz</h2>
                            <p>Geólogo egresado de la UNI. Especialista en el uso del lenguaje de programación 
                                Python para la automatización de procesos en geología y minería. Especialista 
                                con conocimientos en IA aplicada a las Geociencias. 
                                Docente capacitador en GEOCID SAC y Desarrollador de aplicaciones en CODEA UNI.
                             </p>
                        </div>
                    </div>
                </div> 
                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/Jose.jpg" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. José Hardy Huamán Flores</h2>
                            <p>Graduado en Ingeniería Civil en la Universidad Católica de Santa Maria, con 4 
                                años de experiencia en proyectos civiles, costos, presupuestos y gestión de la
                                productividad y con más de 5 años en Maccaferri, empresa Italiana en el rubro 
                                geotécnico e hidráulico, actualmente desempeña el cargo de Area Manager, brindando
                                asesoría técnica para el desarrollo de proyectos civiles, geotécnicos e hidráulicos.

                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. José Carlos Farfán Meza</h2>
                            <p>
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Luis Cerpa Cornejo</h2>
                            <p>
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Germán Arce Sipán</h2>
                            <p>
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Juan Carlos Romero López</h2>
                            <p>
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>MSc. Vidal Huamán Ccollatupa</h2>
                            <p>
                             </p>
                        </div>
                    </div>
                </div> 

                <div class="cuadro__Grid">
                    <div class="card">
                        <div class="cover__card">
                            <img src="./Imagenes/PONENTES/expositor.png" alt="">
                        </div>
                        <div class="datos__ponente">
                            <h2>Ing. Henry Córdoba Luna</h2>
                            <p>
                             </p>
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


</body>
</html>
