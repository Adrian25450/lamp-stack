<?php
$servername = "db";
$username = "user";
$password = "user123";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "✅ Conexión exitosa a la base de datos MySQL.";
$conn->close();
?>
