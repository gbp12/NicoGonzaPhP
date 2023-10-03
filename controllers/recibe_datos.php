<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el valor del campo "nombre" del formulario
    $nombre = $_POST["nombre"];

    // Realiza alguna acción con los datos, como guardarlos en una base de datos o mostrarlos en la página
    echo "¡Hola, " . $nombre . "!";
}
