<?php
$notas1 = [100,80,60,0];
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    echo "Média final: $media<br>";
    if ($media >= 60) {
        echo "Aprovado<br>";
    } else {
        echo "Reprovado<br>";
    }
}
echo calcularMedia($notas1)
?>
