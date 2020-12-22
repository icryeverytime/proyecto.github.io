<?php
$email = $_POST['email'];
$telefono = $_POST['phone'];
$nombre = $_POST['nom'];
$asun = $_POST['asuntonto'];

$to = "midnightprofesional@practicaprogramacionweb.xyz";
$subject = "Contacto";

// compose headers
$headers = "From: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "Reply-To: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = $nombre;
$message .= "\r\n";
$message .= $email;
$message .= "\r\n";
$message .= $telefono;
$message .=  "\r\n";
$message .= $asun;
$message = wordwrap($message, 70);

// send email
mail($to, $subject, $message, $headers);
header("Location: ../index.php");
?>