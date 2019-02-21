<?php
    include("../assets/PHPMailer5226/PHPMailerAutoload.php");

	//$sqlAcc = "select Boleta, Correo, Contraseña from alumno a inner join hispass b on a.Boleta=b.Usuario where b.Usuario='$boleta' and a.Correo='$correo'";
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
									'allow_self_signed' => true)
							);
		$mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('cri950505@gmail.com');     // Add a recipient
        //$mail->addAddress('jaortizr@hotmail.com');               // Name is optional
    
        //Attachments
        //$mail->addAttachment('escudoESCOM.jpg', 'escudoESCOM.jpg');    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Duda de " . $name;
        $mail->Body    = $mensaje . " Correo de contacto: " . $email;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 1;
    } catch (Exception $e) {
        echo 2;
      }

?>|