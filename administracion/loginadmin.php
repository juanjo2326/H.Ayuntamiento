<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css"href="../css/estilologin.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
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
	    <div class="menu1">
		    <nav>
                <ul>
                    <li><a href="./index.php"style="text-decoration:none">Regresar</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <br/><br/> 
    
    <div id="menu">

    </div>
    <div id="formularios">
        <form id="form_session" method="post" action="../login/verificar.php">
        <?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
            <p>Nombre de Usuario</p>
            <div class="field-container">
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                <input type="text" id="usuario" name="Usuario" class="field"> <br/>
            </div>
            
            <p>Contraseña</p>
            <div class="field-container">
                <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                <input type="password" id="password" name="Password" class="field"> <br/><br/>
            </div>

            <p class="center-content">
                <input type="submit" class="btn btn-green" value="Iniciar Sesion">
            </p>
            
        </form>
            
        </form>
    </div>

    <script src="jquery.js"></script>
	<script>
		$(function(){
			$("#menu li").on("click", function(){
				var i = $(this).index();
				$("#formularios form").hide();
				$("#formularios form").eq(i).show();
				$("#menu li a").removeClass("active");
				$(this).find("a").addClass("active");
			});
		});
	</script>

</body>
</html>