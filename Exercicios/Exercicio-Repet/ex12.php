<form method="POST">
    <button type="submit" name="mostrar">Mostrar tabuada do 8</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = 8;
    echo "<h3>Tabuada do $n</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $res = $n * $i;
        echo "$n x $i = $res<br>";
    }
}
?>
