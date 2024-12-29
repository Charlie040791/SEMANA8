<?php
// Establecer una conexión segura con MySQL
$servername = "nombre_del_servidor";
$username = "nombre_de_usuario";
$password = "contraseña";
$database = "DB_TIENDA";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
} else {
  echo "Conexión exitosa";
}
?>