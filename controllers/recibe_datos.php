<!DOCTYPE html>
<?php
//require_once "../helper/funciones_validacion.php";
include "../helper/funciones_validacion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "gonzalo") {
    $nombre = $_POST["nombre"];
    echo "¡Hola, " . $nombre . "!";
    echo "<br>";
    echo $_POST["formOwner"];
    echo "<br>";
    echo var_dump($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "nicolas") {
    $nombre = $_POST["nombre"];
    $email = $_POST["correo"];
    $agencia = $_POST["agencia"];
    $dinero = $_POST["dinero"];
    if (validateMail($email) && isNumber($dinero) && hasContent($nombre)) {
        echo "¡Hola, " . $nombre . "!";
        echo "<br>";
        // echo "El email es valido?, " . $isTrue . "!";
        echo "<br>";
        echo $agencia . " se dirige a tu direccion actual en este instante a recuperar sus " . $dinero . "€";
        echo "<br>";
    } else {
        echo "<br><a href=" . "../index.php" . ">Volver al Índice</a>";
    }
} else {
    echo "La que has liado";
}
