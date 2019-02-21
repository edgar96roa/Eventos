<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");
	
	$sqlUpd = "UPDATE alumno SET correo='".$correo."', telfijo='".$telfijo."', telmovil='".$telmovil."' WHERE boleta='".$_SESSION["s_usuario"]."'";
	$resUpd = mysqli_query($conexion, $sqlUpd);
	$infUpd = mysqli_affected_rows($conexion);
	if($infUpd == 1){
		echo 1; //OK. Se realizó la actualización del registro
	}else{
		echo $sqlUpd; //ERROR. No se pudo realizar la actualización
	}
?>