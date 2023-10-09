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
    $isla = $_POST["isla"];
    $altura = $_POST["altura"];
    echo "¡Hola, " . $nombre . "!";
    echo "<br>";
    echo "Isla = " . $isla;
    echo "<br>";
    echo "Estas a " . $altura . " metros sobre el nivel del mar";
    echo "<br>";

    echo $_POST["formOwner"];
    echo "<br>";
}
