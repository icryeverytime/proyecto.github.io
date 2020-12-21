<?php
 
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];


 
$file=fopen("archivo.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
      $user = $aux[0];
      $contrasena = $aux[1];
      echo $user . " " . $contrasena . "<br>";
      $prueba=$aux[2];
      echo $prueba;    
      if ($user===$usuario && $contrasena === $palabra_secreta){            
            $band=1; break;
     }
    }
}   
fclose($file);

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($band==1){
     
    session_start();
    $micarrito=[];
     $_SESSION["nombre"] = $prueba;
    $_SESSION["usuario"] = $usuario;
    $_SESSION["compras"] = $micarrito;

    # Luego redireccionamos a la pagina "Secreta"
    header("Location: index.html");
    }else{
    # No coinciden, asi  que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
        header("Location: nolog.php");
    }
 
?>