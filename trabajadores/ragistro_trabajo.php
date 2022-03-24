<?php

include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Trabajo</title>
    <link rel="stylesheet" type="text/css"href="../css/estilos.css">
</head>
<body>
    <header>
    <img src="../imagenes/trabajo.PNG" id="logotrabajo">
    
</header>
<section>
    <center><h1>Agregar nuevo trabajo</h1></center>
    <form action="altatrabajo.php" method = "post" enctype="multipart/form-data">
          <fieldset>
              Nombre <br>
              <input type="text" placeholder="Nombre" name="nombre" required> 
          </fieldset>
          <fieldset>
              Horario de entrada <br>
              <input type="text" placeholder="horario_entrada" name="horario_entrada" required> 
          </fieldset>
          <fieldset>
              Horario de salida <br>
              <input type="text" placeholder="horario_salida" name="horario_salida" required> 
          </fieldset>
          <fieldset>
              Requisitos <br>
              <input type="text" placeholder="Requisitos" name="requisitos" required> 
          </fieldset>
          <fieldset>
              fecha de publicacion <br>
              <input type="text" placeholder="fecha_publi" name="fecha_publi" required> 
          </fieldset>
          <fieldset>
              Vacantes <br>
              <input type="text" placeholder="vacantes" name="vacantes" required> 
          </fieldset>
          <fieldset>
              Imagen <br>
              <input type="text" placeholder="Imagen" name="imagen" required> 
          </fieldset>


    </form>
</section>
    
</body>
</html>