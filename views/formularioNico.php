<form method="post" action="../controllers/recibe_datos.php" enctype="multipart/form-data">
    <?php
    $defaultFile = fopen("nicoDefault.txt", "r");

    $default = array(
        "nombre" => "",
        "email" => "",
        "deudor" => "",
        "deuda" => 0,
    );

    foreach ($default as $index => $value) {
        $newLine = fgets($defaultFile);
        $default[$index] = trim($newLine);
    }
    /*
    fclose($defaultFile);
    echo "</br>";
    foreach ($default as $index => $value) {
        echo $index . " and " . $value . "|| ";
    }

*/
    ?>



    <h2>Como evadir impuestos</h2>
    <div>
        <input type="text" name="formOwner" value="nicolas" hidden>
        <label for="nombre">Nombre legal:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" value=<?php echo $default["nombre"] ?>>
    </div>
    </br>
    <div>
        <label for="correo">Email: </label>
        <input type="text" name="correo" id="correo" placeholder="Correo electronico" value=<?php echo $default["email"] ?>>
    </div>
    </br>
    <div>
        <h4>A quien le debes dinero?</h4>
        <input type="radio" id="mh" name="agencia" value="El Ministerio de Hacienda" <?php echo ($default["deudor"]) == "hacienda" ? "checked" : "" ?>>
        <label for="mh">Ministerio de Hacienda</label><br>
        <input type="radio" id="at" name="agencia" value="La Agenda tributaria" <?php echo ($default["deudor"]) == "agencia" ? "checked" : "" ?>>
        <label for="at">Agenda tributaria</label><br>
        <input type="radio" id="mr" name="agencia" value="La mafia rusa" <?php echo ($default["deudor"]) == "mafia" ? "checked" : "" ?>>
        <label for="mr">La mafia rusa</label>
        <input type="radio" id="dg" name="agencia" value="La Dirección General del Patrimonio del Estado" <?php echo ($default["deudor"]) == "direccion" ? "checked" : "" ?>>
        <label for="dg">Dirección General del Patrimonio del Estado</label>
    </div>
    </br>
    <input type="range" id="dinero" name="dinero" min="0" max="50000" value=<?php echo $default["deuda"] ?> />
    <label for="dinero">Cuanto dinero debes: </label>
    <h5> <output id="value"> </output>€ </h5>

    <label for="myfile">Declaracion de la renta (2021):</label>
    <input type="file" name="myfile">
    </br></br></br>

    <input type="submit" value="Enviar">

</form>
<script>
    const value = document.querySelector("#value");
    const input = document.querySelector("#dinero");
    value.textContent = input.value;
    input.addEventListener("input", (event) => {
        value.textContent = event.target.value;
    });
</script>