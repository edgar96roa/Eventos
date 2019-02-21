<?php



	include("configBD.php");
	
	$sqlEst = "SELECT * FROM alumnogeneracion WHERE EstadoFoto=1";
	$sqlRest = "select COUNT(boleta) FROM alumnogeneracion where EstadoFoto='1'";

	$resEst = mysqli_query($conexion, $sqlEst);
	$resRest = mysqli_query($conexion, $sqlRest);
	$ruta = "../images/alumno/"; // Indicar ruta <i class='fa fa-close eliminar' data-eliminar='$filas[0]'></i>
	$html = "";
	$regEst = "";
	
	while($filas2 = mysqli_fetch_array($resRest,MYSQLI_BOTH)){
		if($filas2[0] == 0){
			$html .= "<h1>No hay imagenes</h1>
			<br>
			<ul class=\"actions\">
				<li><a href=\"verEvento.php\" class=\"button alt\">Mandar Anuario</a></li>
			</ul>
			";
		}else{
			while($filas = mysqli_fetch_array($resEst,MYSQLI_BOTH)){
		$html .= "
		<div class=\"12u$\">
			<img src=\"".$ruta.$filas[0].".jpg\" width=100%><br>
			<ul class=\"actions\">
				<p>".$filas[0]."</p>
				<li><i  class=\"button alt icon fa-check eliminar\" data-eliminar=\"".$filas[0]."\"><span class=\"label\">Pasa</span></i></li>
				<li><i href=\"#\" class=\"button alt icon fa-close close\" data-close=\"".$filas[0]."\"><span class=\"label\">Next</span></i></li>
			</ul>    
		</div>";
	}
		}
	}
	
	
	
?>