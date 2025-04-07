<form method="POST">
    <label>Digite um número maior que 0:</label>
    <input type="number" name="n" min="1" required>
    <button type="submit">Mostrar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['n']);

    for ($i = 1; $i <= $n; $i++) {
        echo "$i ";
    }
}
?>
