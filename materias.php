<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Materias</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="Backend/logout.js"></script>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="indexStudent.php">
                    <img src="img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="indexStudent.php">Inicio</a>
                    <a href="perfil.php">Perfil</a>
                </nav>
            </div>
        </div>
    </header>


    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Materias asignadas</h2>

        <div class="contenedor-materia">
            <div class="materia">
                <img src="img/web.jpg" alt="Imagen curso web">
                <div class="contenido-materia">
                    <h3 class="fw">Diseño de aplicaciones web</h3>
                    <p>Profesor: Paulina Sarahí</p>
                    <a href="Materias/mat1.php" class="boton boton-amarillo d-block">Ver Materia</a>
                </div>
            </div>

            <div class="materia">
                <img src="img/mantenimiento.jpg" alt="Imagen mantenimiento">
                <div class="contenido-materia">
                    <h3 class="fw">Mantenimiento de equipos computacionales</h3>
                    <p>Profesor: Roberto Macario Rodríguez Reveles</p>
                    <a href="Materias/mat2.php" class="boton boton-amarillo d-block">Ver Materia</a>
                </div>
            </div>

            <div class="materia">
                <img src="img/software.jpg" alt="Imagen Desarrollo web">
                <div class="contenido-materia">
                    <h3 class="fw">Desarrollo de software</h3>
                    <p>Profesor: Maritza Vicencio Gamundi</p>
                    <a href="Materias/mat3.php" class="boton boton-amarillo d-block">Ver Materia</a>
                </div>
            </div>

            <div class="materia">
                <img src="img/redes.jpg" alt="Imagen curso web">
                <div class="contenido-materia">
                    <h3 class="fw">Configuracion de redes</h3>
                    <p>Profesor: Juan Ramírez Hernández</p>
                    <a href="Materias/mat4.php" class="boton boton-amarillo d-block">Ver Materia</a>
                </div>
            </div>

        </div>
    </main>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="indexStudent.php">Inicio</a>
                <a href="materias.php">Materias</a>
                <a href="perfil.php">Perfil</a>
                <a href="index.php" onclick="logout()">Cerrar Sesión</a>
            </nav>
            <p class="copyright">Av, Revolución No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>

        </div>
    </footer>
</body>

</html>