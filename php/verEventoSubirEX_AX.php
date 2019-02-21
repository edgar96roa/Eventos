<?php
    include("configBD.php");
    include("getPosts.php");
        
    $filename=$_FILES["archivo"]["tmp_name"]; 
    $respuesta="";
    if($_FILES["archivo"]["size"] > 0){
    $file = fopen($filename, "r");

    if($evento==1){
    $sqlQuery="Delete alumnoevento where evento='1'"; 
    mysqli_query($conexion, $sqlQuery);
    $sqlQuery="Delete alumnoevento where evento='1'"; 
    mysqli_query($conexion, $sqlQuery);
    }else{
    $sqlQuery="Delete alumnoevento where evento='0'"; 
    mysqli_query($conexion, $sqlQuery);
    $sqlQuery="Delete alumnoevento where evento='0'"; 
    mysqli_query($conexion, $sqlQuery);
    }


    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
    $sqlQuery = "INSERT INTO alumno (Boleta, Nombre, PeriodoIngreso, Carrera, Plan, Especialidad, Semestre, Inscrito, TotalCreditos, MateriaReprobadas, MateriasAcreditadas, CreditosInscritos, MateriasInscritas, Promedio, CURP, Turno, Genero, Edad, Fecnacimiento, TelFijo, TelMovil, Correo, Contrasena, ActivaSesion) VALUES ('".$getData[0]."', '".$getData[1]."', '".$getData[2]."', '".$getData[3]."', '".$getData[4]."', '".$getData[5]."', '".$getData[6]."', '".$getData[7]."', '".$getData[8]."', '".$getData[9]."', '".$getData[10]."', '".$getData[11]."', '".$getData[12]."', '".$getData[13]."', '".$getData[14]."', '".$getData[15]."', '".$getData[16]."', '".$getData[17]."', '".$getData[18]."', '".$getData[19]."', '".$getData[20]."', '".$getData[21]."', 'qwerty','0')";    
       mysqli_query($conexion, $sqlQuery);
        //$respuesta.=$sqlQuery."  -  " ;
       if($evento==1){
        $sqlQuery="INSERT INTO alumnogeneracion (Boleta, EstadoFoto) VALUES ('".$getData[0]."', '0')"; 
        mysqli_query($conexion, $sqlQuery);

        $sqlQuery="INSERT INTO alumnoevento (Evento, Periodo, Boleta, Asistencia) VALUES ('1', '2017B', '".$getData[0]."', '0');"; 
        mysqli_query($conexion, $sqlQuery);
       }else{
       $sqlQuery="INSERT INTO alumnoexelencia (Boleta) VALUES ('".$getData[0]."')";
        mysqli_query($conexion, $sqlQuery);
        $sqlQuery="INSERT INTO alumnoevento (Evento, Periodo, Boleta, Asistencia) VALUES ('0', '2017B', '".$getData[0]."', '0');"; 
        mysqli_query($conexion, $sqlQuery);
       }
    }
      fclose($file); 
      echo $respuesta;
    }
           
?>