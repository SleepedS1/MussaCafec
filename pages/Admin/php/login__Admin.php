<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mussacafec";

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Establece la conexión con la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Consulta SQL para verificar las credenciales del administrador
$sql = "SELECT * FROM administrador WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado) > 0) {
    // Las credenciales son válidas
    header("Location: ../index.php");
    exit;
} else {
    echo '
    <script>
        alert("Usuario no existente o contraseña incorrecta, verifica los datos introducidos");
        window.location.href="../../login.php";
    </script>';
    exit;
}

// Cierra la conexión
mysqli_close($conexion);
?>

