<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="shortcut icon" href="../img/logoSena.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form/Robotica/Form_robotica.css">
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
    <br><br>
    <div class="form-container">
        <h2>Robótica</h2>
        <br>
        <br>

        <form class="formulario" method="POST" autocomplete="off" action="../php/Forms/Robotica/Form_robotica.php">

            <div class="form-group">
                <div class="form-content">
                    <label for="categoria">Categoria de Participación</label>
                    <select name="categoria" id="categoria">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Robot seguidor de linea velocista">Robot seguidor de linea velocista</option>
                        <option value="Robot batalla de mini sumo">Robot batalla de mini sumo (autonomo)</option>
                        <option value="Robot futbolero SENACUP">Robot futbolero SENACUP</option>
                        <option value="SENABOT">SENABOT</option>
                    </select>
                </div>

                <div class="form-content">

                    <label for="institucion">Institucion</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Institucion">
                </div>

                <div class="form-content">
                    <label for="equipo">Nombre del Equipo</label>
                    <input type="text" id="equipo" name="equipo" placeholder="Nombre del Equipo ">
                </div>

                <div class="form-content">
                <label for="participantes">Numero de Participantes</label>
                    <select name="participantes" id="participantes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="representante">Representante del Equipo</label>
                    <input type="text" name="representante" id="representante" placeholder="Nombre del Representante">
                </div>

                <div class="form-content">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email del Representante">
                </div>
                
                <div class="form-content">
                        <label for="telefono">Telefono</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Telefono ">
                </div>
            </div>

            <br>

            <input class="btn btn-outline-success" type="submit" name="contact" value="Enviar">
            <br>
        </form>
    </div>
    <br>
    <div class="curso">
        <div class="more">
            <img src="../img/Concurso/concurso 1.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_empresarial.php">Registrarse</a></button>
        </div>
        <div class="more">
            <img src="../img/Concurso/concurso 3.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_academico.php">Registrarse</a></button>
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
</html>