<?php
include "./conexion.php";

if(!isset($_POST['nombre']) && !isset($_POST['horario_entrada']) && !isset($_POST['horario_salida']) && !isset($_POST['requisitos']) 
&& !isset($_POST['fecha_publicacion']) && !isset($_POST['vacantes'])){
    header("Location: agregartrabajado.php");
}else{
    $allowedExts = array("gif","jpeg","jpg","png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    $imagen="";
    $random=rand(1,999999);
    if((($_FILES["file"]["type"] == "imagen/gif")
       || ($_FILES["file"]["type"] == "imagen/jpeg")
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
            "../img_presas/" .$random.'_'.$_Files["file"]["name"]);
            echo "Archivo guardado en " . "../img_presas/" .$random.'_'.$_FILES["file"]["name"];
            $empresa=$_POST['nombre'];
            $horario_entrada['horario_entrada'];
            $horario_salida['horario_salida'];
            $requisitos['requisitos'];
            $fecha_publi['fecha_publi'];
            $vacantes['vacantes'];
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
            header("Location: agregar_trabajo.php");
        }
    }
}else{
    echo "formato no soportado";
}
    
    
    
    

}


?>