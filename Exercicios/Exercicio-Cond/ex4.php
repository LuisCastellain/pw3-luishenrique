<form method="POST">
    <label>Base:</label>
    <input type="number" name="b" step="any" required><br>
    <label>Altura:</label>
    <input type="number" name="h" step="any" required><br>
    <button type="submit">Calcular Área</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $b = floatval($_POST['b']);
    $h = floatval($_POST['h']);
    $a = $b * $h;
    echo "<h3>Área: $a</h3>";
}
?>
