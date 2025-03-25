<?php
function calcularY($x) {
    return 5 * $x + 2 * $x + 3;
}

for ($i = 1; $i <= 5; $i++) {
    $x = readline("Digite o valor de X para o cálculo $i: ");
    $y = calcularY($x);
    echo "Para x = $x, y = $y\n";
}
?>