<form method="POST">
    <label>Distância percorrida (km):</label>
    <input type="number" name="km" step="any" required><br>
    <label>Combustível gasto em litros:</label>
    <input type="number" name="l" step="any" required><br>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $km = floatval(value: $_POST['km']);
    $l = floatval($_POST['l']);
    $cons = $km / $l;
    echo "<h3>Consumo médio: $cons km/l</h3>";
}
?>
