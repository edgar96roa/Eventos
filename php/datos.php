<?php    
	session_start();
	if(isset($_SESSION["s_usuario"])){
	include("configBD.php");
	}else{
		header("Location: http://localhost/EventosEscom/index.php");
	}



$Periodo = $_POST["Periodo"];    
$Evento = $_POST["Evento"];    
$Sede = $_POST["Sede"];     
$Fecha = $_POST["Fecha"];    
$Hora = $_POST["Hora"];  

$_GRABAR_SQL = "INSERT INTO evento (Evento,Periodo,Fecha,Hora,IdSede,idAdministrador) VALUES ('$Evento','$Periodo','$Fecha','$Hora','$Sede','".$_SESSION["s_usuario"]."')";    
mysqli_query($conexion, $_GRABAR_SQL);
$infIns = mysqli_affected_rows($conexion);
	if($infIns == 1){
		echo "<h1> Registro Exitoso!!! </h1> <br>
			  <button><a href=\"../indexAdmin.php\">Siguiente</button>";//OK. Se realizó el registro del evento
	}else{
		echo "<h1> No se pudo  crear el evento. </h1> <br>
			  <button><a href=\"crearEvento.php\">Volver</button>"; //ERROR. No se pudo realizar el registro del evento  type="submit" class="btn">Aceptar
	}
?>