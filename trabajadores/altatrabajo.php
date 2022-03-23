<?php
include "./conexion.php";

if(!isset($_POST['nombre']) && !isset($_POST['apeliidoPa']) && !isset($_POST['apellidoMa']) && !isset($_POST['fecha_nacimiento']) 
  && !isset($_POST['telefono']) && !isset($_POST['rfc']) && !isset($_POST['direccion'])){
      header("Location: agregartrabajador.php");
  } else{
      $allowedExts = array("gif","jpeg","jpg","png");
      $temp = explode(" . ", $_FILES["file"]["name"]);
      $extension = end($temp);
      $imagen="";
      $random=rand(1,999999);
      if ((($_FILES["file"]["type"] == "imagen/gif")
          || ($_FILES["file"]["type"] == "imagen/jpeg")
          || ($_FILES["file"]["type"] == "imagen/jpg")
          || ($_FILES["file"]["type"] == "imagen/pjpeg")
          || ($_FILES["file"]["type"] == "imagen/x-png")
          || ($_FILES["file"]["type"] == "imagen/png"))){
              //verificamos que sea una imagen
              if($_FILES["file"]["error"] > 0){
                  //verificamos que venga algo en el input file
                  echo "Error numerpo:" . $_FILES["file"]["error"] . "<br>";
              }else{
                  //se sube la imagen

                  $imagen= $random.'_'.$_FILES["file"]["name"];
                  if(file_exists("../fotostrabajadores/".$random.'_'.$_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . "Ya extiste.";
                  }else{
                      move_uploaded_file($_FILES["file"]["tmp_name"],
                      "../fotostrabajadores/" .$random.'_'.$_FILES["file"]["name"]);
                      echo "Archivo guardado "."../fotostrabajadores/" .$random.'_'.$_FILES["file"]["name"];
                      $nombre=$_POST['nombre'];
                      $apellidoPa=$_POST['apellidoPa'];
                      $apellidoMa=$_POST['apellidoMa'];
                      $fecha_nacimiento=$_POST['fecha_nacimiento'];
                      $telefono=$_POST['telefono'];
                      $rfc=$_POST['direccion'];
                     $Sql="insert into trabajadores (nombre, apellidoPa, apellidoMa, fecha_nacimiento, telefono, rfc, direccion, imagen, tipo) values(
                         '".$nombre."',
                         '".$apellidoPa."',
                         '".$apellidoMa."',
                         '".$fecha_nacimiento."',
                         '".$telefono."',
                         '".$rfc."',
                         '".$imagen."',
                         '1')";

                         $mysql->query($sql);
                         header("Location: agregartrabajador.php");
                      
                  }
              }
          }else{
              echo "Formato no soportado";
          }
  }

?>