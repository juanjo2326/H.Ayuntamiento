<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css"href="../css/estilos.css">
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
            <center><img src="../imagenes/carpeta.PNG" width="100" id="rfc"></center>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="../obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
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
        
       

        
</header><br>

    </header><br>


    <section><center>

<div id="info">
    <p>
    <img src="../imagenes/contrato.png" width="200" id="sat"><br>
    <p><h2>¿Qué es el impuesto predial?<br>
    El predial es un impuesto que debe pagarse al municipio todos los años <br>
    dentro del primer bimestre del año. Su propósito principal es brindar <br>
    recursos a las autoridades para que, con el dinero recaudado, garanticen una buena <br>
    calidad de vida a los habitantes de la ciudad. <br>
    Este pago debe ser cubierto por todos los propietarios de un inmueble <br>
    ya sea una casa, departamento, edificio o terreno; y puede realizarse en los módulos de atención <br>
    instalados en distintos puntos de la ciudad. <br>
    En las transacciones inmobiliarias, el impuesto predial es considerado igual de importante que otros impuestos <br>
     como e ISAI y el ISR, y para calcularlo se toman en cuenta distintas características, tanto del terreno <br>
     en el que una vivienda se encuentra construida, como de condiciones externas determinadas por un avalúo catastral.</h2></p><br>
    <p><h3 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;">Si todavia no registras el documento del predial<br>
       deberas de registrarlo para que no tenga perdidas con el documento<br>
       se debe de colocar cada dato y por supuesto el numero de telefono <br>
       ya que por ese medio se puede hacer la consulta de su documento pedrial.</h3></p>
      <br>
       <a  class="botons" href="pedrial.php"> <input type="button" value="REGISTRAR DOCUMENTO "
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
        
    </p>
</div><br><br>

<p>
<img src="../imagenes/consultar.png" width="200" id="sat"><br>
    <p><h2> consultar tu documento predial, se debera de insertar el numero de telefono que se coloco.</h2><br>
    <center><h1>Consultar documento predial</h1></center><br>
    <form action="consulta_predial.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Colocar numero telefonico <br><br>
              <input class="controls" type="text" placeholder="Numero telefonico" name="telefono" 
              required style="padding: 14px;
                              width: 300px;
                              border-radius: 9px;"> <br><br>
              <input class="botons" type="submit" name="accion" value="enviar" 
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