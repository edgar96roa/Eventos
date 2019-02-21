<?php
 session_start();
	include("configBD.php");
	
	$sqlEst = "SELECT * FROM administrador where idAdministrador='".$_SESSION["s_usuario"]."'";
	$sqlFecha = "Select DATE(NOW())";
	$resEst = mysqli_query($conexion, $sqlEst);
	
	$resFecha = mysqli_query($conexion, $sqlFecha);
	$regFecha = "";
	while($filas = mysqli_fetch_array($resFecha,MYSQLI_BOTH)){
		$regFecha = "<p>$filas[0]</p>";
	}
	
	$regEst = "";
	while($filas = mysqli_fetch_array($resEst,MYSQLI_BOTH)){
		$regEst .= "
			<h1>$filas[1] $filas[2]</h1>
		";
	}
	
?>