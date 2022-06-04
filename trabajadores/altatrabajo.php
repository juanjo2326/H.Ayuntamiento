<?php
include "../conexion.php";

if(empty($_POST['nombre']) && empty($_POST['horario_entrada']) 
   && empty($_POST['horario_salida']) && empty($_POST['requisitos']) 
  && empty($_POST['fecha_publi']) && empty($_POST['telefono']) 
  && empty($_POST['vacante']) && empty($_POST['direccion']))
  {
      header("Location: agregar_trabajo.php");
  } else{
      
      $allowedExts = array("jpeg","jpg","png","xbm","xpm","wbmp","tiff","psb","bmp");
      $temp = explode(" . ", $_FILES["file"]["name"]);
      $extension = end($temp);
      $imagen="";
      $random=rand(1,999999);
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
          ){
              //verificamos que sea una imagen
              if($_FILES["file"]["error"] > 0){
                  //verificamos que venga algo en el input file
                  echo "Error numerpo:" . $_FILES["file"]["error"] . "<br>";
              }else{
                  //se sube la imagen

                  $imagen= $random.'_'.$_FILES["file"]["name"];
                  if(file_exists("../img_presas/".$random.'_'.$_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . "Ya extiste.";
                  }else{

                    move_uploaded_file($_FILES["file"]["tmp_name"],
                    "../img_presas/" .$random.'_'.$_FILES["file"]["name"]);
                    echo "Archivo guardado "."../img_presas/" .$random.'_'.$_FILES["file"]["name"];

                      
                      $Sql='';

                      $nombre=$_POST['nombre'];
                      $horario_entrada=$_POST['horario_entrada'];
                      $horario_salida=$_POST['horario_salida'];
                      $fecha_publi=$_POST['fecha_publi'];
                      $telefono=$_POST['telefono'];
                      $vacante=$_POST['vacante'];
                      $direccion=$_POST['direccion'];
                      echo $Sql;
                     $Sql="insert into empresas (nombre, horario_entrada, horario_salida,
                            requisitos, fecha_publi, telefono, vacante, direccion, imagen, estado) values(
                         '".$nombre."',
                         '".$horario_entrada."',
                         '".$horario_salida."',
                         '".$requisitos."',
                         '".$fecha_publi."',
                         '".$telefono."',
                         '".$vacante."',
                         '".$direccion."',
                         '".$imagen."',
                         '1')";

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