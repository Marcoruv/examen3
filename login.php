<?php
session_start();
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Verificar usuario y contraseña
    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Iniciar sesión
            $_SESSION['usuario_id'] = $row['id'];
            header("Location: profile.php");
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado. Favor de registrarse.";
    }
}
?>

<form method="POST" action="login.php">
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Iniciar sesión</button>
</form>
<a href="index.html">Inicio</a>