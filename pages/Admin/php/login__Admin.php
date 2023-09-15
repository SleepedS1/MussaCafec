<?php

// include("../../../php/conexion.php"); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mussacafec";

$conexion = new mysqli($servername, $username, $password, $dbname);

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}

// Consultar la base de datos para verificar el usuario y la contraseña
$sql = "SELECT * FROM administrador WHERE usuario='$usuario'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    $contrasena_hash = $fila['contrasena'];

    if (password_verify($contrasena, $contrasena_hash)) {

        echo "¡Usuario $usuario ha iniciado sesión con éxito!";
    } else {

        echo "Contraseña incorrecta.";
    }
} else {

    echo "Usuario no encontrado.";
}


$conexion->close();

// Redirigir al usuario
header("Location: ../index.php");
?>
