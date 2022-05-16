<?php

include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Trabajo</title>
    <link rel="stylesheet" type="text/css"href="../css/trabajo.css">
    <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
    <!-- CSS only -->
</head>
<body>
    <!--el css del header_superior no los corre -->
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
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="#"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">DOCUMENTO PEDRIAL</a></li>
                    <li><a href="../personal/personal.php"style="text-decoration:none">Personal</a></li>
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
		            <li><a href="../login/cerrar.php"style="text-decoration:none">>cerrar Sesion</a></li>
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
        <br>
        
    </header><br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br>
    <br><br>
    <center><img src="../imagenes/trabajo.PNG" width="200" id="logotrabajo"></center>
    
    <!--mmmmmmmm-->
    <section class="form-register">
    <center><h1>Formulario de registro</h1></center>
    <form action="../trabajos/altatrabajo.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Nombre <br>
              <input class="controls" type="text" placeholder="Nombre de la empresa" name="nombre" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Horario de entrada <br>
              <input class="controls" type="time" placeholder="Horario de entrada" name="horario_entrada" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Horario de salida <br>
              <input class="controls" type="time" placeholder="Horario de salida" name="horario_salida" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Requisitos <br>
              <input class="controls" type="text" placeholder="Requisitos" name="requisitos" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Fecha de publicacion <br>
              <input class="controls" type="date" placeholder="Fecha de publicacion" name="fecha_publi" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Vacantes <br>
              <input class="controls" type="text" placeholder="vacantes" name="vacantes" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Imagen <br>
              <input class="subir" type="file" placeholder="Imagen" name="file" required> 
          <!-- </fieldset>-->
          <input class="botons" type="submit" name="accion" value="enviar" class="Reagistrar">


    </form>
</section><br>
<br>




    
</body>
</html>