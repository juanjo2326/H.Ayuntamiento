<?php
session_start();
include "./conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css" href="./css/estilosinicio.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#!">inicio</a></li>
                    <li><a href="./trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas empleo</a></li>
                    <li><a href="rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="./obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="./pedrial/inicio_pedrial.php"style="text-decoration:none">DOCUMENTO PREDIAL</a></li>
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
        <br>
        
    </header><br>
    <br>
    <br>
    <br>
    <br>
   

    <div id="info">
        <p>
            Penjamillo, proviene de "Penxamech", palabra de origen purépecha que significa "lugar de sabinos".<br><br>
            <img src="./imagenes/letras.jpg" id="letras"> <br><br>
            Se fundó por merced de tierras, concedida a los naturales por el virrey de Velasco en 1560. Durante esta época, 
            se establecieron varias haciendas de labor, que absorbieron la mano de obra indígena y constituyeron uno de los 
            principales centros productivos agrícolas de la provincia de Michoacán.<br><br>
            En la época colonial, Penjamillo era una congregación de indígenas, que tenían en posesión algunos terrenos, 
            al lado de los cuales había grandes haciendas pertenecientes a familias españolas.<br><br>
            Después de la independencia, contaba con ayuntamiento y sus principales actividades económicas giraban en torno 
            a la agricultura, la arriería, transporte de mercancías y curtido de pieles. Contaba en ese entonces con una 
            población de 3,916 habitantes.<br><br>
            Se constituyó en municipio por la Ley Territorial del 10 de diciembre de 1831.<br><br>
            En 1859, se nombro a su cabecera "Villa Echeverría", en honor al coronel Arcadio Echeverría, y en 1861, 
            se le dio el nombre de Penjamillo de Degollado, en memoria del Célebre liberal Don Santos Degollado.<br><br>
            <img src="./imagenes/presidente.png" id="letras"><br><br> 
            
           <div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 19px;
    font-size: 19px;
    width: 1900px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 51px;
    padding: 0px 0px;">
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
    </div>

    <div id="format-map">
        <p>Del Centro,, Independencia 101, Barrio del Centro, Del Centro, Mich.</p>
        <div id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12244.335879249424!2d-101.93117935633678!
                3d20.095185493309913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c2f827a5d4eb5%3A0x78104342c31
                f3110!2sPenjamillo%20de%20Degollado%2C%20Mich.!5e0!3m2!1ses!2smx!4v1648333940668!5m2!1ses!2smx" width="600" 
                height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <p>Penjamillo es uno de los 113 municipios en los que se divide el estado mexicano de Michoacán de Ocampo, localizado en el norte del estado, su cabecera municipal es Penjamillo de Degollado.</p>
    </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/H-Ayuntamiento-Penjamillo-2021-2024-107089381715143/" 
        data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" 
        data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=360
        &amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FH-Ayuntamiento-Penjamillo-2021-2024-107089381715143%2F&amp;locale=es_ES
        &amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline">
        <span style="vertical-align: bottom; width: 360px; height: 500px;"><iframe name="f20f6672644c8e" width="1000px" height="1000px" 
        data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" 
        allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" 
        src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;
        app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df4429e1bc53748%26domain%
        3Digobdigital.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Figobdigital.com%252Ff9791dd56711c8%26relation%3Dparent.parent
        &amp;container_width=360&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FH-Ayuntamiento-Penjamillo-2021-2024-107089381715143%2F
        &amp;locale=es_ES&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" 
        style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span></div>

    

</body>

</html>