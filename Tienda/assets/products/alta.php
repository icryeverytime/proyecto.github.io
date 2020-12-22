<?php
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$categoria=$_POST['generacion'];
$estado=$_POST['Estado'];
$nombre_archivo=$_FILES['filename']['name'];  
$tipo_archivo=$_FILES['filename']['type'];
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) )) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
    if (move_uploaded_file($_FILES['filename']['tmp_name'],  $nombre_archivo)){
           echo "El archivo ha sido cargado correctamente.";
    }else{
           echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}
include('../../servicios/_conexion.php');
$sql="INSERT INTO PRODUCTO (nompro,catpro,despro,prepro,estado,rutimapro) 
VAlUES ('$nombre','$categoria','$descripcion','$precio',$estado,'$nombre_archivo')"; 
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
mysqli_close($con);
?>