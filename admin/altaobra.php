<?php
include "../conexion.php";

if(!isset($_POST['nombre']) && !isset($_POST['fecha_inicio']) && !isset($_POST['fecha_final']) && !isset($_POST['lugar']) 
  && !isset($_POST['area']) && !isset($_POST['descripcion']) && !isset($_POST['imagen'])) && !isset($_POST['imagen2'])
  && !isset($_POST['imagen3']) && !isset($_POST['imagen4']) && !isset($_POST['imagen5']))
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
                  if(file_exists("../img_obras/".$random.'_'.$_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . "Ya extiste.";
                  }else{
                      move_uploaded_file($_FILES["file"]["tmp_name"],
                      "../img_obras/" .$random.'_'.$_FILES["file"]["name"]);
                      echo "Archivo guardado "."../img_obras/" .$random.'_'.$_FILES["file"]["name"];
                      $nombre=$_POST['nombre'];
                      $fecha_inicio=$_POST['fecha_inicio'];
                      $fecha_final=$_POST['fecha_final'];
                      $lugar=$_POST['lugar'];
                      $area=$_POST['area'];
                      $descripcion=$_POST['descripcion'];
                      $imagen1=$_POST['imagen1'];
					  $imagen2=$_POST['imagen2'];
					  $imagen3=$_POST['imagen3'];
					  $imagen4=$_POST['imagen4'];
					  $imagen5=$_POST['imagen5'];
					  
                     $Sql="insert into obras (nombre, fecha_inicio, fecha_final, lugar, area, descripcion, imagen1, imagen2, imagen3, imagen4, imagen5) values(
                         '".$nombre."',
                         '".$fecha_inicio."',
                         '".$fecha_final."',
                         '".$lugar."',
                         '".$area."',
                         '".$descripcion."',
                         '".$imagen1."',
                         '".$imagen2."',
                         '".$imagen3."',
						 '".$imagen4."',
						 '".$imagen5."')";

                         $mysql->query($sql);
                         header("Location: agregarobra.php");
                      
                  }
              }
          }else{
              echo "Formato no soportado";
          }
  }

?>
