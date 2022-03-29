<?php
    include "./conexion.php";
            
                $mysql->query("insert into usuario (nombre,apellidoPa,apellidoMa,usuario,password,telefono,correo,tipo) values(
                    '".$_REQUEST['nombre']."',
                    '".$_REQUEST['apellidoPa']."',
                    '".$_REQUEST['apellidoMa']."',
                    '".$_REQUEST['usuario']."',	
                    '".$_REQUEST['password']."',
                    '".$_REQUEST['telefono']."',
                    '".$_REQUEST['correo']."',
                    3)");
            
            
            header("Location: ./index.php");
?>