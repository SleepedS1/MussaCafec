<?php
include("../../conexion.php");

if (isset($_POST['contact'])) {
    // Verificar si los campos obligatorios no están vacíos
    if (
        !empty($_POST['categoria']) &&
        !empty($_POST['institucion']) &&
        !empty($_POST['participantes']) &&
        !empty($_POST['representante']) &&
        !empty($_POST['email'])
    ) {
        // Recoger los datos del formulario
        $categoria = $_POST['categoria'];
        $institucion = $_POST['institucion'];
        $equipo = $_POST['equipo'];
        $participantes = $_POST['participantes'];
        $representante = $_POST['representante'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fecha = date("Y-m-d"); // Formato de fecha correcto

        // Preparar la consulta SQL
        $consulta = $pdo->prepare("INSERT INTO robotica (categoria, institucion, equipo, participantes, representante, email, telefono, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        $resultado = $consulta->execute([$categoria, $institucion, $equipo, $participantes, $representante, $email, $telefono, $fecha]);

        if ($resultado) {
            echo '<script>alert("Tu registro se ha completado")
            window.location.href="../../../pages/Form_robotica.php";
            </script>';
        } else {
            echo '<script>alert("Ha ocurrido un problema")
            window.location.href="../../../pages/Form_robotica.php";
            </script>';
            
        }
    } else {
        echo '<script>alert("Debe llenar los campos obligatorios")
        window.location.href="../../../pages/Form_robotica.php";
        </script>';
        
    }
    
    
}
?>
