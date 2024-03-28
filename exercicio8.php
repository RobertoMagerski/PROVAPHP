<?php

function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}

$numeros = array();

for ($i = 0; $i < 15; $i++) {
    $numeros[$i] = rand(1, 100);
}

for ($i = 0; $i < count($numeros); $i++) {
    echo "Número {$numeros[$i]} é " . verificarParOuImpar($numeros[$i]) . "<br>";
}

?>