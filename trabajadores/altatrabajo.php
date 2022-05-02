<?php
include "./conexion.php";

if(!isset($_POST['nombre']) && !isset($_POST['horario_entrada']) && !isset($_POST['horario_salida']) && !isset($_POST['requisitos']) 
  && !isset($_POST['fecha_publi']) && !isset($_POST['telefono']) && !isset($_POST['vacante'])) && !isset($_POST['direccion']))
  {
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
                      $horario_entrada=$_POST['horario_entrada'];
                      $horario_salida=$_POST['horario_salida'];
                      $fecha_publi=$_POST['fecha_publi'];
                      $telefono=$_POST['telefono'];
                      $vacante=$_POST['vacante'];
                      $direccion=$_POST['direccion'];
                     $Sql="insert into empresas (nombre, horario_entrada, horario_salida, fecha_publi, telefono, vacante, direccion, imagen, tipo) values(
                         '".$nombre."',
                         '".$horario_entrada."',
                         '".$horario_salida."',
                         '".$fecha_public."',
                         '".$telefono."',
                         '".$vacante."',
                         '".$direccion."',
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