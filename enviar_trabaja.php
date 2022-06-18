<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	
    $destino = 'Gerencia@pharmek';
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Correo = $_POST['Correoelectronico'];
    $Telefono = $_POST['Telefono'];
    $Ocupacion = $_POST['Ocupacion'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];
	$archivo = $_FILES['File'];
	
    $contenido = "Nombre: " . $Nombre . "\nApellido: " . $Apellido . "\nEdad: " . $Edad . "\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nOcupacion: " . $Ocupacion ."\nAsunto: " . $Asunto;
	
	$mail = new PHPMailer();
	
	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host = 'mail.pharmek.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'contacto@pharmek.com';
	$mail->Password = 'CarlosDiego1823';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;	
	
	$mail->setFrom('contacto@pharmek.com','Pharmek');
	$mail->addAddress($destino);
    
	$mail->isHTML(true);
	$mail->Subject = 'Trabaje con Nosotros';
	$mail->Body = $contenido; 
	$mail->AddAttachment($archivo['tmp_name'],$archivo['name']);
	
	$mail->Send();
	
    header("Location:trabaje-con-nosotros.html");

?>
