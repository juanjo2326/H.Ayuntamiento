
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalles de los trabajos</title>
    <link ewl="stylesheet" type="text/css" href="../css/detallestrabajo.css">
    <!-- <script type="text/javascript" href="."></script> -->
    <!--no detecta el css-->
</head>
<body>
    <header class="header_superior">
        <img src="../imagenes/logo2.jpeg" alt="logo2">
        <a href="./sulicitudtrabajo.php" title="ver solicitudes">
            <img src="../imagenes/trabajo.png" >
        </a>
</header>
    <nav class="container_menu">
      <menu>
        <img src="../imagenes/logo.jpg"  alt=".index.php">inicio</a></li>
        <?php
        //if ( $usuario==null ) { ?>
        <li><a href=".login.php" tittle="Iniciar sesion">
        Inicio de session
        </a></li>
        <li><a href="./registrarse.php" tittle="Refistrarse">
        registrarse
        </a></li>
    <?php //}else{ ?>
        <li><a href="login/cerrar.php" tittle="Cerrar sesion">
        Cerrar sesion
        </a></li>
        <?php// } ?>
    </menu>
    </nav>
    <section>
        <?php
            require 'config.php'; 
             include '../conexion.php';
             $id = $_GET['id'];
             $token = $_GET['id'];
             $re=$mysql->query("select * from empresas where id=".$_GET['id'])or die($mysql->error);
             while ($f=$re->fetch_array()){

             
        ?>

         <center>
             <div class="container">
             <img class="imgen_presas" src="../img_presas/<?php echo $f['imagen'];?>"><br>
             <span><?php echo $f['nombre'];?></span><br>
             <span>Horario de entrada: <?php echo $f['horario_entrada'];?></span><br>
             <span>Horario de salida: <?php echo $f['horario_salida'];?></span><br>
             <span>Requisitos: <?php echo $f['requisitos'];?></span><br>
             <span>Fecha de publicación: <?php echo $f['fecha_publi'];?></span><br>
             <span>Numero telefonico: <?php echo $f['telefono'];?></span><br>
             <?php echo ($f['vacante']>0) ? 'Vacantes: '.$f['vacante']: 'sin vacantes';?><br>
             <?php if($f['vacante']>=0){?>
             
             <?php }else{ ?>
             </a>
             <a href="inicio_trabajo.php"> ver empleos</a>
              <?php } ?>
              </div>
         </center>
         <?php
        }
        ?>
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