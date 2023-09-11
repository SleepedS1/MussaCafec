<?php

    include 'conexion_be.php';

    // $nombre_completo = $_POST['nombre'];
    // $correo= $_POST ['correo'];
    $usuario= $_POST ['usuario'];
    $contrasena= $_POST ['contrasena'];
    $contrasena= hash('sha512', $contrasena);

    $query= "INSERT INTO usuarios(nombre_completo,correo, usuario, contrasena) 
    VALUES('$usuario', '$contrasena')";
// '$nombre_completo', '$correo',

//funcion para que el correo no se repita//
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$contrasena' ");

    if(mysqli_num_rows($verificar_contrasena) > 0){
        echo '+++++++
        ...................................++*.
        <script>
            alert("esta contraseña ya se encuentra en uso, por favor intente con otro");
            window.location = "../index.php";
        </script>
        ';
        exit();

    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("este usuario ya se encuentra en uso, por favor intente con otro");
            window.location = "../index.php";
        </script>
        ';
        exit();

    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    }else{
        echo '
            <script>
                alert("error, usuario no se a podido almacenar");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqul_close($conexion);

header('location: pages/login.php');

?>