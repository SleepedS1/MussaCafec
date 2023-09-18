<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/update/update.css">
    <title>Editar Academico - Ponente</title>
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
        $opciones = $_POST["opciones"];
        $titulada = $_POST["titulada"];
        $ficha = $_POST["ficha"];
        $institucion = $_POST["institucion"];
        $n_ponentes = $_POST["n_ponentes"];
        $titulo = $_POST["titulo"];
        $email = $_POST["email"];
        $proyecto = $_POST["proyecto"];

        // Actualizar el registro en la base de datos
        $stmt = $pdo->prepare("UPDATE ac_ponentes SET categoria=?, opciones=?, titulada=?, ficha=?, institucion=?, n_ponentes=?, titulo=?, email=?, proyecto=? WHERE id=?");
        $stmt->execute([$categoria, $opciones, $titulada, $ficha, $institucion, $n_ponentes, $titulo, $email, $proyecto, $id]);

        // Redireccionar a la página de administrador después de la actualización
        header("Location: ../../index.php");
        exit();
    }

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Consultar el registro a editar
        $stmt = $pdo->prepare("SELECT * FROM ac_ponentes WHERE id=?");
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
                <label for="categoria">Categoria de Participación:</label>
                <select name="categoria" id="categoria">
                    <option value="Seleccionar">Seleccionar</option>
                    <option value="Empresarial" <?php if ($row['categoria'] === 'Empresarial') echo 'selected'; ?>>Empresarial</option>
                    <option value="Agroindustrial" <?php if ($row['categoria'] === 'Agroindustrial') echo 'selected'; ?>>Agroindustrial</option>
                    <option value="Agropecuario" <?php if ($row['categoria'] === 'Agropecuario') echo 'selected'; ?>>Agropecuario</option>
                    <option value="Energias renovables" <?php if ($row['categoria'] === 'Energias renovables') echo 'selected'; ?>>Energias renovables</option>
                    <option value="Proteccion al Medio Ambiente" <?php if ($row['categoria'] === 'Proteccion al Medio Ambiente') echo 'selected'; ?>>Proteccion al Medio Ambiente</option>
                    <option value="Arquitectura y Construcciones Sostenibles" <?php if ($row['categoria'] === 'Arquitectura y Construcciones Sostenibles') echo 'selected'; ?>>Arquitectura y Construcciones Sostenibles</option>
                </select>
                <div class="form-content">
                    <label for="opciones">Institución de Participación</label>
                    <select id="opciones" name="opciones">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Sena" <?php if ($row['opciones'] === 'Sena') echo 'selected'; ?>>SENA</option>
                        <option value="Externa" <?php if ($row['opciones'] === 'Externa') echo 'selected'; ?>>Externa</option>
                        <!-- Agrega más opciones si es necesario -->
                    </select>
                </div>

                <div id="opcion1Detalle" class="hidden form-content">
                    <label for="titulada">Titulada</label>
                    <input type="text" id="titulada" name="titulada" placeholder="Nombre de la Titulada" value="<?php echo $row['titulada']; ?>">
                </div>

                <div id="opcion2Detalle" class="hidden form-content">
                    <label for="ficha">Ficha</label>
                    <input type="text" id="ficha" name="ficha" placeholder="Número de Ficha" value="<?php echo $row['ficha']; ?>">
                </div>

                <div id="opcion3Detalle" class="hidden form-content">
                    <label for="institucion">Institución</label>
                    <input type="text" id="institucion" name="institucion" placeholder="Nombre de la Institución" value="<?php echo $row['institucion']; ?>">
                </div>

                <div class="form-content">
                    <label for="n_ponentes">Numero de Ponentes</label>
                    <select name="n_ponentes" id="n_ponentes">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="1" <?php if ($row['n_ponentes'] === '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($row['n_ponentes'] === '2') echo 'selected'; ?>>2</option>
                        <option value="3" <?php if ($row['n_ponentes'] === '3') echo 'selected'; ?>>3</option>
                    </select>
                </div>

                <div class="form-content">
                    <label for="titulo">Titulo del Proyecto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="..." value="<?php echo $row['titulo']; ?>">
                </div>

                <div class="form-content">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email del Representante" value="<?php echo $row['email'] ?>">
                </div>

                <div class="form-content">
                    <label for="proyecto">Tipo de Proyecto</label>
                    <select name="proyecto" id="proyecto">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Formativo" <?php if ($row['proyecto'] === 'Formativo') echo 'selected'; ?>>Formativo</option>
                        <option value="Productivo" <?php if ($row['proyecto'] === 'Productivo') echo 'selected'; ?>>Productivo</option>
                        <option value="SENNOVA" <?php if ($row['proyecto'] === 'SENNOVA') echo 'selected'; ?>>SENNOVA</option>
                        <option value="Externo" <?php if ($row['proyecto'] === 'Externo') echo 'selected'; ?>>Externo</option>
                    </select>
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

