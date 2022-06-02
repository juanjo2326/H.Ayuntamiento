<?php

include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Empleo</title>
    <link rel="stylesheet" type="text/css"href="../css/trabajo.css">
    <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
    
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="../obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">DOCUMENTO PEDRIAL</a></li>
                    <li><a href="../construccion/construccion.php"style="text-decoration:none">Personal</a></li>
                    <li><a href="../estudiantes/inicio_estudiantes.php"style="text-decoration:none">estudiantes</a></li>
                    <li><a href="#"style="text-decoration:none">Ayuda</a>
                        <ul class="submenu">
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">Ayuda comunitaria</a></li>
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">Ayuda a problemas personales</a></li>
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">Ayuda adictos</a></li>
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">contactanos</a></li>
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">Emergencias</a></li>
                            <li><a href="" href○="../construccion/construccion.php"style="text-decoration:none">Quejas o sugerencias</a></li>
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

        
    </header>
    <br>
    <br>
    
    <a href="./inicio_trabajo.php" class="btn" style="text-decoration:none;"><input type="button" value="Regresar" 
    style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 
    0 17px 50px 0 rgb(0 0 0 / 19%);
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
    <center><img src="../imagenes/trabajo.PNG" width="200" id="logotrabajo"></center>
    
    <!--mmmmmmmm-->
    <section class="form-register">
    <center><h1>Formulario de registro</h1></center>
    <form action="../trabajadores/altatrabajo.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              <div class ="form-input">
              Nombre <br>
              <input class="controls" type="text" placeholder="Nombre de la empresa" name="nombre" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="form-input">
              Horario de entrada <br>
              <input class="controls" type="time" placeholder="Horario de entrada" name="horario_entrada" required>
              <!--<p class="mensajeError"> error error</p> -->
              </div>
          <!-- </fieldset>-->
         <!--<fieldset>-->
         <div class ="form-input">
              Horario de salida <br>
              <input class="controls" type="time" placeholder="Horario de salida" name="horario_salida" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->

         <!--<fieldset>-->
         <div class ="form-input">
              Fecha de publicacion <br>
              <input class="controls" type="date" placeholder="Fecha de publicacion" name="fecha_publi" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
        <!--<fieldset>-->
         <div class ="form-input">
              Requisitos <br>
              <input class="controls" type="text" placeholder="Requisitos" name="requisitos" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
                   <!--<fieldset>-->
         <div class ="form-input">
              Telefono <br>
              <input class="controls" type="text" placeholder="telefono" name="telefono" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="form-input">
              Vacantes <br>
              <input class="controls" type="text" placeholder="vacante" name="vacante" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
                   <!--<fieldset>-->
         <div class ="form-input">
              Direccion <br>
              <input class="controls" type="text" placeholder="Direccion" name="direccion" required> 
             <!-- <p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <!--<fieldset>-->
          <div class ="form-input">
              Imagen <br>
              <input class="subir" type="FILE" placeholder="Imagen" name="file" required> 
              <!--<p class="mensajeError"> error error</p>-->
              </div>
          <!-- </fieldset>-->
          <input class="botons" type="submit" name="accion" value="enviar" class="Reagistrar">
          <!--<p class="mensajeCorrecto"> Listo</p>-->

    </form>
    <script src="../js/scripts.js"></script>
</section><br>
<br>
<div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 19px;
    font-size: 19px;
    width: 1900px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 51px;
    padding: 20px 0px;">
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
 
            
        </p>
    </div>




    
</body>
</html>