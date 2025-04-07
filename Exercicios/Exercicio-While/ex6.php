<form method="POST">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Digite o " . $i . " número: <input type='number' name='n$i' required><br>";
    }
    ?>
    <button type="submit">Encontrar os dois maiores</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nums = [];

    for ($i = 1; $i <= 10; $i++) {
        $nums[] = floatval($_POST["n$i"]);
    }

    rsort($nums);
    echo "<h3>Dois maiores números digitados foram: $nums[0] e $nums[1]</h3>";
}
?>