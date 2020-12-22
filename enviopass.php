<?php
$key='1234qwerasdfoj2340wqer#2143!23q';
$data="";
function decryptthis($data, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
    }

$mail = $_POST['correo'];
$to = $mail;
$contra = "";

$servername = "mysql.practicaprogramacionweb.xyz";
$username = "midnightpro";
$password = "Proyecto69";
$dbname = "sistema_ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexion fallo: " . $conn->connect_error);

}

$sql = "SELECT Contra FROM usuario WHERE Correo='$mail'";

$resultado= $conn->query($sql);
while($row=$resultado->fetch_assoc())
{

    $contra=decryptthis($row['Contra'],$key);
}
$subject = "Tu contraseña aqui está";

// compose headers
$headers = "From: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "Reply-To: midnightprofesional@practicaprogramacionweb.xyz\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = $contra;
$message = wordwrap($message, 70);

// send email
mail($to, $subject, $message, $headers);

header("Location: ../index.php");


?>