<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");

	$sqlAcc = "SELECT * FROM hispass WHERE Usuario ='$usuario' AND Contrasena='$contrasena'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	
    $tipoUsuario = mysqli_fetch_assoc($resAcc);
    $json = json_encode($tipoUsuario);
	if($infAcc == 1){
		$_SESSION['s_usuario'] =$usuario;
		echo $json;
	}else {
		echo 0;
	}

?>