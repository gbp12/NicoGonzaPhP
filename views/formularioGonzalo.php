<style>
    label {
        display: block;
    }
</style>

<h2>Creacion de personaje</h2>
<form method="post" action="../controllers/recibe_datos.php">
    <input type="text" name="formOwner" value="gonzalo" hidden>
    <label for="name">Introduce el nombre de tu personaje (entre 3 y 15 caracteres):</label>
    <input type="text" name="name" placeholder="Nombre aqui" required>

    <label for="rol">Escoge el rol de tu personaje:</label>
    <select name="rol" multiple>
        <option value="picaro">Picaro</option>
        <option value="mago">Mago</option>
        <option selected value="guerrero">Guerrero</option>
        <option value="arquero">Arquero</option>
    </select>
    <br><br>

    <label for="feature[]">Introduce las características que quieras para tu personaje (minimo una):</label>
    <input checked type="checkbox" name="feature[]" value="extrovertido"> Extrovertido
    <input type="checkbox" name="feature[]" value="valiente"> Valiente
    <input type="checkbox" name="feature[]" value="inteligente"> Inteligente
    <input type="checkbox" name="feature[]" value="habilidoso"> Habilidoso
    <br><br>
    <input type="submit" value="Enviar">

</form>
