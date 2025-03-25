<?php
function calcularMediaPonderada($a, $b, $c) {
    return (($a * 3) + ($b * 5) + ($c * 2)) / 10;
}

echo "Digite 3 números para calcular a média ponderada:\n";
$numA = readline("Número A: ");
$numB = readline("Número B: ");
$numC = readline("Número C: ");

$media = calcularMediaPonderada($numA, $numB, $numC);
echo "Média ponderada: $media\n";
?>