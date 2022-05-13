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
            <div class="search">
            <input type="search" placeholder="Buscar">
        </div>
        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#!">inicio</a></li>
                    <li><a href="./trabajadores/inicio_trabajo.php"style="text-decoration:none">Buscas Trabajo</a></li>
                    <li><a href="rfc.php"style="text-decoration:none">Consultar RFC</a></li>
                    <li><a href="#"style="text-decoration:none">Obras realizadas</a></li>
                    <li><a href="./pedrial/inicio_pedrial.php"style="text-decoration:none">DOCUMENTO PEDRIAL</a></li>
                    <li><a href="./personal/personal.php"style="text-decoration:none">Personal</a></li>
                    <li><a href="./estudiantes/inicio_estudiantes.php"style="text-decoration:none">estudiantes</a></li>
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
            <img src="./imagenes/presidente.png" id="letras"> 
            <br><br>
            <br>
            <br>
            <br>
            <br>
            
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
    </div>
    

</body>

</html>