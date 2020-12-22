<?php
session_start();
$response=new stdClass();

if (!isset($_SESSION['usuario'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{
	include_once('../_conexion.php');
	$codped=$_POST['delete_produc'];
	$sql="DELETE FROM pedido WHERE codped = $codped ";
	$result=mysqli_query($con,$sql);
	if ($result) {
		header("Location:../../carrito.php");
		//$response->state=true;
		//$response->detail="Producto eliminado";
	}else{
		$response->state=false;
		$response->detail="No se pudo eliminar producto. Intente más tarde";
	}
	mysqli_close($con);
}

header('Content-Type: application/json');
echo json_encode($response);