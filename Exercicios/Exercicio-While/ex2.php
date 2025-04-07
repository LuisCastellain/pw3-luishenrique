<form method="POST">
    <button type="submit" name="m">Mostrar Números Pares</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h3>Números pares de 1 a 100:</h3>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
}
?>
