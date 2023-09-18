<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update/update.css">
    <title>Editar Robotica</title>
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
        $categoria = $_POST["categoria"];
        $institucion = $_POST["institucion"];
        $equipo = $_POST["equipo"];
        $participantes = $_POST["participantes"];
        $representante = $_POST["representante"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        // Actualizar el registro en la base de datos
        $stmt = $pdo->prepare("UPDATE robotica SET categoria=?, institucion=?, equipo=?, participantes=?, representante=?, email=?, telefono=? WHERE id=?");
        $stmt->execute([$categoria, $institucion, $equipo, $participantes, $representante, $email, $telefono, $id]);

        // Redireccionar a la página de administrador después de la actualización
        header("Location: ../../index.php");
        exit();
    }

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Consultar el registro a editar
        $stmt = $pdo->prepare("SELECT * FROM robotica WHERE id=?");
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
                    <label for="categoria">Categoria de Participación</label>
                    <select name="categoria" id="categoria">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Robot seguidor de linea velocista" <?php if ($row['categoria'] === 'Robot seguidor de linea velocista') echo 'selected'; ?>>Robot seguidor de linea velocista</option>
                        <option value="Robot batalla de mini sumo" <?php if ($row['categoria'] === 'Robot batalla de mini sumo') echo 'selected'; ?>>Robot batalla de mini sumo (autonomo)</option>
                        <option value="Robot futbolero SENACUP" <?php if ($row['categoria'] === 'Robot futbolero SENACUP') echo 'selected'; ?>>Robot futbolero SENACUP</option>
                        <option value="SENABOT" <?php if ($row['categoria'] === 'SENABOT') echo 'selected'; ?>>SENABOT</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="institucion">Institucion</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Institucion" value="<?php echo $row['institucion']; ?>">
                </div>

                <div class="form-content">
                    <label for="equipo">Nombre del Equipo</label>
                    <input type="text" id="equipo" name="equipo" placeholder="Nombre del Equipo" value="<?php echo $row['equipo']; ?>">
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
                    <label for="representante">
                    <label for="representante">Representante del Equipo</label>
                    <input type="text" name="representante" id="representante" placeholder="Nombre del Representante" value="<?php echo $row['representante']; ?>">
                </div>

                <div class="form-content">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email del Representante" value="<?php echo $row['email']; ?>">
                </div>
                
                <div class="form-content">
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>">
                </div>
            </div>

            <!-- Agrega los demás campos del formulario -->

            <div class="btn-container">
                <button type="submit">Actualizar</button>
            </div>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </form>
    </div>
</body>
</html>
