<form method="POST">
    <label>Digite um número maior que 0:</label>
    <input type="number" name="n" required>
    <button type="submit">Mostrar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = intval($_POST['n']);

    if ($n <= 0) {
        echo "<p style='color:red;'>VALOR INVÁLIDO. Digite um número maior que 0.</p>";
    } else {
        for ($i = 1; $i <= $n; $i++) {
            echo "$i ";
        }
    }
}
?>
