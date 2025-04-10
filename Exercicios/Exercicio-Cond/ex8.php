<form method="POST">
    <label>Anos:</label>
    <input type="number" name="a" min="0" required><br>
    <label>Meses:</label>
    <input type="number" name="m" min="0" max="11" required><br>
    <label>Dias:</label>
    <input type="number" name="d" min="0" max="30" required><br>
    <button type="submit">Calcular Idade em Dias</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = intval($_POST['a']);
    $m = intval($_POST['m']);
    $d = intval($_POST['d']);

    $td = ($a * 365) + ($m * 30) + $d;

    echo "<h3>Idade total em dias: $td dias</h3>";
}
?>
