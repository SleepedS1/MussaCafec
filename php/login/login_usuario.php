<?php

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE usuario='$usurio' and
    contrasena ='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        echo'
        <script>
            alert("Usuario no existente, verificar los datos introducidos");
            window.location = "pages/login.php";
        </script>
        ';     
        exit;
    }else{
        header("location: #");
        exit;
    }

?>