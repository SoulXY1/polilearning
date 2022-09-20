<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="../Backend/validar.js"></script>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="../index.php">
                    <img src="../img/logo_blanco2.png" alt="Logo de Poli">
                </a>

                <nav class="navegacion">
                    <a href="../index.php">Inicio</a>
                </nav>
            </div>
        </div>
    </header>


    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Ingrese sus datos para iniciar sesion</h2>

        <form class="contacto" action="indexProfe.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="codigoTeacher">Código:</label>
                <input type="text" id="codigoTeacher" name="codigoTeacher" placeholder="Ingrese su código: 212345671">

                <label for="passwordTeacher">Contraseña:</label>
                <input type="password" id="passwordTeacher" name="passwordTeacher" placeholder="Ingrese su contraseña: 12341">
            </fieldset>

            <button type="button" class="boton boton-verde" onclick="connTeacher()">Ingresar </button>
        </form>
        <div style="display: flex; justify-content: center;">
            <a href="../iniciar.php" class="boton boton-amarillo">Soy estudiante</a>
        </div>
    </main>



    <div class="space"></div>

    <footer class="seccion footer-bttm">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="../index.php">Inicio</a>
            </nav>
            <p class="copyright">Av, Revolucion No. 1500, Col. Universitaria, C. P. 44420, Guadalajara, Jalisco, México<br>+52 33 3619 9814/8315 Ext. 101 y 102</p>
            
        </div>
    </footer>
    
</body>

</html>