<?php
function calcularAreaRetangulo($base, $altura) {
    return $base * $altura;
}

function calcularPerimetroRetangulo($base, $altura) {
    return 2 * ($base + $altura);
}

for ($i = 1; $i <= 3; $i++) {
    echo "Retângulo $i:\n";
    $base = readline("Digite a base (em cm): ");
    $altura = readline("Digite a altura (em cm): ");
    
    $area = calcularAreaRetangulo($base, $altura);
    $perimetro = calcularPerimetroRetangulo($base, $altura);
    
    echo "Área: $area cm²\n";
    echo "Perímetro: $perimetro cm\n\n";
}
?>