<?php
	include("configBD.php");
	
	$sqlEst = "SELECT * FROM sede";
	$resEst = mysqli_query($conexion, $sqlEst);
	$regEst = "";
	while($filas = mysqli_fetch_array($resEst,MYSQLI_BOTH)){
		$regEst .= "
			<option value= \" $filas[0] \"> $filas[1] </option>
		";
	}
	
?>