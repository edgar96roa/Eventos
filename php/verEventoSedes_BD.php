<?php
	include("configBD.php");
	
	$sqlEst = "SELECT IDSEDE,SEDE FROM SEDE";
	$resEst = mysqli_query($conexion, $sqlEst);
	
	$sedeB = "";
	while($filas = mysqli_fetch_array($resEst,MYSQLI_BOTH)){
		$sedeB.= "<option value='$filas[0]'>$filas[1]</option> ";
	}
	
?>
