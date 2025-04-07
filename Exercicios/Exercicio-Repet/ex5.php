<form method="POST">
    <label>Nota 1 de 0 a 10:</label>
    <input type="number" name="n1" step="0.01" min="0" max="10" required><br>
    <label>Nota 2 de 0 a 10:</label>
    <input type="number" name="n2" step="0.01" min="0" max="10" required><br>
    <button type="submit">Calcular Média</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);

    if ($n1 < 0 || $n1 > 10 || $n2 < 0 || $n2 > 10) {
        echo "<p style='color:red;'>VALOR INVÁLIDO: notas devem estar entre 0 e 10.</p>";
    } else {
        $med = ($n1 + $n2) / 2;
        echo "<h3>Média: $med</h3>";
    }
}
?>
