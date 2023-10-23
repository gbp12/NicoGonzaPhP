<!DOCTYPE html>
<?php
//require_once "../helper/funciones_validacion.php";
include "../helper/funciones_validacion.php";
include "../helper/guardar_registros.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" &&  $_POST["formOwner"] == "gonzalo") {
    //si todos los campos del formulario son correctos, se entra en este condicional
    if (isNameValid($_POST["name"]) && isRolValid($_POST["rol"]) && isFeatureValid($_POST["feature"])) {
        //funcion para guardar la data del formulario con pares clave/valor
        save_store($_POST);
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

        //gestion de fichero del usuario
        if (isset($_FILES["pj"])) {
            $file = $_FILES["pj"];
            $file_name = $file["name"];
            $file_tmp = $file["tmp_name"];
            $file_destination = "../archivos/";

            //condicional para renombrar el archivo si ya, usando un contador y un while
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

            //condicional para mover el archivo a la carpeta de destino
            if (move_uploaded_file($file_tmp, $file_destination)) {
                echo "El archivo se ha subido exitosamente con el nuevo nombre: " . $file_name;
            }
        }
    //Este else solo renderiza si hay algun error en un campo
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
            $tmp_name = $_FILES["myfile"]["tmp_name"];
            //$name = $_FILES["myfile"]["name"];
            $nameArr = explode(".", $_FILES["myfile"]["name"]);
            $directory = scandir($uploads_dir);
            $highestInt = (int)filter_var(max($directory), FILTER_SANITIZE_NUMBER_INT);

            $name = $nameArr[0] . ($highestInt + 1) . "." . $nameArr[1];

            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
    } else {
        echo "algo ha salido mal";

        echo "<br><a href=" . "../index.php" . ">Volver al Índice</a>";
    }
} else {
    echo "La que has liado";
}
