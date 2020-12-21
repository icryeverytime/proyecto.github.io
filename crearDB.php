<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Usuario (
Correo VARCHAR(255) PRIMARY KEY,
PrimerNombre VARCHAR(30) NOT NULL,
SegundoNombre VARCHAR(30),
PrimerApellido VARCHAR(30) NOT NULL,
SegundoApellido VARCHAR(50),
Contra VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla fue creado correctamente";
} else {
  echo "Error al crear tabla " . $conn->error;
}

$conn->close();
?>