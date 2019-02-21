<?php
	include("configBD.php");
	include("getPosts.php");
	
	$sqlUpd = "UPDATE evento SET fecha='$fecha', hora='$hora', idsede='$sede' WHERE evento='$evento'";
	$resUpd = mysqli_query($conexion, $sqlUpd);
	$infUpd = mysqli_affected_rows($conexion);
	if($infUpd == 1){
		echo 1; //OK. Se realizó la actualización del registro
	}else{
		echo 0; //ERROR. No se pudo realizar la actualización
	}
?>