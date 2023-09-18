<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="shortcut icon" href="../img/logoSena.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form/Academico/Form_academico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbars">
        <div class="logo">
            <img src="../img/logoSena-white.png" alt="Logo Sena"> <h2>MUSSA CAFEC</h2>
        </div>
        <div id="buttons-nav" class="nav-buttons">
            <a href="../index.php"><button>Inicio</button></a>
            <a href="./Form_academico.php"><button>Registro</button></a>
            <div id="ingreso">
                <a href="login.php"><button id="access">Administrador</button></a>
            </div>
        </div>
        <div class="mobile-menu-button">
            <span>&#9776;</span>
        </div>
    </nav>
    <br>
    <div class="seleccion">
        <div>
            <h2>Seleccione su Categoria</h2>
        </div>
        <br>
        <div class="boton">
            <button class="btn btn-outline-dark" id="mostrarFormulario1">Ponente</button>
            <button class="btn btn-outline-dark" id="mostrarFormulario2">Poster</button>
        </div>
    </div>
    <br>
    <div id="formulario" class="form-container1" style="display: block;">
        <h2>Ponente</h2>
        <br>
        <div class="formato">
            <div class="info">
                <p class="sos"><span>Recuerda: </span>‎ Debes descargar el formato necesario para esta actividad</p>
            </div>
            <div>
                <a href="../file/formatos_ponencia.rar" download="" style="text-decoration:none;">
                    <button class="btn btn-outline-dark">Descargar</button>
                </a>
            </div>
        </div>
        <br>
        <form class="formulario" method="POST" autocomplete="off" action="../php/Forms/Academico/Form_ac_ponente.php">
            

            <div class="form-group">
                <div class="form-content">
                    <label for="categoria">Categoria de Participación</label>
                    <select name="categoria" id="categoria">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Empresarial">Empresarial</option>
                        <option value="Agroindustrial">Agroindustrial</option>
                        <option value="Agropecuario">Agropecuario</option>
                        <option value="Energias renovables">Energias renovables</option>
                        <option value="Proteccion al Medio Ambiente">Proteccion al Medio Ambiente</option>
                        <option value="Arquitectura y Construcciones Sostenibles">Arquitectura y Construcciones Sostenibles</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="opciones">Institución de Participación</label>
                    <select id="opciones" name="opciones">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Sena">SENA</option>
                        <option value="Externa">Externa</option>
                        <!-- Agrega más opciones si es necesario -->
                    </select>
                </div>

                <div id="opcion1Detalle" class="hidden form-content" style="display: none;">
                    <label for="titulada">Titulada</label>
                    <input type="text" id="titulada" name="titulada" placeholder="Nombre de la Titulada">
                </div>

                <div id="opcion2Detalle" class="hidden form-content" style="display: none;">
                    <label for="ficha">Ficha</label>
                    <input type="text" id="ficha" name="ficha" placeholder="Número de Ficha">
                </div>

                <div id="opcion3Detalle" class="hidden form-content" style="display: none;">
                    <label for="institucion">Institución</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Nombre de la Institución">
                </div>

                <div class="form-content">
                <label for="n_ponentes">Numero de Ponentes</label>
                    <select name="n_ponentes" id="n_ponentes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>


                <div class="form-content">
                    <label for="titulo">Titulo del Proyecto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="...">
                </div>

                <div class="form-content">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email del Representante">
                </div>
                
                <div class="form-content">
                    <label for="proyecto">Tipo de Proyecto</label>
                    <select name="proyecto" id="proytecto">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Formativo">Formativo</option>
                        <option value="Productivo">Productivo</option>
                        <option value="SENNOVA">SENNOVA</option>
                        <option value="Externo">Externo</option>
                    </select>
                </div>
                    </div>
                    <p>
                Se debe cargar documento en formato Word con la información del proyecto y documento en PowerPoint o PDF con la presentación del proyecto. (20 Mb x documento).
                <br><br>
                Los documentos deben ir nombrados por el título del proyecto.
            </p>
            <div class="form-content">
                    <label for="archivo">Selecciona un archivo PDF Word y Power Point aqui:</label><br>
                    <input type="file" id="archivo" name="archivo" accept=".pdf, pptx, docx, txt" enctype="">
                    <br>
            </div>
            <br>
            <input type="submit" class="btn btn-outline-success" name="contact" value="Enviar">
            <br>
        </form>
    </div>
    <div id="formulario2" class="form-container2" style="display: none;">
        <h2>Poster</h2>
        <br>
        <div class="formato">
            <div class="texto">
                <p class="sos"><span>Recuerda:</span>‎ Debes descargar el formato necesario para esta actividad</p>
            </div>
            <div>
                <a href="../file/Poster.zip" download="" style="text-decoration:none;">
                    <button type="submit" class="btn btn-outline-dark" download>Descargar</button>
                </a>
            </div>
        </div>
        <br>
        <form class="formulario" method="POST" autocomplete="off" action="../php/Forms/Academico/Form_ac_poster.php">
                <div class="form-content">
                <label for="institucion">Institucion</label>
                <input type="text" name="institucion" placeholder="Nombre de la Institucion">
            </div>
            <br>
            <div class="form-content">
                <label for="participantes">Participantes</label>
                <select name="participantes" id="participantes">
                    <option value="Seleccionar">Seleccionar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <br>
            <div class="form-content">
                <label for="titulo">Titulo del proyecto</label>
                <input type="text" name="titulo" placeholder="...">
            </div>
            <br>
            <p>
                Se debe cargar documento en formato Word con la información del proyecto y documento en power point o pdf con la presentación del proyecto. 
                (20 Mb x documento ).
            
            <br><br>
     
                Los documentos debe ir nombrados por el titulo del proyecto.
                </p>
                <div class="form-container">
                    <label for="archivo">Selecciona un archivo PDF Word y Power Point aqui:</label><br>
                    <input type="file" id="archivo" name="archivo" accept=".pdf, pptx, docx, txt" enctype="">
                    <br>
                </div>
                <br>
                <input type="submit" class="btn btn-outline-success" name="contact" value="Enviar">
                <br>
        </form>
    </div>
    <br>
    <h2>Otros Concursos</h2>
    <br>
    <div class="curso">
        <div class="more">
            <img src="../img/Concurso/concurso 1.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_empresarial.php">Registrarse</a></button>
        </div>
        <div class="more">
            <img src="../img/Concurso/concurso 2.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_robotica.php">Registrarse</a></button>
        </div>
    </div>
</body>
<br><br>
<footer>
    <div class="general">
        <div class="imagen">
            <img src="../img/LogoSENA_Sennova.png" alt="">
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
<script src="../js/Form_academico.js"></script>
</html>