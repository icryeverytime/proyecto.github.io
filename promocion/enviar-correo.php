<?php
$email = $_POST['email'];
$to = $email;
$subject = "Bienvenido, tiene un CUPON DE DESCUENTO!";

// compose headers
$headers = "From: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "Reply-To: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = " SU CUPON DE DESCUENTO ES EL SIGUIENTE: TEAMOGINA";
$message = wordwrap($message, 70);

// send email
mail($to, $subject, $message, $headers);
header("Location: ../index.php");
?>