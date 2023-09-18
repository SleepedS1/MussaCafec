<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mussacafec";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }

        // Función para eliminar registros
        function eliminarRegistro($pdo, $id) {
            try {
                $stmt = $pdo->prepare("DELETE FROM robotica WHERE id = ?");
                $stmt->execute([$id]);
                header("Location: ../../index.php");
                exit();
            } catch (PDOException $e) {
                die("Error al eliminar el registro: " . $e->getMessage());
            }
        }

        // Verifica si se ha hecho clic en el botón "Eliminar"
        if (isset($_GET['eliminar']) && isset($_GET['id'])) {
            $id_a_eliminar = $_GET['id'];
            eliminarRegistro($pdo, $id_a_eliminar);
        }

        // Consulta SQL para obtener todos los registros de la tabla "robotica"
        $consulta_robotica = $pdo->query("SELECT id, categoria, institucion, equipo, participantes, representante, email, telefono FROM robotica");
        ?>