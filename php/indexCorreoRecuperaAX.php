<?php
    include("..\pluginsFrameworks\PHPMailer5226\PHPMailerAutoload.php");
	include("configBD.php");
	include("getPosts.php");

	$sqlAcc = "select Nombre, Boleta, Correo, Contrasena from alumno where Boleta='$boleta' and Correo='$correo'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	
    $correo = mysqli_fetch_assoc($resAcc);
	if($infAcc == 0){
		echo 0;
	}else{
    $mail = new PHPMailer();
    try {	
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "cri950505@gmail.com";                 // SMTP username
        $mail->Password = "0739CRG.stormlake";                           // SMTP password
        $mail->SMTPSecure = 'tls';                        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    	$mail->SMTPOptions = array(
    								'ssl' => array(
        							'verify_peer' => false,
									'verify_peer_name' => false,
									'allow_self_signed' => true
									)
							);
		$mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('cri950505@gmail.com');
        $mail->addAddress($correo["Correo"]);     // Add a recipient
        //$mail->addAddress('jaortizr@hotmail.com');               // Name is optional
    
        //Attachments
        //$mail->addAttachment('escudoESCOM.jpg', 'escudoESCOM.jpg');    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Recuperacion de Contraseña';
        $mail->Body    = '<p>Hola '.$correo["Nombre"].', tu contraseña par aceder al sistema es: '.$correo["Contrasena"].'</p><br><p>Esperamos que te sea de utilidad</p><br> <p>Saludos.</p><br><br> <table><tr><td valign="top" style="padding:0 8px 0 0;"><img src="https://img.newoldstamp.com/f/000/092/u771.png?5a36a5e8b4b77"/></td><td valign="top" style="font-size:80%;font-family:Arial;border-left:3px solid;border-color:#f8941c;padding:0 0 0 8px;"><div style="font-size:1.2em;">ESCOM - EVENTOS</div><span style="font-size:0.9em;">Escuela Superior de Computo</span><div style="font-size:0.9em;">Unidad Informatica</div><div style="line-height:1em;font-size:1em;">&nbsp;</div><div><span><span style="font-size:0.9em;color:#ababab;">p:&nbsp;</span><span style="font-size:0.9em;">55 5729 6000</span>&nbsp;</span><span><span style="font-size:0.9em;color:#ababab;">p/f:&nbsp;</span><span style="font-size:0.9em;">55 5729 6000</span>&nbsp;</span><span><span style="font-size:0.9em;color:#ababab;">a:&nbsp;</span><span style="font-size:0.9em;">Juan de Dios Bátiz, Nueva Industrial Vallejo, Ciudad de México, CDMX</span>&nbsp;</span></div><div><span><span style="font-size:0.9em;color:#ababab;">w:&nbsp;</span><span><a href="https://www.escom.ipn.mx" target="_blank" style="color:#000000;text-decoration:none;font-size:0.9em;">www.escom.ipn.mx</a></span>&nbsp;</span><span><span style="font-size:0.9em;color:#ababab;">e:&nbsp;</span><span><a href="mailto:escom.ipn.mx" target="_blank" style="font-size:0.9em;color:#000000;text-decoration:none;">escom.ipn.mx</a></span>&nbsp;</span></div><div style="line-height:1em;font-size:1em;">&nbsp;</div></td></tr></table><div style="line-height:10px;font-size:10px;">&nbsp;</div><div><a target="_blank" href="https://newoldstamp.com/editor/?utm_source=Free_Editor&utm_medium=email_banner&utm_campaign=new"><div style="color:#ababab;font-size:10px;"></div></a></div>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 1;
    } catch (Exception $e) {
        echo 2;
      }
	}
?>|