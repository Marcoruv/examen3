<?php
session_start();
include 'db_config.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<h2>Bienvenido, <?php echo $user['nombre']; ?></h2>
<p>Correo: <?php echo $user['correo']; ?></p>
<p>Carrera: <?php echo $user['carrera']; ?></p>

<a href="logout.php">Cerrar sesión</a>
<a href="index.html">Inicio</a>