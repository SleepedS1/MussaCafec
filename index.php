<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logoSena.png" type="image/x-icon">
    <title>Mussa Cafec</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="js/banners.js" defer></script>
    <script src="js/navbar.js"></script>
</head>
<body>
    <nav class="navbars">
        <div class="logo">
            <img src="img/logoSena-white.png" alt="Logo Sena"> <h2>MUSSA CAFEC</h2>
        </div>
        <div id="buttons-nav" class="nav-buttons">
            <a href="index.php"><button>Inicio</button></a>
            <a href="./pages/Form_academico.php"><button>Registro</button></a>
            <div id="ingreso">
                <a href="./pages/login.php"><button id="access">Administrador</button></a>
            </div>
        </div>
        <div id="toggleMenu" class="mobile-menu-button">
            <span>&#9776;</span>
        </div>
    </nav>
    <br>
    <br>
    <h1 id="title">¡Bienvenidos al VI Encuentro de Semilleros de Investigación SENA Regional Casanare!</h1>
    <br>
    <br>
    <div class="banner-container">
        <div class="arrow arrow-left" id="prev-button">
            <span>&#9664;</span>
        </div>
        <img id="banner-image" src="imagen1.jpg" alt="Imagen 1">
        <div class="arrow arrow-right" id="next-button">
            <span>&#9654;</span>
        </div>
    </div>
    <br>
    <br>
    <section id="group">
        <div class="cont">

            <div class="course-g1">
                <div class="course-img1">
                  <img src="./img/Concurso/concurso 3.png" alt="">
                </div>
                <div class="course-text1">
                    <h3>ACADEMICO</h3>
                    <br>
                    <p>
                        ¡VI Encuentro Regional de Semilleros de investigación SENA Regional Casanare, 
                        desde la innovación e investigación hacia la transferencia energética, 
                        tiene el objetivo de Fomentar la investigación, innovación y desarrollo tecnológico 
                        en los aprendices e instructores del Sena Regional Casanare a través de la divulgación 
                        y reconocimiento del trabajo desarrollado desde los semilleros y grupos de investigación de la región Orinoquia.!
                    </p>
                    <a href="pages/Form_academico.php" class="btn btn-dark">Inscríbete aquí</a><br>
                    <a href="./file/Conditions/Terminosycondiciones_2023 (1).pdf" class="btn btn-info" target="blank">Condiciones</a>
                </div>
            </div>

            <div class="course-g2">
                <div class="course-text2">
                    <h3>PRESENTACION DE LA FERIA EMPRESARIAL</h3>
                    <br>
                    <p>
                        Un espacio que reúne en un mismo lugar a emprendedores, estudiantes y aprendices con el propósito de visibilizar sus emprendimientos, 
                        negocios o proyectos que cuenten con productos y servicios que puedan ser ofrecidos a la comunidad
                    </p>
                    <a href="pages/Form_empresarial.php"class="btn btn-dark">Inscríbete aquí</a><br>
                    <a href="./file/Conditions/terminos_feriaEmpresarial.pdf" class="btn btn-info" target="blank">Condiciones</a>
                </div>
                <div class="course-img2">
                    <img src="./img/Concurso/concurso 1.png" alt="">
                </div>
            </div>

            <div class="course-g3">
                <div class="course-img3">
                    <img src="./img/Concurso/concurso 2.png" alt="">
                </div>
                <div class="course-text3">
                    <h3>TORNEO DE ROBOTICA</h3>
                    <br>
                    <p>
                        1er Torneo de Robótica SENA Regional Casanare, proyecto que busca fortalecer las capacidades y habilidades en temas ciencia, tecnología, 
                        innovación, ingeniería y robótica a través de la competencia en robot seguidor de línea velocistas, robot de batalla mini-sumo, robot futbolero y robot SENABOT
                    </p>
                    <a href="pages/Form_robotica.php" class="btn btn-dark">Inscríbete aquí</a><br>
                    <a href="./file/Conditions/ITORNEO_ROBOTICA_SENA_2023.pdf" class="btn btn-info" target="blank">Condiciones</a>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
    <div class="general">
        <div class="imagen">
            <img src="./img/LogoSENA_Sennova.png" alt="">
        </div>
        <div class="icons">
            <a href="https://web.facebook.com/SENACasanare/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/senacomunica/?hl=es-la" target="_blank"><i class="fab fa-instagram" target="blank"></i></a>
            <a href="https://twitter.com/SENAComunica?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCt5y885UFplu2okY39TBwCg" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <div class="contact">
        <p class="contacto">
            Conmutador Nacional (57 1) 5461500 - Extensiones <br>
            Atención al empresario: Bogotá (57 1) 3430101 - Línea gratuita y resto del país 018000 910682 <br>
            Correo notificaciones judiciales: servicioalciudadano@sena.edu.co <br>
        </p>
    </div>
</footer>
</html>