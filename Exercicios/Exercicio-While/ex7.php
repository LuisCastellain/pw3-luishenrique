<form method="POST">
    <label>Digite o lado do quadrado (1 a 20):</label>
    <input type="number" name="l" min="1" max="20" required>
    <button type="submit">Desenho</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $l = intval($_POST['l']);

    echo "<pre>";
    for ($i = 0; $i < $l; $i++) {
        for ($j = 0; $j < $l; $j++) {
            echo "*";
        }
        echo "\n";
    }
    echo "</pre>";
}
?>
