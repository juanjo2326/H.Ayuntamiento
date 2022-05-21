<?php
session_start();
include "../conexion.php";
$re=$mysql->query("select * from usuario where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysql_error());
	while ($f=mysqli_fetch_array($re)) {
		$id=$f['idusu'];
		$tipo=$f['tipo'];
		//$arreglo[]=array('Id'=>$f['id'],'Nombre'=>$f['Nombre'],
			//'Apellido'=>$f['Apellido']);
	}
	if(isset($id)){
		$_SESSION['Usuario']=$id;
		if($tipo==1){
		header("Location: ../index.php");
		}
		if($tipo==2){
			header("Location: ../administracion/inicio_admin.php");	
		}
		if($tipo==3){
			header("Location: ../index.php");	
		}
	}
else{
	header("Location: ../login.php?error=datos no validos");
}
?>