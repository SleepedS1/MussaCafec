<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update/update.css">
    <title>Editar Academico - Poster</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mussacafec";

    try {
        $pdo = new PDO("mysql:dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $id = $_POST["id"];
        $institucion = $_POST["institucion"];
        $participantes = $_POST["participantes"];
        $titulo = $_POST["titulo"];

        // Actualizar el registro en la base de datos
        $stmt = $pdo->prepare("UPDATE ac_poster SET institucion=?, participantes=?, titulo=? WHERE id=?");
        $stmt->execute([$institucion, $participantes, $titulo, $id]);

        // Redireccionar a la página de administrador después de la actualización
        header("Location: ../../index.php");
        exit();
    }

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Consultar el registro a editar
        $stmt = $pdo->prepare("SELECT * FROM ac_poster WHERE id=?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            die("Registro no encontrado.");
        }
    } else {
        die("ID de registro no proporcionado.");
    }
    ?>

    <h1>Editar Registro</h1>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <div class="form-content">
                    <label for="institucion">Institución</label>
                    <input type="text" name="institucion" id="institucion" placeholder="Nombre de la Institución" value="<?php echo $row['institucion']; ?>">
                </div>
                <div class="form-content">
                    <label for="participantes">Participantes</label>
                    <select name="participantes" id="participantes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1" <?php if ($row['participantes'] === '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($row['participantes'] === '2') echo 'selected'; ?>>2</option>
                        <option value="3" <?php if ($row['participantes'] === '3') echo 'selected'; ?>>3</option>
                    </select>
                </div>
    
                <div class="form-content">
                    <label for="titulo">Titulo del proyecto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="..." value="<?php echo $row['titulo']; ?>">
                </div>
    
                <div class="btn-container">
                    <button type="submit">Actualizar</button>
                </div>
    
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>

        </form>
    </div>
</body>
</html>
