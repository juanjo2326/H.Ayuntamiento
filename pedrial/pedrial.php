<?php

include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Pedrial</title>
    <link rel="stylesheet" type="text/css"href="../css/trabajo.css">
    <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
</head>
<body>
    <center><img src="../imagenes/documento.PNG" width="200" id="logotrabajo"></center>

    <section class="form-register">
    <center><h1>Formulario de registro pedrial</h1></center>
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
              <input class="controls" type="text" placeholder="ceunta del pedrial" name="cuenta_pedrial" required> 
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
</section>


    
</body>
</html>