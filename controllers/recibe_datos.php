<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //&& $_POST[owner]== "gonzalo"/"nicolas"
    // Obtén el valor del campo "nombre" del formulario
    $nombre = $_POST["nombre"];
    // $isla = $_POST["isla"];


    // Realiza alguna acción con los datos, como guardarlos en una base de datos o mostrarlos en la página
    echo "¡Hola, " . $nombre . "!";
}
