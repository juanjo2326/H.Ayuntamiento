<?php
$telefono=0;
$telefono=$_POST['telefono'];

include "../conexion.php";

$re=$mysql->query("select * from pago_pedrial where telefono=".$telefono) or die(mysql_error());
while ($f=$re->fetch_array()){
    ?>
    <div class="consulta">
        <center>
            <span>tipo predial: <?php echo $f['tipo_comprovante'];?></span><br>
            <span>folio: <?php echo $f['folio'];?></span><br>
            <span>fecha: <?php echo $f['fecha'];?></span><br>
            <span>Pago: <?php echo $f['pago'];?></span><br>
            <span>Forma de pago: <?php echo $f['forma_pago'];?></span><br>
            <span>Contribuyente: <?php echo $f['contribuyente'];?></span><br>
            <span>Cuenta predial: <?php echo $f['cuenta_pedrial'];?></span><br>
            <span>valor catastral: <?php echo $f['valor_catastral'];?></span><br>
            <span>tasa: <?php echo $f['tasa'];?></span><br>
            <span>Clave catastral: <?php echo $f['clave_catastral'];?></span><br>
            <span>Concepto: <?php echo $f['concepto'];?></span><br>
            <span>Domicilio: <?php echo $f['domicilio'];?></span><br>
            <span>Ubucacion predio: <?php echo $f['ubicacion_predio'];?></span><br>
            <span>Periodo pago: <?php echo $f['periodo_pago'];?></span><br>
            <span>Clave: <?php echo $f['clave'];?></span><br>
            <span>Telefono: <?php echo $f['telefono'];?></span><br>
        </center>
        
 </div>
 <?php
}
?>