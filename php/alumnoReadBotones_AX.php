<?php
	//session_start();
	//if(isset($_SESSION["s_usuario"])){
	include("configBD.php");
	
	$nombre="";
	$sqlAcc = "SELECT Asistencia
				FROM alumnoevento
				WHERE boleta='".$_SESSION["s_usuario"]."'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
    $Asistencia ="";
	while ($filas = mysqli_fetch_array($resAcc,MYSQLI_BOTH)){
		$Asistencia .= $filas[0];
		//$nombre=$filas[4];
	}
		if($Asistencia==1){
			$Boton="disabled";
		}else{
			$Boton="";
		}
	//}

?>