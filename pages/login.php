<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="shortcut icon" href="../img/logoSena.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login/login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</head>
<nav class="navbars">
    <div class="logo">
        <img src="../img/logoSena-white.png" alt="Logo Sena"> <h2>MUSSA CAFEC</h2>
    </div>
    <div id="buttons-nav" class="nav-buttons">
        <button><a href="../index.php">Inicio</a></button>
        <button><a href="../pages/Form_academico.php">Registro</a></button>
        <div id="ingreso">
            <button id="access"><a href="login.php">Administrador</a></button>
        </div>
    </div>
    <div class="mobile-menu-button">
        <span>&#9776;</span>
    </div>
</nav>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="contenedor__login-register">
                    <form action="./Admin/php/login__Admin.php" method="POST">
                        
                        <h2>Iniciar sesion</h2>

                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" required><br><br>

                        <label for="contrasena">Contraseña:</label>
                        <input type="password" name="contrasena" required><br><br>

                        <button name="ingreso" class="btn btn-outline-primary btn-lg btn-light">Iniciar Sesion</button>
                    </form>
                </div>    
                <div class="caja__trasera-register">
                    <img src="../img/logoSena.png" alt="" width="80">
                    <h3>Acceso Administrativo</h3>
                </div> 
            </div>
        </div>
    </main>
</body>
</html>