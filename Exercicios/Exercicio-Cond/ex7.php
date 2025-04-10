<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="n" required><br>
    <button type="submit">Ver Antecessor</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['n']);
    $ant = $n - 1;
    echo "<h3>Antecessor de $n é $ant</h3>";
}
?>
