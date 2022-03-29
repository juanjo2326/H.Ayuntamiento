<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR TRABAJO</title>
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
            <div class="logotrabajo">
                <img src="../imagenes/trabajo.PNG" id="logotrabajo">
            </div>
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php">inicio</a></li>
                    <li><a href="#">Consultar RFC</a></li>
                    <li><a href="#">Mantente informado</a></li>
                    <li><a href="#">citas</a></li>
                    <li><a href="#">calendario</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">estudiantes</a></li>
                    <li><a href="#">Ayuda</a>
                        <ul class="submenu">
                            <li><a href="" href○="#">Ayuda comunitaria</a></li>
                            <li><a href="" href○="#">Ayuda a problemas personales</a></li>
                            <li><a href="" href○="#">Ayuda adictos</a></li>
                            <li><a href="" href○="#">contactanos</a></li>
                            <li><a href="" href○="#">Emergencias</a></li>
                            <li><a href="" href○="#">Quejas o sugerencias</a></li>
                        </ul> 

            </nav>

        </div>
        </div>
        <h3>Cuentas con una empresa y ocupas trabajadores registra aqui</h3>
    <a href="./agregar_trabajo.php">Registrar Trabajo</a>
    </header>
s
      <section>
          <?php
               include '../conexion.php';
               $re=$mysql->query("select * from empresas where estado = 1 ORDER BY vacante DESC") or die(mysql_error());
               while ($f=$re->fetch_array()){
                   ?>
                   <div class="empresas">
                       <center>
                           <div class="contenedor-img">
                               <img class="empresas-imagen" src="./img_presas/<?php echo $f['imagen'];?>"><br>
                               <?php echo ($f['vacante']>0) ? '' : '<p class="text-img">Agotado</p>';?>
                           </div>
                           <span><?php echo $f['nombre'];?></span><br>
                           <?php echo ($f['vacante']>0) ? 'vacante: '.$f['vacante'] : 'sin vacantes'; ?><br>
                           <a href="./detalle_trabajo.php?id=<?php echo $f['id'];?>">ver detalles</a>

               </center>
               </div>
               <?php
               }
               ?>


          
      </section>
      <h2>empleo
          
      </h2>
    
</body>
</html>