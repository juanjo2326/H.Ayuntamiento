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
</head>
<body>
    <header>
    <center><img src="../imagenes/trabajo.PNG" width="200" id="logotrabajo"></center>
    
    <section class="form-register">
    <center><h1>Formulario de registro</h1></center>
    <form action="altatrabajo.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Nombre <br>
              <input class="controls" type="text" placeholder="Nombre de la empresa" name="nombre" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Horario de entrada <br>
              <input class="controls" type="text" placeholder="Horario de entrada" name="horario_entrada" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Horario de salida <br>
              <input class="controls" type="text" placeholder="Horario de salida" name="horario_salida" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Requisitos <br>
              <input class="controls" type="text" placeholder="Requisitos" name="requisitos" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Fecha de publicacion <br>
              <input class="controls" type="text" placeholder="Fecha de publicacion" name="fecha_publi" required> 
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
</section>
</header>


    
</body>
</html>