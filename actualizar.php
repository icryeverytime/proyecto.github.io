<?php
include('Tienda/servicios/_conexion.php');
$nombre=$_POST['nombreActu'];
$descripcion=$_POST['descripcionActu'];
$precio=$_POST['precioActu'];
$cantidad=$_POST['cantidadActu'];
$categoria=$_POST['generacionActu'];
$estado=$_POST['EstadoActu'];
$sql="UPDATE PRODUCTO  
SET nompro='$nombre',catpro='$categoria',despro='$descripcion',prepro='$precio',estado='$estado'
WHERE nompro='$nombre';";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
mysqli_close($con);
?>