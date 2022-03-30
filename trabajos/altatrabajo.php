<?php
include ("../conexion.php");

if(!isset($_POST['nombre']) && !isset($_POST['horario_entrada']) && !isset($_POST['horario_salida']) && !isset($_POST['requisitos']) 
&& !isset($_POST['fecha_publi']) && !isset($_POST['vacantes'])){
    header("Location: ../trabajadores/agregar_trabajado.php");
}else{
    $allowedExts = array("gif","jpeg","jpg","png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    $imagen="";
    $random=rand(1,999999);
    if((($_FILES["file"]["type"] == "imagen/gif")
       || ($_FILES["file"]["type"] == "imagen/jpeg")
       || ($_FILES["file"]["type"] == "imagen/jpg")
       || ($_FILES["file"]["type"] == "imagen/pjpeg")
       || ($_FILES["file"]["type"] == "imagen/x-png")
       || ($_FILES["file"]["type"] == "imagen/png"))){
           //verificamos que sea una imagen
    if ($_FILES["file"]["error"] > 0){
        //verificamos que venga algo en el input file
        echo "Error numero: " . $_FILES["file"]["error"] . "<br>"; 
    }else{
        //subimos la imagen
        $imagen= $random.'_'.$_FILES["file"]["name"];
        if(file_exists("../img_presas/".$random.'_'.$_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . "ya existe. ";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "../img_presas/" .$random.'_'.$_FILES["file"]["name"]);
            echo "Archivo guardado en " . "../img_presas/" .$random.'_'.$_FILES["file"]["name"];
            $empresa=$_POST['nombre'];
            $horario_entrada=$_POST['horario_entrada'];
            $horario_salida=$_POST['horario_salida'];
            $requisitos=$_POST['requisitos'];
            $fecha_publi=$_POST['fecha_publi'];
            $vacantes=$_POST['vacantes'];
            $Sql="insert into empresas (nombre,horario_entrada,horario_salida,requisitos,fecha_publi,vacante,estado,imagen) values(
                '".$empresa."',
                '".$horario_entrada."',
                '".$horario_salida."',
                '".$requisitos."',
                '".$fecha_publi."',
                '".$vacantes."',
                '".$imagen."',
                '1')";
            $mysql->query($Sql);
            header("Location: ../trabajadores/agregar_trabajo.php");
        }
    }
}else{
    echo "formato no soportado";
}
    
    
    
    

}


?>