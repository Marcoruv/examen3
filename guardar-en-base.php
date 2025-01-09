<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "mi_base_de_datos");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = $conexion->prepare("INSERT INTO usuarios (nombre, correo) VALUES (?, ?)");
$sql->bind_param("ss", $nombre, $correo);
if ($sql->execute()) {
    echo "Datos guardados en la base de datos.";
} else {
    echo "Error: " . $sql->error;
}
$conexion->close();
?>
<a href="index.html">Inicio</a>