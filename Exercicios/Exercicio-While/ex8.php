<form method="POST">
    <label>Digite o lado do quadrado de 1 a 20:</label>
    <input type="number" name="l" min="1" max="20" required>
    <button type="submit">Desenhar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $l = intval($_POST['l']);

    echo "<pre>";
    for ($i = 0; $i < $l; $i++) {
        for ($j = 0; $j < $l; $j++) {
            if ($i == 0 || $i == $l - 1 || $j == 0 || $j == $l - 1) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "</pre>";
}
?>
