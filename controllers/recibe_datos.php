<!DOCTYPE html>
<?php
//require_once "../helper/funciones_validacion.php";
include "../helper/funciones_validacion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "gonzalo") {
    if (isNameValid($_POST["name"]) && isRolValid($_POST["rol"]) && isFeatureValid($_POST["feature"])) {
        $nombre = $_POST["name"];
        $rol = $_POST["rol"];
        $feature = $_POST["feature"];
        echo "<h2>Personaje creado exitosamente</h2>";
        echo "<br>";
        echo "Tu personaje es un " . $rol . " llamado " . $nombre . " con las siguientes caracteristicas:";
        echo "<br>";
        echo "<br>";
        for ($i = 0; $i < count($feature); $i++) {
            echo "<div style='padding-left: 450px; font-weight: 600; font-size: 20px;'>" . $feature[$i] . "</div>";
            echo "<br>";
        }
    } else {
        echo "<h2>Error en el formulario</h2>";
        if (!isNameValid($_POST["name"])) {
            echo "El nombre no es valido<br><br>";
        }
        if (!isRolValid($_POST["rol"])) {
            echo "El rol no es valido<br><br>";
        }
        if (!isFeatureValid($_POST["feature"])) {
            echo "La caracteristica no es valida<br><br>";
        }

        echo "<br><a href=" . "/views/formularioGonzalo.php" . ">Volver al Formulario</a>";
    }

    if (isset($_FILES["pj"])) {
        $file = $_FILES["pj"];
        $file_name = $file["name"];
        $file_tmp = $file["tmp_name"];
        $file_destination = "../archivos/";

        if (file_exists($file_destination . $file_name)) {
            $file_info = pathinfo($file_name);
            $filename = $file_info['filename'];
            $extension = $file_info['extension'];
            
            $counter = 1;
            while (file_exists($file_destination . $filename . "_" . $counter . "." . $extension)) {
                $counter++;
            }
            $file_name = $filename . "_" . $counter . "." . $extension;
        }
        $file_destination .= $file_name;

        if (move_uploaded_file($file_tmp, $file_destination)) {
            echo "El archivo se ha subido exitosamente con el nuevo nombre: " . $file_name;
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    }
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
