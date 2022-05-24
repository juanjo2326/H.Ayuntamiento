<?php
include ("../conexion.php");

if(!isset($_POST['nombre']) && !isset($_POST['fecha_inicio']) && !isset($_POST['fecha_final']) && !isset($_POST['lugar']) 
   && !isset($_POST['area']) && !isset($_POST['descripcion']))
  {
      header("Location: agregarobra.php");
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
                  if(file_exists("../fotosobras/".$random.'_'.$_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . "Ya extiste.";
                  }else{
                      move_uploaded_file($_FILES["file"]["tmp_name"],
                      "../fotosobras/" .$random.'_'.$_FILES["file"]["name"]);
                      echo "Archivo guardado "."../fotosobras/" .$random.'_'.$_FILES["file"]["name"];
                      $nombre=$_POST['nombre'];
                      $fecha_inicio=$_POST['fecha_inicio'];
                      $fecha_final=$_POST['fecha_final'];
                      $lugar=$_POST['lugar'];
                      $area=$_POST['area'];
                      $descripcion=$_POST['descripcion'];
                     $Sql="insert into obras (nombre, fecha_inicio, fecha_final, lugar, area, descripcion, imagen) values(
                         '".$nombre."',
                         '".$fecha_inicio."',
                         '".$fecha_final."',
                         '".$lugar."',
                         '".$area."',
                         '".$descripcion."',
                         '".$imagen."')";

                         $mysql->query($sql);
                         header("Location: agregarobra.php");
                      
                  }
              }
          }else{
              echo "Formato no soportado";
          }
  }

?>