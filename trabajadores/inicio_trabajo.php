<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR TRABAJO</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <!--no decetca los estilos en los trabajos-->
</head>
<style type="text/css">
    .empresas{            
           width: 400px;
    margin: 10px 5px;
    display: inline-flex;
    height: 250px;
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
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php"style="text-decoration:none">inicio</a></li>
                    <li><a href="../rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="#"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="../pedrial/inicio_pedrial.php"style="text-decoration:none">Documento pedrial</a></li>
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
		            <li><a href="./login/cerrar.php"style="text-decoration:none">>cerrar Sesion</a></li>
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
    <br><br><br><br><br><br>
    <center>
    <div>
          
        <h2>Cuentas con una empresa y ocupas trabajadores registra aqui</h2><br><br>
    <a href="./agregar_trabajo.php" class="btn"style="text-decoration:none"><input type="button" value="AGREGAR EMPLEO"></a><br><br>
    
    <p><h2>En el H Ayuntamiento, queremos mejorar el pueblo para las personas que no <br>
       encuentran trabajo. En nuestro apartado de buscar trabajo tendras las opciones<br>
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
                               <img  style="border-radius: 40px;" class="empresas-imagen" src="../img_presas/<?php echo $f['imagen'];?>"><br>
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