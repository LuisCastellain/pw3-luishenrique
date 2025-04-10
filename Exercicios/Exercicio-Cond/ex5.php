<form method="POST">
    <label>Valor A:</label>
    <input type="number" name="a" required><br>
    <label>Valor B:</label>
    <input type="number" name="b" required><br>
    <button type="submit">Trocar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    $tmp = $a;
    $a = $b;
    $b = $tmp;

    echo "<p>Após a troca:<br>A = $a<br>B = $b</p>";
}
?>
