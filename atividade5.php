<?php

function divisaoExata($dividendo, $divisor) {
    return $dividendo % $divisor === 0;
}


while (true) {
  
    echo "Digite um número (<=1 para sair): ";
    $numero = (int) fgets(STDIN);
    
    if ($numero <= 1) {
        echo "Programa encerrado.\n";
        break;
    }
    
    $divisores = array();
    for ($i = $numero - 1; $i >= 1; $i--) {
        if (divisaoExata($numero, $i)) {
            $divisores[] = $i;
        }
    }

    echo "Divisores: " . implode(', ', $divisores) . "\n";
}
?>