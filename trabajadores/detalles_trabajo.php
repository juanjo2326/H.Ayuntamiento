
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalles de los trabajos</title>
    <link ewl="stylesheet" type="text/css" href="./css/trabajo.css">
    <!-- <script type="text/javascript" href="."></script> -->
</head>
<body>
    <header>
        <img src="../imagenes/logo2.jpeg" alt="logo2">
        <a href="./sulicitudtrabajo.php" title="ver solicitudes">
            <img src="../imagenes/trabajo.png">
        </a>
</header>
    <nav class="menu2"></nav>
      <menu>
        <img src="../logo.jpg" alt=".index.php">inicio</a></li>
        <?php
        if ( $usuario==null ) { ?>
        <li><a href=".login.php" tittle="Iniciar sesion">
        Inicio de session
        </a></li>
        <li><a href="./registrarse.php" tittle="Refistrarse">
        registrarse
        </a></li>
    <?php }else{ ?>
        <li><a href="login/cerrar.php" tittle="Cerrar sesion">
        Cerrar sesion
        </a></li>
        <?php } ?>
    </menu>
    </nav>
</body>
</html>