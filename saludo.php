<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el campo 'nombre' está lleno
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = htmlspecialchars($_POST['nombre']); // Protege contra ataques XSS
        echo "¡Hola, " . $nombre . "! Bienvenido al sitio.";
    } else {
        echo "Por favor, ingresa un nombre.";
    }
} else {
    echo "Acceso no permitido.";
}
?>