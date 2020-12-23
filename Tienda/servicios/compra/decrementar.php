<?php
session_start();

include('../_conexion.php');
$response=new stdClass();

$codpro=$_POST['codpro'];

$_SESSION['volver'] = $_POST['codpro'];

$sql2="UPDATE producto SET cantpro= cantpro -1
	where codpro=$codpro AND cantpro > 0";

	$result2=mysqli_query($con,$sql2);
	if ($result2) {
		$response->state=false;
		$response->detail="Ya no hay mas de este producto";
	}else{
		$response->state=false;
		$response->detail="No se pudo agregar producto. Intente más tarde";
	}

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
