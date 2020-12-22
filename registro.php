<?php
$key='1234qwerasdfoj2340wqer#2143!23q';
function encryptthis($data, $key) {
    $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}
function decryptthis($data, $key) {
$encryption_key = base64_decode($key);
list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}
    $contra=$_POST['contra'];
    $enc=encryptthis($contra, $key);
    $dec=decryptthis($enc, $key);

$correo=$_POST['correo'];
$primernombre=$_POST['Pnombre'];
$segundonombre=$_POST['Snombre'];
$primerapellido=$_POST['Papellido'];
$segundoapellido=$_POST['Sapellido'];
$servername = "mysql.practicaprogramacionweb.xyz";
$username = "midnightpro";
$password = "Proyecto69";
$dbname = "sistema_ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexion fallo: " . $conn->connect_error);
}

$sql = "INSERT INTO usuario (Correo, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Contra)
VALUES ('$correo', '$primernombre', '$segundonombre','$primerapellido','$segundoapellido', '$enc')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
die();  
?>