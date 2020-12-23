<?php
session_start();
$response=new stdClass();

$_SESSION['cant_carr'] +=1;

if (!isset($_SESSION['usuario'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{

	include_once('../_conexion.php');
	$codusu=$_SESSION['usuario'];
	$codpro=$_POST['codpro'];
	$sql="INSERT INTO pedido
	(codpro,fecped,estado,dirusuped,telusuped)
	VALUES
	($codpro,now(),1,'','')";
	$result=mysqli_query($con,$sql);
	if ($result) {
		$response->state=true;
		$response->detail="Producto agregado";
	}else{
		$response->state=false;
		$response->detail="No se pudo agregar producto. Intente más tarde";
	}
	mysqli_close($con);
}
header('Content-Type: application/json');
echo json_encode($response);