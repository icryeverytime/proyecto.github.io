<?php
$key='1234qwerasdfoj2340wqer#2143!23q';

function decryptthis($data, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
    }


    

//$usuario=$_POST['usuario'];
//$contraseña=$_POST['contraseña'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_final";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexion fallo: " . $conn->connect_error);
}

$usuario =$conn->real_escape_string($_POST['usuario']);
$contraseña =$conn->real_escape_string($_POST['contraseña']); 

$sql = "SELECT * FROM ´usuario´ WHERE Correo=$usuario";




$resultado= $conn->query($sql);
echo $resultado;
if($resultado){
    while($row=mysql_fetch_row($resultado)){
        echo $row;
        
    }
    
}





?>