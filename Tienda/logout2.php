<?php
session_start();

$_SESSION['usuario']="";
$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: index.php");
?>