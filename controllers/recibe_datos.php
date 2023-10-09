<?php
//require_once "../helper/funciones_validacion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "gonzalo") {
    $nombre = $_POST["nombre"];
    echo "¡Hola, " . $nombre . "!";
    echo "<br>";
    echo $_POST["formOwner"];
    echo "<br>";
    echo var_dump($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "nicolas") {
    $nombre = $_POST["nombre"];
    $agencia = $_POST["agencia"];
    $dinero = $_POST["dinero"];
    echo "¡Hola, " . $nombre . "!";
    echo "<br>";
    echo $agencia . " se dirige hacia tu direccion actual en este instante a recuperar sus " . $dinero . "€";
    echo "<br>";


    echo $_POST["formOwner"];
    echo "<br>";
}
