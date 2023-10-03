<form method="post" action="../controllers/recibe_datos.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    </br>
    <input type="radio" id="gc" name="isla" value="Gran Canaria">
    <label for="gc">Gran Canaria</label><br>
    <input type="radio" id="lz" name="isla" value="Lanzarote">
    <label for="lz">Lanzarote</label><br>
    <input type="radio" id="hr" name="isla" value="El Hierro">
    <label for="hr">El Hierro</label>
    <input type="radio" id="lg" name="isla" value="La Gomera">
    <label for="lg">La Gomera</label>
    </br>
    <input type="submit" value="Enviar">
</form>