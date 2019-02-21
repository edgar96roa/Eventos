<?php
	include("configBD.php");
	include("getPosts.php");
	$sqlAcc = "SELECT * FROM EVENTO A INNER JOIN SEDE B ON A.IDSEDE=B.IDSEDE WHERE A.EVENTO=$evento";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	
    $eventoR = mysqli_fetch_assoc($resAcc);
    $json = json_encode($eventoR);
	if($infAcc == 1){
		echo $json;
	}else {
		echo 0;
	}
?>