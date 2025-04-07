<form method="POST">
    <button type="submit" name="mostrar">Mostrar Números Crescentes</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($n = 1; $n <= 10; $n++) {
        echo "$n ";
    }
}
?>
