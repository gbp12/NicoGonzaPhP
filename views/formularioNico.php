<form method="post" action="../controllers/recibe_datos.php">
    <input type="text" name="formOwner" value="nicolas" hidden>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    </br>
    <input type="radio" id="gc" name="isla" value="Gran Canaria" checked>
    <label for="gc">Gran Canaria</label><br>
    <input type="radio" id="lz" name="isla" value="Lanzarote">
    <label for="lz">Lanzarote</label><br>
    <input type="radio" id="hr" name="isla" value="El Hierro">
    <label for="hr">El Hierro</label>
    <input type="radio" id="lg" name="isla" value="La Gomera">
    <label for="lg">La Gomera</label>
    </br>
    <input type="range" id="altura" name="altura" min="0" max="150" />
    <label for="altura">Altura</label>
    <h5>Numero= <output id="value"></output> </h5>
    </br>
    <input type="submit" value="Enviar">

</form>
<script>
    const value = document.querySelector("#value");
    const input = document.querySelector("#altura");
    value.textContent = input.value;
    input.addEventListener("input", (event) => {
        value.textContent = event.target.value;
    });
</script>