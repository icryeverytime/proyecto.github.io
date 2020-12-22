<?php
$key='1234qwerasdfoj2340wqer#2143!23q';
$data="";
function decryptthis($data, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
    }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_ecommerce4";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexion fallo: " . $conn->connect_error);

}



$usuario =$_POST['usuario'];
$contraseña =$_POST['contraseña']; 



$band=0;

$sql = "SELECT Contra FROM usuario WHERE Correo='$usuario'";

$resultado= $conn->query($sql);

while($row=$resultado->fetch_assoc())
{
    $contra=decryptthis($row['Contra'],$key);
    
    if($contra==$contraseña)
    {
        header("Location: index.php");
        $band=1;
        session_start();
        $_SESSION["usuario"] = $usuario;
        
    }
    else{ 
        header("Location: incorrecto.html");
        $band=1;
    }
}

if($band==0){
    header("Location: incorrecto.html");
}


?>