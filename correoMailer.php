<?php
require '../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'miriam.rguez247@hotmail.com';                 // SMTP username
$mail->Password = 'suck3r.puNch.365';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'miriam.rguez247@hotmail.com';
$mail->FromName = 'Miriam';
//$mail->addAddress('lic.nancy.torres+web@gmail.com', 'Maestra Nancy');     // Add a recipient
$mail->addAddress('miriam.ale247@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('miriam.rguez247@hotmail.com');
//$mail->addBCC('miriam.ale247@gmail.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Prueba correo ';
$mail->Body    = 'este es otro correo de prueba <b>en negritas!</b>';
$mail->AltBody = 'otra prueba';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}