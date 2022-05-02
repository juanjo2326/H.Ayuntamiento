<?php

$tipo=$_POST['tipo'];
$folio=$_POST['folio'];
$fecha=$_POST['fecha'];
$pago=$_POST['pago'];
$forma_pago=$_POST['forma_pago'];
$contribuyente=$_POST['contribuyente'];
$cuenta_pedrial=$_POST['cuenta_pedrial'];
$valor_catastral=$_POST['valor_catastral'];
$tasa=$_POST['tasa'];
$clave_castral=$_POST['clave_castral'];
$concepto=$_POST['concepto'];
$domicilio=$_POST['domicilio'];
$ubicacion_predio=$_POST['ubicacion_predio'];
$periodo_pago=$_POST['periodo_pago'];
$clave=$_POST['clave'];
$telefono=$_POST['telefono'];

echo "$tipo,$folio,$fecha,$pago,$forma_pago,$contribuyente,$cuenta_pedrial,$valor_catastral,$concepto,$domicilio,$ubicacion_predio,$periodo_pago,$clave,$telefono";

include "./conexion.php";
$sql="INSERT INTO pago_pedrial (tipo, folio, fecha, pago, forma_pago, contribuyente, cuenta_pedrial, valor_catastral, tasa, clave_catastral,
                                concepto, domicilio, ubicacion_predio, periodo_pago, clave, telefono) 
                                VALUES ('$tipo','$folio','$fecha','$pago','$forma_pago','$contribuyente','$cuenta_pedrial','$valor_catastral','$concepto','$domicilio','$ubicacion_predio','$periodo_pago','$clave','$telefono',)";

$mysql->query($sql);
header("Location: pedrial.php");
?>