<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update/update.css">
    <title>Editar Empresarial</title>
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
        $representante = $_POST["representante"];

        // Actualizar el registro en la base de datos
        $stmt = $pdo->prepare("UPDATE empresarial SET institucion=?, participantes=?, titulo=?, representante=? WHERE id=?");
        $stmt->execute([$institucion, $participantes, $titulo, $representante, $id]);

        // Redireccionar a la página de administrador después de la actualización
        header("Location: ../../index.php");
        exit();
    }

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Consultar el registro a editar
        $stmt = $pdo->prepare("SELECT * FROM empresarial WHERE id=?");
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
                    <label for="institucion">Institucion</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Institucion" value="<?php echo $row['institucion']; ?>">
                </div>

                <div class="form-content">
                    <label for="participantes">Numero de Participantes</label>
                    <select name="participantes" id="participantes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1" <?php if ($row['participantes'] === '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($row['participantes'] === '2') echo 'selected'; ?>>2</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="titulo">Titulo del proyecto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="..." value="<?php echo $row['titulo']; ?>">
                </div>

                <div class="form-content">
                    <label for="representante">Representante del Equipo</label>
                    <input type="text" name="representante" id="representante" placeholder="Ingrese el nombre del representante" value="<?php echo $row['representante']; ?>">
                </div>
            </div>

            <div class="btn-container">
                <button type="submit">Actualizar</button>
            </div>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </form>
    </div>
</body>
</html>
