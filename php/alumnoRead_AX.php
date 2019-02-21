<?php

	include("configBD.php");
	/*leo los datos del evento*/
	$sqlAcc = "SELECT sede,domicilio,fecha,hora,nombre,maps
				FROM sede a INNER JOIN evento b
				ON a.idSede=b.idSede
				INNER JOIN alumnoevento c
				ON b.evento=c.evento
				INNER JOIN ALUMNO D 
				ON C.boleta=D.boleta
				AND b.periodo=c.periodo
				WHERE c.boleta='".$_SESSION["s_usuario"]."'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$datosEvento="";
	$maps="";
	while ($filas = mysqli_fetch_array($resAcc,MYSQLI_BOTH)){
		$maps.=$filas[5];
		$datosEvento .= "Invitado: $filas[4] <br>Sede: $filas[0]<br> Dirección: $filas[1]<br> Fecha: $filas[2]<br> Hora: $filas[3]<br><br>";
	}
	
?>