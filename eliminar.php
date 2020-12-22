<?php
include('Tienda/servicios/_conexion.php');
$nombre=$_POST['nombreEli'];
$sql="DELETE FROM producto WHERE nompro='$nombre'"; 
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
mysqli_close($con);
?>