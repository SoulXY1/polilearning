

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Escuela Politécnica de Guadalajara</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <script src="Backend/logout.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="indexStudent.php">
                    <img src="img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="materias.php">Materias</a>
                    <a href="perfil.php">Perfil</a>
                </nav>
            </div>
            <div style="color: white; font-weight: 500; display: grid; font-size: 30px">
                <p>Bienvenid@ <br>Ignacio Eduardo Briseño Salcedo</p>
            </div>

        </div>
    </header>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Sistema de educación virtual</h2>

        <div class="contenido-dos">
            <img src="img/section1.jpg" alt="Imagen educacion" class="imagen">
            <div class="texto-dos">
                <p>Enseñanza y aprendizaje que se basa en el uso de Internet y todas los dispositivos y herramientas que se pueden conectar a esta red.
                    <br>La tecnología que se usa para e-learning es múltiple, va creciendo y cambiando con los avances además de que comprende desde el hardware hasta el software necesarios para el proceso de enseñanza online, pero la parte central es la plataforma para gestionar el aprendizaje.
                    Existen múltiples plataformas con las cuales se puede gestionar los cursos, contenidos, aprendices y formadores, y se llaman LMS que es la sigla del inglés Learning Management System que traduce sistema de administración del aprendizaje.
                </p>

            </div>
        </div>
    </section>

    <div class="contenedor divide"></div>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Materias</h2>

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
                <img src="img/mantenimiento.jpg" alt="Imagen curso web">
                <div class="contenido-materia">
                    <h3 class="fw">Mantenimiento de equipos computacionales</h3>
                    <p>Profesor: Roberto Macario Rodriguez Reveles</p>
                    <a href="Materias/mat2.php" class="boton boton-amarillo d-block">Ver Materia</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="materias.php" class="boton boton-verde">Ver Todas</a>
        </div>
    </main>

    <div class="contenedor divide"></div>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Sobre Poli</h2>

        <div class="contenido-dos">
            <div class="texto-dos">
                <p>La Escuela Politécnica de Guadalajara, es una dependencia de nivel medio superior de la Universidad de Guadalajara que oferta planes de Tecnólogos Profesionales y Bachillerato Tecnológico, mismos que tienen una duración de cuatro y tres años respectivamente. </p>
                <p>En todos los planes de estudio se realiza servicio social, prácticas profesionales y se desarrolla una actividad relacionada con el campo ocupacional en el que se forma el estudiante; se fortalece la práctica in situ donde se logran las competencias alcanzadas del perfil profesional en formación y se generan proyectos de innovación tecnológica.</p>
            </div>
            <img src="img/section2.jpg" alt="Imagen Poli" class="imagen">
        </div>
    </section>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="indexStudent.php">Inicio</a>
                <a href="materias.php">Materias</a>
                <a href="perfil.php">Perfil</a>
                <a href="index.php" onclick="logout()">Cerrar Sesión</a>
            </nav>
            <p class="copyright">Av, Revolucion No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>

        </div>
    </footer>
</body>

</html>