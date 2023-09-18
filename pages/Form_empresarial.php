<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="shortcut icon" href="../img/logoSena.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form/Empresarial/Form_empresarial.css">
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
        <h2>Feria empresarial</h2>
        <br>
        <br>

        <form class="formulario" method="POST" autocomplete="off" action="../php/Forms/Empresarial/Form_empresarial.php">

            <div class="form-group">
                <div class="form-content">

                    <label for="institucion">Institucion</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Institucion">
                </div>

                <div class="form-content">
                <label for="participantes">Numero de Participantes</label>
                    <select name="participantes" id="separticipantes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="titulo">Titulo del proyecto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="...">
                </div>

                <div class="form-content">
                    <label for="representante">Representante del Equipo</label>
                    <input type="text" name="representante" id="representante" placeholder="Ingrese el nombre del representante">
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
            <img src="../img/Concurso/concurso 2.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_robotica.php">Registrarse</a></button>
        </div>
        <div class="more">
            <img src="../img/Concurso/concurso 3.png" alt="" width="700">
            <button class="btn btn-success"><a href="Form_academico.php"> Registrarse</a></button>
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