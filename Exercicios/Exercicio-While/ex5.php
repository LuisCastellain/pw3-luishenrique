<form method="POST">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Digite o " . $i . " número: <input type='number' name='n$i' required><br>";
    }
    ?>
    <button type="submit">Ver Maior</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $maior = null;

    for ($i = 1; $i <= 10; $i++) {
        $n = floatval($_POST["n$i"]);
        if ($maior === null || $n > $maior) {
            $maior = $n;
        }
    }

    echo "<h3>Maior número: $maior</h3>";
}
?>