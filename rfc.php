<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css"href="css/estilosinicio.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <style type="text/css">
            h2, h3, h1{text-align: -webkit-left;
    width: 500px;
    text-transform: uppercase;
}

.header_superior{background: white;}

    </style>
    <style type="text/css">]


</style>
</head>
<body>
    <header>
        <div class="header_superior">
            <div class="logo">
            <img  src="./imagenes/logo.jpg" id="logo">
            </div>
            <div class="logo2">
                <img src="./imagenes/logo2.jpeg" id="logo2">
            </div>
            <div class="logo2">
                <img src="./imagenes/escudo.png" width="200" id="logo2">
            </div>
            <center><img src="./imagenes/rfc.PNG" width="100" id="rfc"></center>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="./trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="./obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="./pedrial/inicio_pedrial.php"style="text-decoration:none">DOCUMENTO PreDIAL</a></li>
                    <li><a href="./construccion/construccion.php"style="text-decoration:none">Personal</a></li>
                    <li><a href="./estudiantes/inicio_estudiantes.php"style="text-decoration:none">estudiantes</a></li>
                    <li><a href="#"style="text-decoration:none">Ayuda</a>
                        <ul class="submenu">
                        <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">Ayuda comunitaria</a></li>
                            <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">Ayuda a problemas personales</a></li>
                            <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">Ayuda adictos</a></li>
                            <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">contactanos</a></li>
                            <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">Emergencias</a></li>
                            <li><a href="./construccion/construccion.php" href○="#"style="text-decoration:none">Quejas o sugerencias</a></li>
                        </ul> 
                    </li>
                        <?php
		                if(isset($_SESSION['Usuario'])){ ?>
		            <li><a href="./login/cerrar.php"style="text-decoration:none">cerrar Sesion</a></li>
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
    </header> <br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br>
    <br>
    <br><br><br><br>
    <br>
   <section><center>
   <p>
    <img src="./imagenes/cita.png" width="400" id="sat" style="border-radius: 25px;"><br>
        <p><h2 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;"> Si no tienes RFC te recordamos que es obligarotio tenerlo.</h2><br>
           <h2>¿Para qué sirve?</h2><br>
           Además de servir para realizar diversos trámites referentes al pago de impuestos y obligaciones fiscales,<br>
           se necesita para poder acceder a diversos productos financieros como cuentas bancarias, tarjetas de crédito; programas de seguridad social <br>
           e incluso para participar en AFORES (Administradoras de Fondos para el Retiro) o usar el Fondo Nacional <br> 
           de la Vivienda para Trabajadores (INFONAVIT). <br><br>
           <h3 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;">Si no tienes aun tú RFC te damos los datos y el lugar para hacer cita en las oficinas del SAT.</h3></p><BR><br>
           <h1>LISTADO DE REQUISITOS PARA LA ELAVORACIÓN DE LA CITA EN LA PLATAFORMA SAT</h1>
           <ul class="consultar">
               <li>1.-Inscripción al padrón de contribuyentes Personas Físicas</li>
               <li>2.-curp</li>
               <li>3.-Nombre completo</li>
               <li>4.-Correo electronico</li>
               <li>5.-Confirmar correo electronico</li>
               <li>6.-Aceptar terminos y condiciones</li>
               <li>7.-confirar captcha</li>
               <li>8.-tienes 5 minutos para escoger el dia</li>
               <li>9.-Deberas de colocar el lugar mas cercano </li>
               <li>10.-Inscripcion de personas fisicas</li>
               <li>11.-entidad federativa</li>
               <li>12.-Seleccionar el modulo</li>
               <li>13.-Te mandaran correo con la informacion y el dia </li><br>
               <li><h2 >NOTA</h2 > <br>
                    <h3 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;">deberas imprimir el documento que te manda al correo electronico, 
                    te daran la lista de los docuentos que deberas llevar<h3>
               </li>
           </ul><br>
           <center><a class="botons" href="https://citas.sat.gob.mx/"> <input type="button" value="CITAS" style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    background: rgb(186,25,201);
    border: none;
    border-radius: 8px;
    cursor: pointer;"></a></center><br><br>
           <img src="./imagenes/sat.PNG" width="200" id="sat"><br>
           <h3 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;"> para consultar tú RFC es obligatorio mandarte <br>
           a la parte del SAT donde se deben de colocar los caracteres <br>
           que solicita. A continuación se muestra el listado que se <br>
           necesita para consultar tú RFC.</h3>
           <h1>LISTADO DE REQUISITOS PARA LA CONSULTAR DEL RFC</h1><br>
           <ul class="consultar">
               <li>1.-CURP</li>
               <li>2.-AÑO DE INSCRIPCION</li>
               <li>3.-ENTIDAD FEDERATIVA</li>
               <li>4.-NUMERO TELEFONICO</li>
               <li>5.-CODIGO POSTAL</li>
               <li>6.-ERES EMPLEADO</li>
               <li>7.-deberas ingresar el texto de la imagen</li><br>
               <a  class="botons" href="https://www54.sat.gob.mx/curp/Consult"> <input type="button" value="CONSULTAR RFC " 
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
    cursor: pointer;"></a><br>
               <br>
               <br>
               <br>
           </ul>
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
                   <img  width="100px;" src="./imagenes/logo.jpg">
                   <img width="100px;" src="./imagenes/logo2.jpeg">
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
    
</section>
    



    </body>
</html>