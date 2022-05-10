<?php

$tipo="";
$folio="";
$fecha="";
$pago="";
$forma_pago="";
$contribuyente="";
$cuenta_pedrial="";
$valor_catastral="";
$tasa="";
$clave_castral="";
$concepto="";
$domicilio="";
$ubicacion_predio="";
$periodo_pago="";
$clave="";
$telefono="";




$tipo_comprovante=$_POST['tipo_comprovante'];
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

echo "$tipo_comprovante,$folio,$fecha,$pago,$forma_pago,$contribuyente,$cuenta_pedrial,$valor_catastral,$concepto,$domicilio,$ubicacion_predio,$periodo_pago,$clave,$telefono";

include "../conexion.php";
$Sql='';
$Sql="INSERT INTO pago_pedrial (tipo_comprovante, folio, fecha, pago, forma_pago, contribuyente, cuenta_pedrial, valor_catastral, tasa, clave_catastral ,concepto, domicilio, ubicacion_predio, periodo_pago, clave) 
                                VALUES ('$tipo_comprovante','$folio','$fecha','$pago','$forma_pago','$contribuyente','$cuenta_pedrial','$valor_catastral','$tasa', '$clave_catastral' ,'$concepto','$domicilio','$ubicacion_predio','$periodo_pago','$clave')";
echo "    ".$Sql;
            if ($mysql->query($Sql)or die($mysql-> error)) {
$mysql->query($sql);
header("Location: pedrial.php");
}
?>