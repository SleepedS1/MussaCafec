<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="./css/Admin.css">
    <link rel="shortcut icon" href="../../img/logoSena.png" type="image/x-icon">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div id="admin-info">
            <p>Bienvenido: <span id="admin-name"><?php echo isset($_SESSION['usuario'])?></span></p>
        </div>
        <div id="logout-btn">
            <a href="../login.php">Cerrar sesión</a>
            <img src="../../img/logoSena-white.png" alt="" width="50">
        </div>
    </header>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="./css/Admin.css">
    <script src="script.js"></script>
</head>
<body>
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
            <table>
                
                <tr>
                    <th>Ponente</th>
                    <td>
                        <label for="categoria">Categoria de Participación</label>
                    </td>
                    <td>
                        <label for="opciones">Institución de Participación</label>
                    </td>
                    <td>
                        <label for="titulada">Titulada</label>
                    </td>
                    <td>
                        <label for="ficha">Ficha</label>
                    </td>
                    <td>
                        <label for="institucion">Institución</label>
                    </td>
                    <td>
                        <label for="n_ponentes">Numero de Ponentes</label>
                    </td>
                    <td>
                        <label for="titulo">Titulo del Proyecto</label>
                    </td>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <label for="proyecto">Tipo de Proyecto</label>
                    </td>
                    <td>
                        Archivos
                    </td>
                </tr>
                <tr>
                    <td>
                        --
                    </td>
                    <td>
                        
                    </td>
                    <td>
            
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
            <br><br><br>
            <table>
                <tr><th><h3>Poster</h3></th>
                    <td>
                        <label for="institucion">Institución</label>
                    </td>
                    <td>
                        <label for="participantes">Participantes</label>
                    </td>
                    <td>
                        <label for="titulo">Titulo del proyecto</label>
                    </td>
                    <td>
                        Archivos
                    </td>
                </tr>
                <tr>
                    <td>
                        --
                    </td>
                    <td>
            
                    </td>
                    <td>
            
                    </td>
                    <td>
            
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </section>
        <section id="business-fair-section" class="hidden">
            <h2>Feria Empresarial</h2>
            <br>
            <table>
            <tr>
                <td>
                    <label for="institucion">Institución</label>
                </td>
                <td>
                    <label for="participantes">Número de Participantes</label>
                </td>

                <td>
                    <label for="titulo">Título del proyecto</label>
                </td>
                <td>
                    <label for="representante">Representante del Equipo</label>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>

                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>
</table>
        </section>
        <section id="robotics-contest-section" class="hidden">
            <h2>Concurso de Robótica</h2>
            <br>
            <table>
    <tr>
        <td>
            <label for="categoria">Categoría de Participación</label>
        </td>

        <td>
            <label for="institucion">Institución</label>
        </td>

        <td>
            <label for="equipo">Nombre del Equipo</label>
        </td>
        <td>
            <label for="participantes">Número de Participantes</label>
        </td>
    
        <td>
            <label for="representante">Representante del Equipo</label>
        </td>
        <td>
            <label for="email">Email</label>
        </td>
   
        <td>
            <label for="telefono">Teléfono</label>
        </td>
    </tr>
    <tr>
        <td>
            
        </td>

        <td>
            
        </td>

        <td>
            
        </td>
        <td>
            
        </td>
    
        <td>
            
        </td>
        <td>
            
        </td>
   
        <td>
            
        </td>
    </tr>
</table>
        </section>
        <hr>
    </main>
</body>
<script src="./js/Admin.js"></script>
</html>