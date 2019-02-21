<?php
    include("configBD.php");
    include("getPosts.php");

    $boleta = $_POST["boleta"];
    $sqlDel = "UPDATE alumnogeneracion SET EstadoFoto='0' WHERE Boleta='".$boleta."';";
    $resDel = mysqli_query($conexion, $sqlDel);
    $infDel = mysqli_affected_rows($conexion);
    if($infDel == 1){
        echo 1; //Eliminación correcta del registro
    }else{
        echo 0; //Error. No se pudo eliminar el registro
    }
?>