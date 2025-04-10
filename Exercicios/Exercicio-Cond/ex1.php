<form method="POST">
    <label>Digite o 1º número:</label>
    <input type="number" name="n1" step="any" required><br>
    <label>Digite o 2º número:</label>
    <input type="number" name="n2" step="any" required><br>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);

    echo "Soma: " . ($n1 + $n2) . "<br>";
    echo "Subtração: " . ($n1 - $n2) . "<br>";
    echo "Multiplicação: " . ($n1 * $n2) . "<br>";
    echo "Divisão: " . ($n2 != 0 ? ($n1 / $n2) : "Divisão por zero") . "<br>";
}
?>