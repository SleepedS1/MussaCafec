<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="./css/Admin.css">
    <link rel="shortcut icon" href="../../img/logoSena.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</head>
<body>
    <header>
        <div id="admin-info">
            <p>Bienvenido Admin</p>
        </div>
        <div id="logout-btn">
            <a href="../login.php">Cerrar sesión</a>
            <img src="../../img/logoSena-white.png" alt="" width="50">
        </div>
    </header>
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

    ?>
    <main>
        <div class="buttons-container">
            <button onclick="showTable('academic-section')">Mostrar Tabla Académica</button> 
            <button onclick="showTable('business-fair-section')">Mostrar Tabla de Feria Empresarial</button>
            <button onclick="showTable('robotics-contest-section')">Mostrar Tabla de Concurso de Robótica</button>
        </div>
        <br>
        <hr>
        <section id="academic-section" class="hidden">
            <h2>Sección Académica</h2>
            <br>
            <div id="table-container">
                <table id="ac_ponentes_table">
                    <thead>
                        <tr>
                            <th>Ponente</th>
                            <th>Categoria de Participación</th>
                            <th>Institución de Participación</th>
                            <th>Titulada</th>
                            <th>Ficha</th>
                            <th>Institución</th>
                            <th>Numero de Ponentes</th>
                            <th>Titulo del Proyecto</th>
                            <th>Email</th>
                            <th>Tipo de Proyecto</th>
                            <th>Archivos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Consulta SQL para obtener todos los registros de la tabla "ac_ponentes"
                        $consulta = $pdo->query("SELECT id, categoria, opciones, titulada, ficha, institucion, n_ponentes, titulo, email, proyecto, archivo FROM ac_ponentes");

                        while ($row_ac_ponentes = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>';
                            echo '<td>--</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['categoria']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['opciones']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['titulada']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['ficha']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['institucion']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['n_ponentes']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['titulo']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['email']) . '</td>';
                            echo '<td>' . htmlspecialchars($row_ac_ponentes['proyecto']) . '</td>';
                            if (!empty($row_ac_ponentes['archivo'])) {
                                echo '<td><a href="' . $row_ac_ponentes['archivo'] . '" download=""><button class="download-button">Descargar</button></a></td>';
                            } else {
                                echo '<td></td>';
                            }
                            echo '<td><a href="php/Update/ponente.php?id=' . $row_ac_ponentes['id'] . '"><button class="update-button">Actualizar</button></a><br><br><a name="eliminar" href="php/Delete/ponente.php?id=' . $row_ac_ponentes['id'] . '&eliminar=1"><button class="delete-button">Eliminar</button></a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <div id="ac_poster">
                <table id="ac_poster_table">
                    <tr>
                        <th><h3>Poster</h3></th>
                        <th><label for="institucion">Institución</label></th>
                        <th><label for="participantes">Participantes</label></th>
                        <th><label for="titulo">Titulo del proyecto:</label></th>
                        <th>Archivos:</th>
                    </tr>
                    <?php
                    // Consulta SQL para obtener todos los registros de la tabla "ac_poster"
                    $consulta_ac_poster = $pdo->query("SELECT * FROM ac_poster");

                    while ($row_ac_poster = $consulta_ac_poster->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>--</td>';
                        echo '<td>' . htmlspecialchars($row_ac_poster['institucion']) . '</td>';
                        echo '<td>' . htmlspecialchars($row_ac_poster['participantes']) . '</td>';
                        echo '<td>' . htmlspecialchars($row_ac_poster['titulo']) . '</td>';
                        if (!empty($row_ac_poster['archivo'])) {
                            echo '<td><a href="' . $row_ac_poster['archivo'] . '" download=""><button class="download-button">Descargar</button></a></td>';
                        } else {
                            echo '<td></td>';
                        }
                        
                        echo '<td><a href="php/Update/poster.php?id=' . $row_ac_poster['id'] . '"><button class="update-button">
                        Actualizar</button></a></td>';
                        echo '<td><a name"eliminar" href="php/Delete/poster.php?id=' . $row_ac_poster['id'] . '&eliminar=1"><button class="delete-button">
                        Eliminar</button></a></td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </section>
        <section id="business-fair-section" class="hidden">
            <h2>Feria Empresarial</h2>
            <br>
            <table>
                <?php
                // Consulta SQL para obtener todos los registros de la tabla "empresarial"
                $consulta = $pdo->query("SELECT * FROM empresarial");

                echo '<tr>';
                echo '<th>Institución:</th>';
                echo '<th>Número de Participantes:</th>';
                echo '<th>Título del proyecto:</th>';
                echo '<th>Representante del Equipo:</th>';
                echo '</tr>';

                while ($row_empresarial = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row_empresarial['institucion']) . '</td>';
                    echo '<td>' . htmlspecialchars($row_empresarial['participantes']) . '</td>';
                    echo '<td>' . htmlspecialchars($row_empresarial['titulo']) . '</td>';
                    echo '<td>' . htmlspecialchars($row_empresarial['representante']) . '</td>';
                    echo '<td>';
                    echo '<a href="php/Update/empresarial.php?id=' . $row_empresarial['id'] . '"><button>Actualizar</button class="update-button"></a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="php/Delete/empresarial.php?id=' . $row_empresarial['id'] . '&eliminar=1"><button>Eliminar</button class="delete.button"></a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </section>

        <section id="robotics-contest-section" class="hidden">
            <h2>Concurso de Robótica</h2>
            <br>
            <table>
                <tr>
                    <?php
                    // Consulta SQL para obtener todos los registros
                    $consulta = $pdo->query("SELECT * FROM robotica");

                    echo '<tr>';
                    echo '<th>Categoría de Participación:</th>';
                    echo '<th>Institución:</th>';
                    echo '<th>Nombre del Equipo:</th>';
                    echo '<th>Número de Participantes:</th>';
                    echo '<th>Representante del Equipo:</th>';
                    echo '<th>Email:</th>';
                    echo '<th>Teléfono:</th>';
                    echo '</tr>';

                    while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row['categoria']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['institucion']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['equipo']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['participantes']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['representante']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
                        echo '<td>';
                        echo '<a href="php/Update/robotica.php?id=' . $row['id'] . '"><button>Actualizar</button class="update-button"></a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a href="php/Delete/robotica.php?id=' . $row['id'] . '&eliminar=1"><button>Eliminar</button class="delete-button"></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tr>
            </table>
        </section>
        <hr>
    </main>
</body>
<script src="./js/Admin.js"></script>
</html>