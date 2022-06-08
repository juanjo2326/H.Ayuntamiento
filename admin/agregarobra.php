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
    <center><h1>Agregar Obra</h1>
	<div id="form_register">

    <form style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 28px;
    background: rgb(186,25,201);
    border: none;
    border-radius: 8px;
    cursor: pointer;"action="./altaobra.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              <div class ="field-container">
              Nombre <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;" class="controls" type="text" placeholder="Nombre de la obra" name="nombre" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="field-container">
              Fecha de incio de la obra <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="controls" type="date" placeholder="Horario de entrada" name="fecha_inicio" required>
              <!--<p class="mensajeError"> error error</p> -->
              </div>
          <!-- </fieldset>-->
         <!--<fieldset>-->
         <div class ="field-container">
              Fecha de terminacion de la obra <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="controls" type="date" placeholder="Horario de salida" name="fecha_final" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
         <!--<fieldset>-->
         <div class ="field-container">
              Lugar <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="controls" type="text" placeholder="lugar" name="lugar" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
        <!--<fieldset>-->
         <div class ="field-container">
              Area del ayuntamiento <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="controls" type="text" placeholder="area" name="area" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
                   <!--<fieldset>-->
         <div class ="field-container">
              Descripción <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="controls" type="text" placeholder="descripcion" name="descripcion" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="field-container">
              Imagen <br>
              <input style="padding: 14px;
                            width: 300px;
                            border-radius: 9px;"class="subir" type="FILE" placeholder="Imagen" name="file" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <input style="    width: 290px;
    background: rgb(227, 103, 243);
    border: none;
    padding: 12px;
    color: rgb(252, 248, 251);
    margin: 16px 0;
    font-size: 20px;"class="center-content" type="submit" name="accion" value="enviar" class="Reagistrar">
          <!--<p class="mensajeCorrecto"> Listo</p>-->

    </form>
	</center>
	</div><br><br>

</body>
</html>