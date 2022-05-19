<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css"href="css/estilologin.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
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
        <ul>
            <li><a href="#">Iniciar Sesion</a></li>
            <li><a href="#">Registrarse</a></li>
            
        </ul>
    </div>
    <div id="formularios">
        <form id="form_session" method="post" action="./login/verificar.php">
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

        <form id="form_register" method="post" action="registrarUsua.php">

                <div class="field-container">
                    <p>Nombre</p>
                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                    <input type="text" id="nombre" name="nombre" class="field" placeholder="Jesus ..."> <br/>
                </div>

            <div class="columns">
                <div class="field-container">
                    <p>Apellido Paterno</p>
                    <i class="fa fa-solid fa-user-plus fa-lg"></i>
                    <input type="text" id="apellidoPa" name="apellidoPa" class="field" placeholder="Perez"> <br/>
                </div>

                <div class="field-container">
                    <p>Apellido Materno</p>
                    <i class="fa fa-solid fa-user-plus fa-lg"></i>
                    <input type="text" id="apellidoMa" name="apellidoMa" class="field" placeholder="Sierra"> <br/>
                </div>
            </div>

            <div class="columns">
                <div class="field-container">
                    <p>Nombre de Usuario</p>
                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                    <input type="text" id="usuario" name="usuario" class="field" placeholder="jesuspezsier"> <br/>
                </div>

                <div class="field-container">
                    <p>Contraseña</p>
                    <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" class="field" placeholder="*******"> <br/>
                </div>
            </div>

            <div class="columns">
                <div class="field-container">
                    <p>Telefono</p>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    <input type="text" id="telefono" name="telefono" class="field"  placeholder="+52 35..."> <br/>
                </div>

                <div class="field-container">
                    <p>Correo</p>
                    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                    <input type="text" id="correo" name="correo" class="field" placeholder="user@example.com"> <br/><br/>
                </div>
            </div>

                <p class="center-content">
                    <input type="submit" class="btn btn-green" value="Registrar">
                </p>
            
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
	</script><br><br><br><br>
               <div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 19px;
    font-size: 19px;
    width: 1900px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 51px;
    padding: 20px 0px;">
               <div class="col-md-3">
                   <img  width="100px;" src="./imagenes/logo.jpg">
                   <img width="100px;" src="./imagenes/logo2.jpeg">
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

</body>
</html>