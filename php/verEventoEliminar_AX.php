<?php
    include("configBD.php");
    include("getPosts.php");

    $evento = $_POST["evento"];
    $sqlDel = "DELETE FROM alumnoevento WHERE evento = '$evento'";
    $resDel = mysqli_query($conexion, $sqlDel);
    $sqlDel = "DELETE FROM evento WHERE evento = '$evento'";
    $resDel = mysqli_query($conexion, $sqlDel);
    $infDel = mysqli_affected_rows($conexion);
    if($infDel == 1){
        echo 1; //Eliminación correcta del registro
    }else{
        echo 0; //Error. No se pudo eliminar el registro
    }
?>