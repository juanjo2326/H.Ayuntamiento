<?php
include "../conexion.php";

echo " hola 1";
if(empty($_POST['nombre']) && empty($_POST['fecha_inicio']) && empty($_POST['fecha_final']) && empty($_POST['lugar']) 
  && empty($_POST['area']) && empty($_POST['descripcion']))
  {
      header("Location: agregarobra.php");
  } else{ echo "hola 2";
      $allowedExts = array("jpeg","jpg","png","xbm","xpm","wbmp","tiff","psb","bmp");
      $temp = explode(" . ", $_FILES["file"]["name"]);
      $extension = end($temp);
      $imagen="";
      $random=rand(1,999999);
      echo "hola 3";
      if (  
          ($_FILES["file"]["type"] == "image/jpeg")
          || ($_FILES["file"]["type"] == "image/jpg")
          || ($_FILES["file"]["type"] == "image/png")
          || ($_FILES["file"]["type"] == "image/xbm")
          || ($_FILES["file"]["type"] == "image/xpm")
          || ($_FILES["file"]["type"] == "image/wbmp")
          || ($_FILES["file"]["type"] == "image/tiff")
          || ($_FILES["file"]["type"] == "image/psb")
          || ($_FILES["file"]["type"] == "image/bmp")
          ){  echo "hola 4";
              //verificamos que sea una imagen
              if($_FILES["file"]["error"] > 0){
                  //verificamos que venga algo en el input file
                  echo "Error numerpo:" . $_FILES["file"]["error"] . "<br>";
              }else{ echo "hola 5";
                  //se sube la imagen

                  $imagen= $random.'_'.$_FILES["file"]["name"];
                  if(file_exists("../img_obras/".$random.'_'.$_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . "Ya extiste.";
                  }else{ echo "hola 6";

                      move_uploaded_file($_FILES["file"]["tmp_name"],
                      "../img_obras/" .$random.'_'.$_FILES["file"]["name"]);
                      echo "Archivo guardado "."../img_obras/" .$random.'_'.$_FILES["file"]["name"];

                      
                      $Sql='';
                       echo "hola 7";
                      $nombre=$_POST['nombre'];
                      $fecha_inicio=$_POST['fecha_inicio'];
                      $fecha_final=$_POST['fecha_final'];
                      $lugar=$_POST['lugar'];
                      $area=$_POST['area'];
                      $descripcion=$_POST['descripcion'];
                      echo $Sql;
                     $Sql="insert into obras (nombre, fecha_inicio, fecha_final, lugar, area, descripcion, imagen) values(
                         '".$nombre."',
                         '".$fecha_inicio."',
                         '".$fecha_final."',
                         '".$lugar."',
                         '".$area."',
                         '".$descripcion."',
                         '".$imagen."'";

                         $mysql->query($Sql);
                         echo '<script type="text/javascript">
                               alert("se registro con exito");
                                     </script>';
                      
                  }
              }
          }else{
              echo "Formato no soportado";
          }
  }

?>