<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mensaje = "SU CUPON DE DESCUENTO ES EL SIGUIENTE: TEAMOGINA"; 
$email = $_POST['email'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'midnight.profesional@gmail.com';                     // SMTP username
    $mail->Password   = '6JafYgEBCfKyvg8';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('midnight.profesional@gmail.com', ' Midnight Profesional');
    $mail->addAddress($email);     // Add a recipient
    // Attachments  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CUPON DE DESCUENTO';
    $mail->Body    = $mensaje;
	
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>