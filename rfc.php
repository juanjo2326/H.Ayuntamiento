<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H Ayuntamiento 2021-2024</title>
    <link rel="stylesheet" type="text/css"href="css/estilosinicio.css">
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
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php">inicio</a></li>
                    <li><a href="./trabajadores/inicio_trabajo.php">Buscas Trabajo</a></li>
                    <li><a href="#">Mantente informado</a></li>
                    <li><a href="#">DOCUMENTO PEDRIAL</a></li>
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
        <br>
        <center><img src="./imagenes/rfc.PNG" width="100" id="rfc"></center>

        
    </header>
    <br>
    <br>
    <br>
    
    
    <div id="info">
        <p>
        <img src="./imagenes/sat.PNG" width="200" id="sat">
        <p><h3> para consultar tú RFC es obligatorio mandarte <br>
           a la parte del SAT donde se deben de colocar los caracteres <br>
           que solicita. A continuación se muestra el listado que se <br>
           necesita para consultar tú RFC.</h3></p>
           <h1>LISTADO DE REQUISITOS PARA LA CONSULTAR DEL RFC</h1>
           <ul class="consultar">
               <li>1.-CURP</li>
               <li>2.-AÑO DE INSCRIPCION</li>
               <li>3.-ENTIDAD FEDERATIVA</li>
               <li>4.-NUMERO TELEFONICO</li>
               <li>5.-CODIGO POSTAL</li>
               <li>6.-ERES EMPLEADO</li>
               <li>7.-deberas ingresar el texto de la imagen</li>
           </ul><br>
           <a href="https://www54.sat.gob.mx/curp/Consult"> CONSULTAR RFC</a>
            
        </p>
    </div>

    </body>
</html>