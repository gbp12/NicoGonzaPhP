<style>
    label {
        display: block;
    }
</style>
<?php
$file = "gonzaloDefault.txt";

if (file_exists($file)) {
    $lines = file($file);
    $lineIndex = 0;
}
?>

<h2>Creación de personaje</h2>
<form method="post" action="../controllers/recibe_datos.php">
    <input type="text" name="formOwner" value="gonzalo" hidden>
    <label for="name">Introduce el nombre de tu personaje (entre 3 y 15 caracteres):</label>
    <input type="text" name="name" placeholder="Nombre aqui" required value="<?php echo isset($lines[$lineIndex]) ? trim($lines[$lineIndex]) : ''; ?>">
    <?php $lineIndex++; ?>

    <label for="rol">Escoge el rol de tu personaje:</label>
    <select name="rol" multiple>
        <option value="picaro">Picaro</option>
        <option value="mago">Mago</option>
        <option value="guerrero">Guerrero</option>
        <option value="arquero">Arquero</option>
    </select>
    <?php
    $selectedRol = isset($lines[$lineIndex]) ? trim($lines[$lineIndex]) : '';
    $lineIndex++;
    ?>
    <script>
        // Select the option that matches the stored value
        document.querySelector('select[name="rol"]').value = '<?php echo $selectedRol; ?>';
    </script>

    <br><br>

    <label for="feature[]">Introduce las características que quieras para tu personaje (mínimo una):</label>
    <input type="checkbox" name="feature[]" value="extrovertido" <?php if (isset($lines[$lineIndex]) && strpos($lines[$lineIndex], 'extrovertido') !== false) echo 'checked'; ?>> Extrovertido

    <input type="checkbox" name="feature[]" value="valiente" <?php if (isset($lines[$lineIndex]) && strpos($lines[$lineIndex], 'valiente') !== false) echo 'checked'; ?>> Valiente

    <input type="checkbox" name="feature[]" value="inteligente" <?php if (isset($lines[$lineIndex]) && strpos($lines[$lineIndex], 'inteligente') !== false) echo 'checked'; ?>> Inteligente

    <input type="checkbox" name="feature[]" value="habilidoso" <?php if (isset($lines[$lineIndex]) && strpos($lines[$lineIndex], 'habilidoso') !== false) echo 'checked'; ?>> Habilidoso
    <br>
    <input type="file" name="pj">

    <br><br>
    <input type="submit" value="Enviar">
</form>
