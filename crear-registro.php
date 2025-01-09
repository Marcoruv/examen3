<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "mi_base_de_datos");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// Insertar datos
$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";
if ($conexion->query($sql) === TRUE) {
    echo "Registro creado con éxito.";
} else {
    echo "Error: " . $conexion->error;
}
$conexion->close();
?>
<a href="index.html">Inicio</a>