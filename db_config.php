<?php
$servername = "localhost";
$username = "root"; // Asegúrate de que sea el usuario correcto
$password = ""; // Si no tienes una contraseña, déjalo vacío
$dbname = "mi_base_de_datos"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
<a href="index.html">Inicio</a>
