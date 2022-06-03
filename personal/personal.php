<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css"href="../css/estilos.css">
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
            <center><img src="../imagenes/personal.PNG" width="100" id="rfc"></center>

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="../obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
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

    
<section><center>

<div id="info">
    <p>
    <img src="./personal.jpeg" width="200" id="sat"><br>
    <p><h2>¿Qué es el personal de una empresa?<br>
    Se puede englobar dentro del personal de la empresa a todo el grupo de individuos que se encuentran  <br>
    dentro de la plantilla de la empresa ejerciendo cualquier tipo de funciones. <br>
    Dicho en otras palabras se engloba bajo este término a todo el capital humano que posee la empresa <br>
    o que se encuentre en reclutamiento, incluyendo la gerencia, los encargados de seguridad <br>
    y todos los oficios que conformen el ambiente laboral. <br><br>
    Desarrollo del personal <br>
    Cada empresa cuenta con estrategias, metodologías de trabajo o sistemas completamente diferentes <br>
    de los que utilizan otras organizaciones, es por ello que es de vital importancia no solo <br>
    comprender qué es el personal de una empresa, sino que este se encuentre <br>
    formado de manera apropiada para el puesto que desea ejercer. </h2></p><br>
</div><br><br>

<p>
<img src="./b-personal.png" width="200" id="sat"><br>
    <p><h2> Buscar personal del ayuntamiento, se debera de seleccionar el area en que trabaja la persona a buscar.</h2><br>
    <center><h1>Buscar Personal</h1></center><br>
    <form action="buscar_personal.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Seleccinar nombre del area <br><br>
              <select class="controls" type="text" placeholder="Obras Publicas" name="area" 
              required style="padding: 14px;
                              width: 300px;
                              border-radius: 9px;">
                    <option>Presidencia</option>
                    <option>Planeación</option>
                    <option>Casa de la cultura</option>
                    <option>Secretaria</option>
                    <option>Sindicatura</option>
                    <option>Tesorería</option>
                    <option>Predial</option>
                    <option>Urbanismo y Obras Públicas</option>
                    <option>Oficialía Mayor</option>
                    <option>Dirección De Desarrollo Social</option>
                    <option>Dirección De Desarrollo Agropecuario</option>
                    <option>Contraloría</option>
                    <option>Sistema de Desarrolo Integral Familiar(DIF)</option>
                </select> <br><br>
              <input class="botons" type="submit" name="accion" value="Buscar" 
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
                     cursor: pointer;"class="Reagistrar">


</form>
       </center>
    </p>
    </center>


</section><br><br>
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

    </body>
</html>