<!-- exercicio 1  -->

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
?>



<!-- exercicio 2 -->

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

<!-- exercicio 3 -->

<?php
$n = (int)readline("Digite um número inteiro: ");

echo "Números ímpares:\n";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}

echo "Números pares:\n";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

<!-- exercicio 4 -->

<?php
$quant = (int)readline("Quantos alunos tem na sala? ");
$soma = 0;


if ($quant <= 0) {
    echo "O número de alunos deve ser maior que zero.\n";
} else {
    $i = 0;
    while ($i < $quant) {
        $nota = (float)readline("Digite a nota do aluno " . ($i + 1) . ": ");
        $soma += $nota;
        $i++;
    }

    $media = $soma / $quant;
    echo "A média da turma é de: " . number_format($media, 2) . "\n"; 
}
?>


    <!-- exercicio 5 -->

<?php
$maior = 0;

for ($i = 1; $i <= 10; $i++) {
    $n = (int)readline("Digite o número $i: ");
    if ($n > $maior) {
        $maior = $n;
    }
}

echo "O maior número digitado é: $maior\n";
?>

<!-- exercicio 6 -->

<?php
$m1 = 0;
$m2 = 0;

for ($i = 1; $i <= 10; $i++) {
    $n = (int)readline("Digite o número $i: ");
    if ($n > $m1) {
        $m2 = $m1;
        $m1 = $n;
    } elseif ($n > $m2) {
        $m2 = $n;
    }
}

echo "Os dois maiores números digitados são: $m1 e $m2\n";
?>

<!-- exercicio 7 -->

<?php
$t = (int)readline("Digite o tamanho do lado do quadrado (1 a 20): ");

if ($t < 1 || $t > 20) {
    echo "Tamanho inválido. Deve ser entre 1 e 20.\n";
} else {
    for ($i = 0; $i < $t; $i++) {
        echo str_repeat("*", $t) . "\n";
    }
}
?>

<!-- exercicio 8 -->

<?php
$t = (int)readline("Digite o tamanho do lado do quadrado (1 a 20): ");

if ($t < 1 || $tamanho > 20) {
    echo "Tamanho inválido. Deve ser entre 1 e 20.\n";
} else {
    for ($i = 0; $i < $t; $i++) {
        if ($i == 0 || $i == $t - 1) {
            echo str_repeat("*", $t) . "\n";
        } else {
            echo "*" . str_repeat(" ", $t - 2) . "*\n";
        }
    }
}
?>
