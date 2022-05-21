<?php
session_start();
include "../conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Obras</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css"href="../css/estiloobra.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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
            <div class="logo2">
                <img src="../imagenes/escudo.png" width="200" id="logo2">
            </div>

        </div>

        <div class="container_menu">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../administracion/inicio_admin.php">inicio</a></li>
                    <li><a href="#!"style="text-decoration:none">Agregar Obras</a></li>
                        <?php
		                if(isset($_SESSION['Usuario'])){ ?>
		            <li><a href="../login/cerrar.php"style="text-decoration:none">cerrar Sesion</a></li>
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
        
    </header> 
	<br><br>
    <center><h1>Agregar Obra</h1></center>
	<div id="formularios">

		<form id="form_register" method="post" action="altaobra.php">

			<div class="field-container">
				<p>Nombre</p>
				<i class="fa fa-folder fa-lg" aria-hidden="true"></i>
				<input type="text" id="nombre" name="nombre" class="field" placeholder="Obra de reparacion..." required> <br/>
			</div><br>

			<div class="columns">
				<div class="field-container">
					<p>Fecha De Inicio</p>
					<i class="fa fa-solid fa-calendar fa-lg"></i>
					<input type="date" id="fecha_inicio" name="fecha_inicio" class="field" placeholder="" required> <br/>
				</div>

				<div class="field-container">
					<p>Fecha Final</p>
					<i class="fa fa-solid fa-calendar-check-o fa-lg"></i>
					<input type="date" id="fecha_final" name="fecha_final" class="field" placeholder=""> <br/>
				</div>
			</div><br>

			<div class="columns">
				<div class="field-container">
					<p>Lugar</p>
					<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
					<input type="text" id="lugar" name="lugar" class="field" placeholder="Penjamillo" required> <br/>
				</div>

				<div class="field-container">
					<p>Area</p>
					<i class="fa fa-group fa-lg" aria-hidden="true"></i>
					<input type="text" id="area" name="area" class="field" placeholder="Obras Publicas" required> <br/>
				</div>
			</div><br>

			<div class="columns">
				<div class="field-container">
					<p>Descripcion</p>
					<i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
					<input type="text" id="descripcion" name="descripcion" class="field"  placeholder="Se reparo tramo..."> <br/>
				</div>

				<div class="field-container">
					<p>Imagen</p>
					<i class="fa fa-image fa-lg" aria-hidden="true"></i>
					<input type="file" id="imagen" name="imagen" class="subir"  placeholder="" required> <br/>
				</div>
			</div><br><br>

			<p class="center-content">
				<input type="submit" class="btn btn-green" value="Registrar Datos">
			</p>
		</form>
	</div>

</body>
</html>