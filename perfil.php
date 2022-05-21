<?php
session_start();
include "./conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css"href="css/estiloperfil.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
	if(isset($_SESSION['Usuario'])){ ?>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="./fotos/perfil.jpg">
        </div>
    <div class="menu">
        <h3><?php echo $f['nombre'];?><br><span><?php echo $f['tipo'];?></span></h3>
        <ul>
            <li><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><a href="#">Mi Perfil</a></li>
            <li><i class="fa fa-pencil-square-o fa-lg"></i><a href="#">Editar</a></li>
            <li><i class="fa fa-solid fa-envelope fa-lg"></i><a href="#">Inbox</a></li>
            <li><i class="fa fa-solid fa-gear fa-lg"></i><a href="#">Ajustes</a></li>
            <li><i class="fa fa-comment-o fa-lg"></i><a href="#">Ayuda</a></li>
            <li><i class="fa fa-arrow-circle-o-left fa-lg"></i><a href="./login/cerrar.php">Salir</a></li>
        </ul>
    </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
    <?php
		} else { 
	?>
     <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="./imagenes/iniciar.png">
        </div>
        <div class="menu">
            <ul>
                <li><a href="./login.php">Iniciar Sesion O Registrarse</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
    <?php
		}
	?>

    
</body>
</html>