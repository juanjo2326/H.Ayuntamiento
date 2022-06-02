<?php 
ob_start();
?>

<?php
$telefono=0;
$telefono=$_POST['telefono'];

include "../conexion.php";
$re=$mysql->query("select * from pago_pedrial where telefono=".$telefono) or die(mysql_error());
if ($re->num_rows>0){

while ($f=$re->fetch_array()){
    ?>

<center>
    <P><H4>H. AYUNTAMIENTO CONSTITUCIONAL DE PENJAMILLO</H4></P>
    
    <table style="border-radius: 5px;
     width: 100%;
   text-align: left;
   vertical-align: top;
   border: 3px solid #000;">

         <thead>
        <tr>
            <tr>
                <th style="text-align: center;"><h4>DOCUMENTO PREDIAL <H6>TESORERIA MUNICIPAL</H6></h4></th>
            </tr>
        <tr>

<th style="width: 20%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
    background: gray;"><h4>Elemento</h4></th>

<th style="width: 20%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
    background: gray;"><h4>Descripción</h4></th>

</tr>
                <th scope="col" style="width: 50%;
    text-align: center;
    vertical-align: top;
    border: 2px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;">Tipo comprobante</th><th style="width: 50%;
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
<!--<tr><th>Firma:</th><th>Sello:</th></tr>-->
            
        </thead>
        </center>
        <?php

         ?>
        

    </table>
    <p><h4>FIRMA RESPONSABLE:______________________________________SELLO:_________</h4></p>
</center>
 <?php
}
}else {
     echo ('<br><h1> NO HAY RESULTADO</h1>'); 
    }




$nombrepdf="Predial.pdf";
require_once '../dompdf/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());

$dompdf->render();
$pdf=$dompdf->output();
$filename = $nombrepdf;
file_put_contents($filename, $pdf);
$dompdf->stream("predial.pdf", array("Attachment"=> false));
//$dompdf->stream($filename);
?>