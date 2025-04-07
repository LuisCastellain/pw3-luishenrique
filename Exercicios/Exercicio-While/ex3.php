<form method="POST">
    <label>Digite um número inteiro:</label>
    <input type="number" name="n" required>
    <button type="submit">Mostrar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['n']);

    echo "<h3>Números pares de 1 até $n:</h3>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }

    echo "<h3>Números ímpares de 1 até $n:</h3>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 !== 0) {
            echo $i . " ";
        }
    }
}
?>
