<?php
include("../../conexion.php");

if (isset($_POST['contact'])) {

        $institucion = $_POST['institucion'];
        $participantes = $_POST['participantes'];
        $titulo = $_POST['titulo'];
        $archivo = $_POST['archivo'];
        $fecha = date("Y-m-d"); // Formato de fecha correcto

        // Preparar la consulta SQL
        $consulta = $pdo->prepare("INSERT INTO ac_poster (institucion, participantes, titulo, archivo, fecha) VALUES (?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        $resultado = $consulta->execute([$institucion, $participantes, $titulo, $archivo, $fecha]);

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
    
?>