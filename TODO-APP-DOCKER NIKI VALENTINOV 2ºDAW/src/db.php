<?php
// Conexión a la base de datos
$servername = "mysql-db"; // Dirección del servidor MySQL (nombre del servicio en docker-compose).
$username = "user"; // Usuario de la base de datos.
$password = "password"; // Contraseña del usuario de la base de datos.
$dbname = "task_db"; // Nombre de la base de datos.

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error); // Error de conexión.
}
?>
