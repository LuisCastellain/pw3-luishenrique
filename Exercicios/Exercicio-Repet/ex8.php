<form method="POST">
    <button type="submit" name="mostrar">Mostrar números decrescentes</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($n = 10; $n >= 1; $n--) {
        echo "$n ";
    }
}
?>
