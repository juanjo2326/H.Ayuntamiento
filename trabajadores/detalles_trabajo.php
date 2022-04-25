
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalles de los trabajos</title>
    <link ewl="stylesheet" type="text/css" href="../css/detallestrabajo.css">
    <!-- <script type="text/javascript" href="."></script> -->
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

    </section>
</body>
</html>