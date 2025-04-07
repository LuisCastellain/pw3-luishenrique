<form method="POST">
    <label>Valor 1:</label>
    <input type="number" name="n1" step="any" required><br>
    <label>Valor 2 (≠ 0):</label>
    <input type="number" name="n2" step="any" required><br>
    <button type="submit">Dividir</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);

    if ($n2 == 0) {
        echo "<p style='color:red;'>VALOR INVÁLIDO: divisão por zero!</p>";
    } else {
        $res = $n1 / $n2;
        echo "<h3>Resultado: $res</h3>";
    }
}
?>
