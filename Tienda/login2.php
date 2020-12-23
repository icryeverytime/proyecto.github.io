<?php
            if(!empty($_POST["remember"]))
            {
                setcookie("usuario",$_POST["usuario"]);
            setcookie("contraseña",$_POST["contraseña"]);
            }else{
                setcookie("username","");
                setcookie("password","");
            }
            
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

$intentos;
$band=0;

$sql = "SELECT Contra,intentos FROM usuario WHERE Correo='$usuario'";

$resultado= $conn->query($sql);

if($usuario=="admin@admin.admin")
{
    while($row=$resultado->fetch_assoc())
    {

        $contra=decryptthis($row['Contra'],$key);
        if($contra==$contraseña)
        {
            header("Location: admin.php");
            $band=1;
            session_start();
            $_SESSION["usuario"] = $usuario;
        }
        else{ 
            header("Location: incorrecto.php");
            $band=1;
        }
}

    if($band==0){
        header("Location: incorrecto.php");
        header("Location: index.php");
        $band=1;
        session_start();
        $_SESSION["usuario"] = $usuario;
        
    }
    else{ 
        header("Location: incorrecto.php");
        $band=1;
    }
}
else{
    while($row=$resultado->fetch_assoc())//si es
    {
        $contra=decryptthis($row['Contra'],$key);
        $tries=$row['intentos'];

        if($contra==$contraseña && $tries<=3)
        {
            header("Location: index.php");
            $band=1;
            session_start();
            $_SESSION["usuario"] = $usuario;
        }
        else{ 
            
            $band=1;
            //aumentar intentos
            $intentos=$row['intentos'];
            $intentos=$intentos+1;
            $sql1 = "UPDATE usuario SET intentos=$intentos WHERE Correo='$usuario'";// actualizar
            $conn->query($sql1);
            header("Location: ../../incorrecto.php");//solo es igual el nombre
    }
    }
}

if($tries>3){//nada coincide y se acabaron los intentos
    header("Location: incorrecto2.php");
}

if($band==0){//nada coincide
    header("Location: incorrecto.php");
}


?>