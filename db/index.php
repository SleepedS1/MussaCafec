<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login y registro</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Inicio sesion para entrar a la pagina</p>
                    <button id="btn__iniciar--sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Aun no tienes una cuenta?</h3>
                    <p>Registrate para acceder a la pagina</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div> 
          </div>

            <div class="contenedor__login-register">

                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
            </div>    
        </div>

    </main>
</body>
</html>