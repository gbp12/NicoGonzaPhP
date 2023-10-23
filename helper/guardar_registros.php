<?php
function save_store($data){
    $file_path = "../registros/index.txt";
    $file = fopen($file_path, "a");
    fwrite($file,"\n" .  "Datos de Formulario:" . "\n"); 
    foreach ($data as $key => $value) {
        $data = $key . ": " . $value . "\n";
        fwrite($file, $data);
    }
    fclose($file);
}

