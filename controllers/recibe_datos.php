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
    $uploads_dir = '../archivos';

    if (validateMail($email) && isNumber($dinero) && hasContent($nombre) && isset($_FILES["myfile"]["name"])) {
        echo "¡Hola, " . $nombre . "!";
        echo "<br>";
        echo "<br>";
        echo $agencia . " se dirige a tu direccion actual en este instante a recuperar sus " . $dinero . "€";
        echo "<br>";
        $isOk = $_FILES["myfile"]["error"];
        if ($isOk == 0) {
            echo "ta rumbando";
            $tmp_name = $_FILES["myfile"]["tmp_name"];
            $name = basename($_FILES["myfile"]["name"]);
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
    } else {
        echo "algo ha salido mal";

        echo "<br><a href=" . "../index.php" . ">Volver al Índice</a>";
    }
} else {
    echo "La que has liado";
}
