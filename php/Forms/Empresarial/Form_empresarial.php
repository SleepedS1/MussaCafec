<?php
include("../../conexion.php");

if (isset($_POST['contact'])) {

        $institucion = $_POST['institucion'];
        $participantes = $_POST['participantes'];
        $titulo = $_POST['titulo'];
        $representante = $_POST['representante'];
        $fecha = date("Y-m-d"); // Formato de fecha correcto

        // Preparar la consulta SQL
        $consulta = $pdo->prepare("INSERT INTO empresarial (institucion, participantes, titulo, representante, fecha) VALUES (?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        $resultado = $consulta->execute([$institucion, $participantes, $titulo, $representante, $fecha]);

        if ($resultado) {
            echo '<script>alert("Tu registro se ha completado")
            window.location.href="../../../pages/Form_empresarial.php";
            </script>';
        } else {
            echo '<script>alert("Ha ocurrido un problema")
            window.location.href="../../../pages/Form_empresarial.php";
            </script>';
            
        }
    } else {
        echo '<script>alert("Debe llenar los campos obligatorios")
        window.location.href="../../../pages/Form_empresarial.php";
        </script>';
        
    }
    
?>