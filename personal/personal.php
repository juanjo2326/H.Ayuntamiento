<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css"href="../css/estilos.css">
</head>
<body>
    <header>
        <div class="header_superior">
            <div class="logo">
            <img  src="../imagenes/logo.jpg" id="logo">
            </div>
            <div class="logo2">
                <img src="../imagenes/logo2.jpeg" id="logo2">
            </div>
            <div class="logo2">
                <img src="../imagenes/escudo.png" width="200" id="logo2">
            </div>
            <center><img src="../imagenes/personal.PNG" width="100" id="rfc"></center>

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="#"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">documento predial</a></li>
                    <li><a href="../estudiantes/inicio_estudiantes.php"style="text-decoration:none">estudiantes</a></li>
                    <li><a href="#"style="text-decoration:none">Ayuda</a>
                        <ul class="submenu">
                            <li><a href="" href○="#"style="text-decoration:none">Ayuda comunitaria</a></li>
                            <li><a href="" href○="#"style="text-decoration:none">Ayuda a problemas personales</a></li>
                            <li><a href="" href○="#"style="text-decoration:none">Ayuda adictos</a></li>
                            <li><a href="" href○="#"style="text-decoration:none">contactanos</a></li>
                            <li><a href="" href○="#"style="text-decoration:none">Emergencias</a></li>
                            <li><a href="" href○="#"style="text-decoration:none">Quejas o sugerencias</a></li>
                        </ul> 
                    </li>
                        <?php
		                if(isset($_SESSION['Usuario'])){ ?>
		            <li><a href="../login/cerrar.php"style="text-decoration:none">cerrar Sesion</a></li>
		                <?php
		                } else { 
		                ?>
	                <li><a href="../login.php"style="text-decoration:none">Iniciar Sesion O Registrarse</a></li>
		                <?php
		                }
		                ?>
                    </ul>
            </nav>
        
        </div>
        </div>
        
       

        
    </header>

    <section>


</section>



    </body>
</html>