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

if (isset($_GET['eliminar']) && isset($_GET['id'])) {
    $id_a_eliminar = $_GET['id'];
    
    try {
        // Realiza una consulta SQL para eliminar el registro específico
        $stmt = $pdo->prepare("DELETE FROM ac_ponentes WHERE id = ?");
        $stmt->execute([$id_a_eliminar]);
        
        // Redirige de nuevo a la página del administrador después de eliminar el registro
        header("Location: ../../index.php");
        exit();
    } catch (PDOException $e) {
        die("Error al eliminar el registro: " . $e->getMessage());
    }
}

// Consulta SQL para obtener todos los registros de la tabla "ac_ponentes"
$consulta = $pdo->query("SELECT id, categoria, opciones, titulada, ficha, institucion, n_ponentes, titulo, email, proyecto, archivo FROM ac_ponentes");
?>