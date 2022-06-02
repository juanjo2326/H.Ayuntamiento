
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
if ($re->num_rows>0){

while ($f=$re->fetch_array()){
    ?>

<center>
    <table border: 2px; width="50%" style="border-radius: 5px;
     width: 40%;
   text-align: left;
   vertical-align: top;
   border: 3px solid #000;">

         <thead>
        <tr>
            <tr>
                <th style="text-align: center;"><h3>DOCUMENTO PREDIAL</h3></th>
            </tr>
        <tr>

<th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
    background: gray;"><h2>Elemento</h2></th>

<th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
    background: gray;"><h2>Descripción</h2></th>

</tr>
                <th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Tipo comprovante</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['tipo_comprovante'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Folio</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['folio'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Fecha</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['fecha'];?></th></tr>
               <tr> <th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Pago</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['pago'];?></th></tr>
               <tr> <th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Forma de pago</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['forma_pago'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Contribuyente</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['contribuyente'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Cuenta predial</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['cuenta_pedrial'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Valor catastral</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['valor_catastral'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Tasa</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['tasa'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Clave catastral</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['clave_catastral'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Concepto</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['concepto'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Domicilio</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['domicilio'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Ubicacion predio</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['ubicacion_predio'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Periodo pago</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['periodo_pago'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Clave</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['clave'];?></th></tr>
                    <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Descripcion</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['descripcion'];?></th></tr>
                    <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Importe</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['importe'];?></th></tr>
                <tr><th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Telefono</th><th style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;"><?php echo $f['telefono'];?></th></tr>

            
        </thead>
        </center>
        <?php

         ?>
        

    </table>
    
 <?php
}
}else {
    echo '<script type="text/javascript">
    alert("NO HAY REGISTROS");
    window.location.href="./inicio_pedrial.php";
</script>';
    }
?>
<br>
    <p><h1 style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;">¿Quieres descargar el Documento?</h1>
    <center><h2>Deberas colocar el mismo numero telefonico para verificar</h2>
            <h3  style="border-radius: 20px;
    margin: 10px 15px;
    display: inline-flex;
    background: silver;
    padding: 10px;">Despues de darle enviar automaticamente se descargara</h3></center><br>
    <form action="reporte.php" method = "post" enctype="multipart/form-data">
          <!--<fieldset>-->
              Colocar numero telefonico <br><br>
              <input class="controls" type="text" placeholder="Numero telefonico" name="telefono" 
              required style="padding: 14px;
                              width: 300px;
                              border-radius: 9px;"> <br><br>
              <input class="botons" type="submit" name="accion" value="enviar" 
              style="box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
                     color: white;
                     padding: 15px 32px;
                     text-align: center;
                     text-decoration: none;
                     display: inline-block;
                     font-size: 16px;
                     background: rgb(186,25,201);
                     border: none;
                     border-radius: 8px;
                     cursor: pointer;"class="Reagistrar">


</form>
       </center>
    </p>
    </center>
<br><br><br><br><br><br><br>


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
