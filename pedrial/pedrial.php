<?php

include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Predial</title>
    <link rel="stylesheet" type="text/css"href="../css/trabajo.css">
    <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
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
            <center><img src="../imagenes/carga.PNG" width="100" id="rfc"></center>
        </div>
    </header><br><br><br><br><br><br><br><br><br><br><br><br><br>

<body>
<a href="./inicio_pedrial.php" class="btn" style="text-decoration:none;"><input type="button" value="Regresar" 
    style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    background: rgb(186,25,201);
    border: none;
    border-radius: 8px;
    cursor: pointer;">


    <center><img src="../imagenes/documento.PNG" width="200" id="logotrabajo"></center>

    <section class="form-register">
    <center><h1>Formulario de registro predial</h1></center>
    <form action="./alta_pedrial.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Tipo de comprovante <br>
              <input class="controls" type="text" placeholder="Tipo del comprovante" name="tipo_comprovante" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Folio <br>
              <input class="controls" type="text" placeholder="tipo de folio" name="folio" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Fecha <br>
              <input class="controls" type="text" placeholder="Fecha del ultimo pago" name="fecha" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Pago <br>
              <input class="controls" type="text" placeholder="Pago" name="pago" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Forma de pago <br>
              <input class="controls" type="text" placeholder="Forma de pago" name="forma_pago" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Contribuyente <br>
              <input class="controls" type="text" placeholder="Tipo de contribuyente" name="contribuyente" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Cuenta <br>
              <input class="controls" type="text" placeholder="cuenta del pedrial" name="cuenta_pedrial" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Valor <br>
              <input class="controls" type="text" placeholder="valor catastral" name="valor_catastral" required> 
          <!-- </fieldset>-->
            <!--<fieldset>-->
                Tasa <br>
              <input class="controls" type="text" placeholder="Tipo de tasa" name="tasa" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Clave <br>
              <input class="controls" type="text" placeholder="Clave castral" name="clave_castral" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Concepto <br>
              <input class="controls" type="text" placeholder="Concepto" name="concepto" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Domicilio <br>
              <input class="controls" type="text" placeholder="Domicilio del terreno" name="domicilio" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Ubicacion <br>
              <input class="controls" type="text" placeholder="Ubicacion predio" name="ubicacion_predio" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Periodo <br>
              <input class="controls" type="text" placeholder="Periodo de pago" name="periodo_pago" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Clave <br>
              <input class="controls" type="text" placeholder="Tipo de clave" name="clave" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
               Telefono <br>
              <input class="controls" type="text" placeholder="Telefono personal" name="telefono" required> 
          <!-- </fieldset>-->
          <input class="botons" type="submit" name="accion" value="enviar" class="Reagistrar">


    </form>
</section><br><br><br><br><br>


    
</body>
</html>