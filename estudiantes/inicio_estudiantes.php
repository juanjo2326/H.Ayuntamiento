<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR TRABAJO</title>
    <link rel="stylesheet" type="text/css"href="../css/estilos.css">
    <!--no decetca los estilos en los trabajos-->
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
            <div class="logotrabajo">
            <center><img src="../imagenes/trabajar.PNG" width="100" id="logotrabajo"></center>
            </div>
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="#"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">Documento pedrial</a></li>
                    <li><a href="#"style="text-decoration:none">Personal</a></li>
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
        

    
       
    </header><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
    <div>
          
        <h3>Cuentas con una empresa y ocupas trabajadores registra aqui</h3>
        <div>
        <ul class="diapositivas">
    <li id="diapositivas1">En campusMVP</ li>
    <li id="diapositivas2">encontrarás los mejores</ li>
    <li id="diapositivas">cursos online de programación</ li>
    <li id="diapositivas4">y aprenderás de la mano</ li>
    <li id="diapositivas5">de los mejores profesionales</ li>
 </ul>
 <nav>
    <ul class="menu">
        <li><a href="#diapositivas1">Diapositiva 1<//a></ li>
        <li><a href="#diapositivas2">Diapositiva 2<//a></ li>
        <li><a href="#diapositivas3">Diapositiva 3<//a></ li>
        <li><a href="#diapositivas4">Diapositiva 4<//a></ li>
        <li><a href="#diapositivas5">Diapositiva 5<//a></ li>
</ul>
</nav>
        </div>
    
    <p>En el H Ayuntamiento, queremos mejorar el pueblo para las personas que no <br>
       encuentran trabajo. En nuestro apartado de buscar trabajo tendras las opciones<br>
       de ver las empresas o negocios que estan en el municipio de Penjamillo de Degollado.<br>
       con la ayuda que se tendra se vera la informacion para que ellos te puedan buscar</br>
       asi quedan en contacto con el administrador del contacto   </p>
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
                               <img class="empresas-imagen" src="../img_presas/<?php echo $f['imagen'];?>"><br>
                               <?php echo ($f['vacante']>0) ? '' : '<p class="text-img">Agotado</p>';?>
                           </div>
                           <span><?php echo $f['nombre'];?></span><br>
                           <span>Fecha de publicacion: <?php echo $f['fecha_publi'];?></span><br>
                           <?php echo ($f['vacante']>0) ? 'vacante: '.$f['vacante'] : 'sin vacantes'; ?><br>
                           <a href="./detalles_trabajo.php?id=<?php echo $f['id']; ?>&token=<?php echo
                           hash_hmac('sha1', $f['id'], KEY_TOKEN); ?>" class="btn 
                           btn-primary"> ver detalles</a>

               </center>
               </div>
               <?php
               } 
               ?>
        </section> 

    
</body>
</html>