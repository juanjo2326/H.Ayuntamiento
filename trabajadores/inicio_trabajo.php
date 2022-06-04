<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR TRABAJO</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <!--no decetca los estilos en los trabajos-->
</head>
<style type="text/css">
    .empresas{            
           width: 400px;
    margin: 10px 5px;
    display: inline-flex;
    height: 280px;
    justify-content: center;
    background: silver;
    border-radius: 20px;
    padding: 10px;
}


</style>
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
            <div class="logotrabajo">
            <center><img src="../imagenes/trabajar.PNG" width="100" id="logotrabajo"></center>
            </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="../obras/inicio_obras.php"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">Documento predial</a></li>
                    <li><a href="../personal/personal.php"style="text-decoration:none">Personal</a></li>
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

    </header><br><br>

    </header><br>

    <center>
    <div>
          
        <h2 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: none repeat scroll 0 0 rgb(186, 25,201);
    padding: 10px;">Cuentas con una empresa y ocupas trabajadores registra aqui</h2><br><br>
    <a href="./agregar_trabajo.php" class="btn" style="text-decoration:none;"><input type="button" value="AGREGAR EMPLEO" 
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
    cursor: pointer;"></a><br><br>
    
    <p><h2>En el H Ayuntamiento, queremos mejorar el pueblo para las personas que no <br>
       encuentran empleo. En nuestro apartado de buscar trabajo tendras las opciones<br>
       de ver las empresas o negocios que estan en el municipio de Penjamillo de Degollado.<br>
       con la ayuda que se tendra se vera la informacion para que ellos te puedan buscar</br>
       asi quedan en contacto con el administrador del contacto  </h2> </p>
       </div> </center> <br><br>
    <section>
       <?php
               require 'config.php'; 
               include '../conexion.php';  
               $re=$mysql->query("select * from empresas where estado = 1 ORDER BY vacante DESC") or die(mysql_error());
               while ($f=$re->fetch_array()){
                   ?>
                   <div class="empresas">
                       <center>
                           <div class="contenedor-img">
                               <img  style="border-radius: 20px;" class="empresas-imagen" 
                               src="../img_presas/<?php echo $f['imagen'];?>"><br>
                               <?php echo ($f['vacante']>0) ? '' : '<p class="text-img">Agotado</p>';?>
                           </div>
                           <span><?php echo $f['nombre'];?></span><br>
                           <span>Fecha de publicacion: <?php echo $f['fecha_publi'];?></span><br>
                           <?php echo ($f['vacante']>0) ? 'vacante: '.$f['vacante'] : 'sin vacantes'; ?><br>
                           <a style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
                                     color: white;
                                     padding: 15px 32px;
                                     text-align: center;
                                     text-decoration: none;
                                     display: inline-block;
                                     font-size: 16px;
                                     background: rgb(186,25,201);
                                     border: none;
                                     border-radius: 8px;
<<<<<<< Updated upstream
                                     cursor: pointer;" href="./detalles_trabajo.php?id=<?php echo $f['id']; ?>&token=<?php echo
                           hash_hmac('sha1', $f['id'], KEY_TOKEN); ?>" class="btn 
                           btn-primary"> ver detalles</a>
=======
                                     cursor: pointer;" 
                                     href="./detalles_trabajo.php?id=<?php echo $f['id']; ?>"> Ver detalles</a>
>>>>>>> Stashed changes
               </center>
               </div>
               <?php
               } 
               ?><br><br><br>
                          <div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 19px;
    font-size: 19px;
    width: 2000px;
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
        </section> 

    
</body>
</html>