<form method="POST">
    <label>Consumo (km/l):</label>
    <input type="number" name="cons" step="any" required><br>
    <label>Distância da viagem (km):</label>
    <input type="number" name="dist" step="any" required><br>
    <label>Preço do litro (R$):</label>
    <input type="number" name="preco" step="any" required><br>
    <button type="submit">Calcular Custo</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cons = floatval($_POST['cons']);
    $dist = floatval($_POST['dist']);
    $preco = floatval($_POST['preco']);

    $litros = $dist / $cons;
    $custo = $litros * $preco;

    echo "<h3>Custo estimado da viagem: R$ $custo</h3>";
}
?>
