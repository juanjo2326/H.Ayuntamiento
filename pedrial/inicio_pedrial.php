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
            <center><img src="../imagenes/carpeta.PNG" width="100" id="rfc"></center>
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../index.php">inicio</a></li>
                    <li><a href="../trabajadores/inicio_trabajo.php">Buscas Trabajo</a></li>
                    <li><a href="#">Obras realizadas</a></li>
                    <li><a href="../personal/personal.php">Personal</a></li>
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
                    </li>
                        <?php
		                if(isset($_SESSION['Usuario'])){ ?>
		            <li><a href="./login/cerrar.php">cerrar Sesion</a></li>
		                <?php
		                } else { 
		                ?>
	                <li><a href="./login.php">Iniciar Sesion O Registrarse</a></li>
		                <?php
		                }
		                ?>
                    </ul>
            </nav>
        
        </div>
        </div>
        
       

        
    </header><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br>
<br><br><br>

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
    <p><h3>Si todavia no registras el documento del predial<br>
       deberas de registrarlo para que no tenga perdidas con el documento<br>
       se debe de colocar cada dato y por supuesto el numero de telefono <br>
       ya que por ese medio se puede hacer la consulta de su documento pedrial.</h3></p>
      <br>
       <a  class="botons" href="pedrial.php"> <input type="button" value="REGISTRAR DOCUEMNTO "></a>
        
    </p>
</div><br><br><br><br>
<br><br><br><br><br><br><br>

<p>
<img src="../imagenes/consultar.png" width="200" id="sat"><br>
    <p><h2> consultar tu documento pedrial, se debera de insertar el numero de telefono que se coloco.</h2><br>
       </center>
    </p>
    </center>

</section>



    </body>
</html>