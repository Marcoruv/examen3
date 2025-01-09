<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// Escribir en un archivo llamado "datos.txt"
$file = fopen("datos.txt", "a");
fwrite($file, "Nombre: $nombre, Correo: $correo\n");
fclose($file);

echo "Datos guardados correctamente.";
?>
<a href="index.html">Inicio</a>