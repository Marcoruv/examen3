<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $carrera = $_POST['carrera'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertar datos del usuario
    $sql = "INSERT INTO usuarios (nombre, correo, carrera, password) VALUES ('$nombre', '$correo', '$carrera', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="register.php">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="carrera">Carrera:</label>
    <input type="text" id="carrera" name="carrera" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Registrar</button>
</form>
<a href="index.html">Inicio</a>