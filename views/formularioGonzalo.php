<style>
    label {
        display: block;
    }
</style>

<h2>Creacion de personaje</h2>
<form method="post" action="../controllers/recibe_datos.php">
    <input type="text" name="formOwner" value="gonzalo" hidden>
    <label for="name">Introduce el nombre de tu personaje:</label>
    <input type="text" name="name" placeholder="Nombre aqui">

    <label for="rol">Escoge el rol de tu personaje (puedes seleccionar varios):</label>
    <select name="rol[]" data-placeholder="Begin typing a name to filter..." multiple>
        <option value="rogue">Picaro</option>
        <option value="wizard">Mago</option>
        <option value="warrior">Guerrero</option>
        <option value="archer">Arquero</option>
    </select>
    <br><br>

    <label for="feature[]">Introduce las características que quieras para tu personaje:</label>
    <input type="checkbox" name="feature[]" value="extrovert"> Extrovertido
    <input type="checkbox" name="feature[]" value="brave"> Valiente
    <input type="checkbox" name="feature[]" value="smart"> Inteligente
    <input type="checkbox" name="feature[]" value="skillFul"> Habilidoso

    <br><br>
    <input type="submit" value="Enviar">

</form>
