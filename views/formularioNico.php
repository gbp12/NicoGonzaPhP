<form method="post" action="../controllers/recibe_datos.php">
    <h2>Como evadir impuestos</h2>
    <div>
        <input type="text" name="formOwner" value="nicolas" hidden>
        <label for="nombre">Nombre legal:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
    </div>
    </br>
    <div>
        <label for="correo">Email: </label>
        <input type="text" name="correo" id="correo" placeholder="Correo electronico">
    </div>
    </br>
    <div>
        <h4>A quien le debes dinero?</h4>
        <input type="radio" id="mh" name="agencia" value="El Ministerio de Hacienda" checked>
        <label for="mh">Ministerio de Hacienda</label><br>
        <input type="radio" id="at" name="agencia" value="La Agenda tributaria">
        <label for="at">Agenda tributaria</label><br>
        <input type="radio" id="mr" name="agencia" value="La mafia rusa">
        <label for="mr">La mafia rusa</label>
        <input type="radio" id="dg" name="agencia" value="La Dirección General del Patrimonio del Estado">
        <label for="dg">Dirección General del Patrimonio del Estado</label>
    </div>
    </br>
    <input type="range" id="dinero" name="dinero" min="0" max="50000" />
    <label for="dinero">Cuanto dinero debes: </label>
    <h5> <output id="value"> </output>€ </h5>
    </br>
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