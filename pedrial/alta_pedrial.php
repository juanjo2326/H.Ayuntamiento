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

$mensaje="";


$tipo_comprovante=$_POST['tipo_comprovante'];
$folio=$_POST['folio'];
$fecha=$_POST['fecha'];
$pago=$_POST['pago'];
$forma_pago=$_POST['forma_pago'];
$contribuyente=$_POST['contribuyente'];
$cuenta_pedrial=$_POST['cuenta_pedrial'];
$valor_catastral=$_POST['valor_catastral'];
$tasa=$_POST['tasa'];
$clave_catastral=$_POST['clave_castral'];
$concepto=$_POST['concepto'];
$domicilio=$_POST['domicilio'];
$ubicacion_predio=$_POST['ubicacion_predio'];
$periodo_pago=$_POST['periodo_pago'];
$clave=$_POST['clave'];
$descripcion=$_POST['descripcion'];
$importe=$_POST['importe'];
$telefono=$_POST['telefono'];


include "../conexion.php";
$Sql='';
$validar = "SELECT * FROM pago_pedrial WHERE telefono =".$telefono;
$validando = $mysql->query($validar);
if($validando->num_rows > 0){
echo '<script type="text/javascript">
               alert("Ya esta registrado");
               window.location.href="./pedrial.php";
        </script>';
} else {
echo "$tipo_comprovante,$folio,$fecha,$pago,$forma_pago,$contribuyente,$cuenta_pedrial,$valor_catastral,$concepto,
      $domicilio,$ubicacion_predio,$periodo_pago,$clave,$descripcion,$importe,$telefono";
include "../conexion.php";

$Sql="INSERT INTO pago_pedrial (tipo_comprovante, folio, fecha, pago, forma_pago, contribuyente, cuenta_pedrial, valor_catastral,
                                tasa, clave_catastral ,concepto, domicilio, ubicacion_predio, periodo_pago, clave, descripcion,
                                importe, telefono) 
                                VALUES ('$tipo_comprovante','$folio','$fecha','$pago','$forma_pago','$contribuyente',
                                '$cuenta_pedrial','$valor_catastral','$tasa', '$clave_catastral' ,'$concepto','$domicilio',
                                '$ubicacion_predio','$periodo_pago','$clave','$descripcion','$importe','$telefono')";
echo "    ".$Sql;
            if ($mysql->query($Sql)or die($mysql-> error)) {

echo '<script type="text/javascript">
               alert("se registro con exito");
               window.location.href="./inicio_pedrial.php";
        </script>';
}
}
?>