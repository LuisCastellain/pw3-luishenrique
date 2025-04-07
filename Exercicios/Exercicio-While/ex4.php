<form method="POST">
    <label>Quantos alunos tem na sala?</label>
    <input type="number" name="qt" required>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['qt'])) {
    $qt = intval($_POST['qt']);
    echo "<form method='POST'>";
    for ($i = 1; $i <= $qt; $i++) {
        echo "Nota do aluno $i: <input type='number' name='n$i' required><br>";
    }
    echo "<input type='hidden' name='qt' value='$qt'>";
    echo "<button type='submit' name='calc'>Calcular Média</button>";
    echo "</form>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calc'])) {
    $qt = intval($_POST['qt']);
    $soma = 0;
    for ($i = 1; $i <= $qt; $i++) {
        $nota = floatval($_POST["n$i"]);
        $soma += $nota;
    }
    $med = $soma / $qt;
    echo "<h3>Média da turma: " . number_format($med, 2, ',', '.') . "</h3>";
}
?>
