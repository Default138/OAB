<?php
function imprimeDados($nome, $habitantes, $area, $altitude, $estado) {
    echo "$nome | $habitantes | {$area}km² | {$altitude}m | $estado\n";
}


imprimeDados("Foz do Iguaçu", 250000, 500, 145, "Paraná-PR");
imprimeDados("Cascavel", 300000, 420, 320, "Paraná-PR");
imprimeDados("Chapecó", 240000, 120, 620, "Santa Catarina-SC");
imprimeDados("Blumenau", 330000, 200, 85, "Santa Catarina-SC");
imprimeDados("Curitiba", 1500000, 300, 850, "Paraná-PR");
?>