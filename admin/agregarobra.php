<?php
session_start();
include "../conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Obras</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css"href="../css/estiloobra.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../administracion/inicio_admin.php">inicio</a></li>
                    <li><a href="#!"style="text-decoration:none">Agregar Obras</a></li>
                        <?php
		                if(isset($_SESSION['Usuario'])){ ?>
		            <li><a href="../login/cerrar.php"style="text-decoration:none">cerrar Sesion</a></li>
		                <?php
		                } else { 
		                ?>
	                <li><a href="./login.php"style="text-decoration:none">Iniciar Sesion O Registrarse</a></li>
		                <?php
		                }
		                ?>
                    </ul>
            </nav>
        
        </div>
        </div>
        <br>
        
    </header> 
	<br><br>
    <center><h1>Agregar Obra</h1></center>
	<div id="form_register">

    <form action="./altaobra.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              <div class ="field-container">
              Nombre <br>
              <input class="controls" type="text" placeholder="Nombre de la empresa" name="nombre" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="field-container">
              Fecha de incio de la obra <br>
              <input class="controls" type="date" placeholder="Horario de entrada" name="fecha_inicio" required>
              <!--<p class="mensajeError"> error error</p> -->
              </div>
          <!-- </fieldset>-->
         <!--<fieldset>-->
         <div class ="field-container">
              Fecha de terminacion de la obra <br>
              <input class="controls" type="date" placeholder="Horario de salida" name="fecha_final" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
         <!--<fieldset>-->
         <div class ="field-container">
              Lugar <br>
              <input class="controls" type="text" placeholder="lugar" name="lugar" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
        <!--<fieldset>-->
         <div class ="field-container">
              Area del ayuntamiento <br>
              <input class="controls" type="text" placeholder="area" name="area" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
                   <!--<fieldset>-->
         <div class ="field-container">
              Descripción <br>
              <input class="controls" type="text" placeholder="descripcion" name="descripcion" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="field-container">
              Imagen <br>
              <input class="subir" type="FILE" placeholder="Imagen" name="file" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <input class="center-content" type="submit" name="accion" value="enviar" class="Reagistrar">
          <!--<p class="mensajeCorrecto"> Listo</p>-->

    </form>
	</div>

</body>
</html>