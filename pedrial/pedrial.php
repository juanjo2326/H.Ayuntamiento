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
            <center><img src="../imagenes/carga.PNG" width="100" id="rfc"></center>
        </div>
    </header><br><br>

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
    cursor: pointer;"></a>


    <center><img src="../imagenes/documento.PNG" width="200" id="logotrabajo"></center>

    <section class="form-register">
    <center><h1>Formulario de registro predial</h1></center>
    <form action="./alta_pedrial.php" method = "post" enctype="multipart/form-data">

          <!--<fieldset>-->
              Tipo de comprovante <br>
              <input class="controls" type="text" placeholder="Tipo del comprovante" name="tipo_comprovante" required> 
            </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
              Folio <br>
              <input class="controls" type="text" placeholder="tipo de folio" name="folio" required> 
          <!-- </fieldset>-->
         <!--<fieldset>-->
              Fecha <br>
              <input class="controls" type="date" placeholder="Fecha del ultimo pago" name="fecha" required> 
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
        <!--<fieldset>-->
                Descripcion <br>
              <input class="controls" type="text" placeholder="Descripcion" name="descripcion" required> 
          <!-- </fieldset>-->
          <!--<fieldset>-->
                Importe <br>
              <input class="controls" type="text" placeholder="Importe a pagar" name="importe" required> 
          <!-- </fieldset>-->
               Telefono <br>
              <input class="controls" type="text" placeholder="Telefono personal" name="telefono" required> 
          <!-- </fieldset>-->
          <input class="botons" type="submit" name="accion" value="enviar" class="Reagistrar">


    </form>

</section><br><br><br><br><br>
<div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 50px;
    font-size: 20px;
    width: 1900px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    padding: 10px 0px;">
               <div class="col-md-3">
                   <img  width="100px;" src="../imagenes/logo.jpg">
                   <img width="100px;" src="../imagenes/logo2.jpeg">
               </div>
               <br>
               <br>
               <div class="footer-newsletter">
                   <ul class="contact">
                       <li>
                           
                           <a target="_BLANK" href="https://penjamillo.gob.mx//webmail/">
                               <p>Correo Institucional</p>
                           </a>
                       </li>
                       <li>
                           
                           <a target="_BLANK" href="https://igobdigital.com/declaranet/">
                               <p>Declaraciones Patrionales</p>
                           </a>
                       </li>
                       <li>
                           
                           <a target="_BLANK" href="https://penjamillo.gob.mx//aviso-privacidad/">
                               <p>Aviso de Privacidad</p>
                           </a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-5">
                   <div style="text-align: center" class="footer-about-us">
                   <h2>
                       <span style="color black; text-align: center">H. AYUNTAMIENTO DE PENJAMILLO 2021 - 2024</span>
                   </h2>
                   " Copyright | Todos los derechos Reservados al H. AYUNTAMIENTO DE PENJAMILLO 2021 - 2024."
                   <P>Penjamillo, Michoacán. México.</P>
                </div>
               </div>
              <div class="col-md-4">
                  <div class="footer-newslatter">
                      <h4>
                          <span style="color: white; text-align: center">Contacto</span>
                      </h4>
                      <ul class="contact">
                          <li>
                              
                              <p>
                                  <i class="fa fa-map-marker">
                                     
                                  </i>
                                  <strong>Dirección:</strong>
                                  "COL. CENTRO, PENJAMILLO DE DEGOLLADO, MICHOACAN"
                              </p>
                          </li>
                          <li>
                              
                              <i class="fa fa-phone">
                                  
                              </i>
                              <strong>Tel: </strong>
                              " (359) 5240075 "
                          </li>
                          <li>
                              
                              <p>
                                  <i class="fa fa-phone"></i>
                                  <strong>Tel.</strong>
                                  " (359) 5240206"
                              </p>
                          </li>
                          <li>
                              
                              <p>
                                  <i class="fa fa-envelope"></i>
                                  <strong></strong>
                                  " presidencia@penjamillo.gob.mx"
                              </p>
                          </li>
                      </ul>
                  </div>
              </div>

           </div>

    
</body>
</html>