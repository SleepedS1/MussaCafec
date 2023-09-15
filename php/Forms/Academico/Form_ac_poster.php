<?php
include("../../conexion.php");

if (isset($_POST['contact'])) {

        $institucion = $_POST['institucion'];
        $participantes = $_POST['participantes'];
        $titulo = $_POST['titulo'];
        $fecha = date("Y-m-d"); // Formato de fecha correcto

        // Preparar la consulta SQL
        $consulta = $pdo->prepare("INSERT INTO ac_poster (institucion, participantes, titulo, fecha) VALUES (?, ?, ?, ?)");

        // Ejecutar la consulta
        $resultado = $consulta->execute([$institucion, $participantes, $titulo, $fecha]);

        if ($resultado) {
            echo '<script>alert("Tu registro se ha completado")</script>';
            header("Location: ../../../pages/Form_academico.php");
        } else {
            echo '<script>alert("Ha ocurrido un problema")</script>';
            header("Location: ../../../pages/Form_academico.php");
        }
    } else {
        echo '<script>alert("Debe llenar los campos obligatorios")</script>';
        header("Location: ../../../pages/Form_academico.php");
    }
    
?>