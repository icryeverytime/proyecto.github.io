<?php
//LOGOUT NO INDEX
session_start();

$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: incorrecto.php");
?>