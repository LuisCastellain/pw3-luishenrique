<form method="POST">
    <button type="submit" name="mostrar">Mostrar Números</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = 101;
    for ($i = 0; $i < 10; $i++) {
        echo "$n ";
        $n++;
    }
}
?>
