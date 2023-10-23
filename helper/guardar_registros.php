<?php
function save_store($data){
    $file_path = "../registros/index.txt";
    $file = fopen($file_path, "a");
    fwrite($file,"\n" .  "Datos de Formulario:" . "\n"); 
    foreach ($data as $key => $value) {
        echo "<br>";

        $data = $key . ": " . $value . "\n";
        fwrite($file, $data);
        echo $data;
    }
    fclose($file);
}

