<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css"href="../css/estilologin.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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
                    <li><a href="inicio_pedrial.php"style="text-decoration:none">Regresar</a></li>
                </ul>
            </nav>
        </div>
    </div>

        
    <br><br><br><br>



<?php
$telefono=0;
$telefono=$_POST['telefono'];

include "../conexion.php";

$re=$mysql->query("select * from pago_pedrial where telefono=".$telefono) or die(mysql_error());
while ($f=$re->fetch_array()){
    ?>
<center>
    <table border="2px" width="50%" style="border-radius: 5px;
    width: 36%;
    text-align: left;
    vertical-align: top;
    border: 1px solid #000;">

         <thead>
        <tr>
                <th scope="col">Tipo comprovante</th><th><?php echo $f['tipo_comprovante'];?></th></tr>
                <tr><th scope="col">Folio</th><th><?php echo $f['folio'];?></th></tr>
                <tr><th scope="col">fecha</th><th><?php echo $f['fecha'];?></th></tr>
               <tr> <th scope="col">Pago</th><th><?php echo $f['pago'];?></th></tr>
               <tr> <th scope="col">Forma de pago</th><th><?php echo $f['forma_pago'];?></th></tr>
                <tr><th scope="col">Contribuyente</th><th><?php echo $f['contribuyente'];?></th></tr>
                <tr><th scope="col">cuenta predial</th><th><?php echo $f['cuenta_pedrial'];?></th></tr>
                <tr><th scope="col">Valor catastral</th><th><?php echo $f['valor_catastral'];?></th></tr>
                <tr><th scope="col">Tasa</th><th><?php echo $f['tasa'];?></th></tr>
                <tr><th scope="col">Clave catastral</th><th><?php echo $f['clave_catastral'];?></th></tr>
                <tr><th scope="col">concepto</th><th><?php echo $f['concepto'];?></th></tr>
                <tr><th scope="col">Domicilio</th><th><?php echo $f['domicilio'];?></th></tr>
                <tr><th scope="col">Ubicacion predio</th><th><?php echo $f['ubicacion_predio'];?></th></tr>
                <tr><th scope="col">Periodo pago</th><th><?php echo $f['periodo_pago'];?></th></tr>
                <tr><th scope="col">Clave</th><th><?php echo $f['clave'];?></th></tr>
                <tr><th scope="col">Telefono</th><th><?php echo $f['telefono'];?></th></tr>

            
        </thead>
        </center>
        <?php

         ?>
        

    </table>
 <?php
}
?><br><br><br><br><br><br><br><br>


<div class="footer" style="background: none repeat scroll 0 0 rgb(186,25,201);
    color: white;
    padding: 20px 0 20px;
    margin-top: 19px;
    font-size: 19px;
    width: 1900px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1px;
    padding: 3px 0px;">
               <div class="col-md-3">
                   <img  width="100px;" src="../imagenes/logo.jpg">
                   <img width="100px;" src="../imagenes/logo2.jpeg">
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
 
            
        </p>
    </div>
</body>
</html>