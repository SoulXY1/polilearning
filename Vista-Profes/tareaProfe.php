<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Materias</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="../Backend/logout.js"></script>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="indexProfe.php">
                    <img src="../img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="indexProfe.php">Inicio</a>
                    <a href="matProfe.php">Materias</a>
                    <a href="perfilProfe.php">Perfil</a>
                </nav>
            </div>
        </div>
    </header>


    <main>
        <section class="contenedor seccion">
            <h3 class="fw-300 centrar-texto">Tarea: Nombre de tarea</h3>

            <div class="contenido-dos">
                <div class="cuadro-tarea">
                    <ol>
                        <li>Requisito 1</li>
                        <li>Requisito 2</li>
                        <li>Requisito 3</li>
                        <li>Requisito 4</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer-bttm seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="indexProfe.php">Inicio</a>
                <a href="matProfe.php">Materias</a>
                <a href="perfilProfe.php">Perfil</a>
                <a href="../index.php" onclick="logout()">Cerrar Sesión</a>
            </nav>
            <p class="copyright">Av, Revolución No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>

        </div>
    </footer>
</body>

</html>