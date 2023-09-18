<?php
include("../../conexion.php");

if (isset($_POST['contact'])) {
    // Verificar si los campos obligatorios no están vacíos
    if (
        !empty($_POST['categoria']) &&
        !empty($_POST['opciones']) &&
        !empty($_POST['n_ponentes']) &&
        !empty($_POST['titulo']) &&
        !empty($_POST['email'])
    ) {
        // Recoger los datos del formulario
        $categoria = $_POST['categoria'];
        $opciones = $_POST['opciones'];
        $titulada = $_POST['titulada'] ?? '';
        $ficha = $_POST['ficha'] ?? '';
        $institucion = $_POST['institucion'] ?? '';
        $n_ponentes = $_POST['n_ponentes'];
        $titulo = $_POST['titulo'];
        $email = $_POST['email'];
        $proyecto = $_POST['proyecto'];
        $archivo = $_POST['archivo'];
        $fecha = date("Y-m-d"); // Formato de fecha correcto

        // Preparar la consulta SQL
        $consulta = $pdo->prepare("INSERT INTO ac_ponentes (categoria, opciones, titulada, ficha, institucion, n_ponentes, titulo, email, proyecto, archivo, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        $resultado = $consulta->execute([$categoria, $opciones, $titulada, $ficha, $institucion, $n_ponentes, $titulo, $email, $proyecto, $archivo, $fecha]);

        if ($resultado) {
            echo '<script>alert("Tu registro se ha completado")
            window.location.href="../../../pages/Form_academico.php";
            </script>';
        } else {
            echo '<script>alert("Ha ocurrido un problema")
            window.location.href="../../../pages/Form_academico.php";
            </script>';
            
        }
    } else {
        echo '<script>alert("Debe llenar los campos obligatorios")
        window.location.href="../../../pages/Form_academico.php";
        </script>';
        
    }
    
    
}
?>
