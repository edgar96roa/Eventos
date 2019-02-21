<?php
    session_start();
    if(isset($_SESSION["s_usuario"])){
    include("configBD.php");
    include("getPosts.php");
    $infArchivo["tmp"] = $_FILES["archivo"]["tmp_name"];
    $infArchivo["nombre"] ="".$_SESSION["s_usuario"].".jpg";
    $infArchivo["tam"] = round(($_FILES["archivo"]["size"])/1024, 2);
    $infArchivo["tipo"] = $_FILES["archivo"]["type"];
    $infArchivo["error"] = $_FILES["archivo"]["error"];
    $sqlAcc = "update alumnogeneracion set estadofoto='1' where boleta='".$_SESSION["s_usuario"]."'";
    $resAcc = mysqli_query($conexion, $sqlAcc);
    if(move_uploaded_file($infArchivo["tmp"], "../images/alumno/".$infArchivo["nombre"])){
        echo 1;
    }else{
        echo 0;
    }

    } 
?>