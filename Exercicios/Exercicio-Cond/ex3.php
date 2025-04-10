<form method="POST">
    <label>Nome do vendedor:</label>
    <input type="text" name="nome" required><br>
    <label>Salário fixo:</label>
    <input type="number" name="sal" step="0.01" required><br>
    <label>Total de vendas em R$:</label>
    <input type="number" name="vend" step="0.01" required><br>
    <button type="submit">Calcular salário final</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nm = $_POST['nome'];
    $sal = floatval($_POST['sal']);
    $vend = floatval($_POST['vend']);
    $com = $vend * 0.15;
    $total = $sal + $com;

    echo "<p>Vendedor: $nm<br>Salário fixo: R$ $sal<br>Salário com comissão: R$ $total</p>";
}
?>
