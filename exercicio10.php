<?php
$salario = 2500;
echo "Salário antes do reajuste: R$ $salario<br>";
if ($salario <= 1300) {
    $percentual = 20;
} elseif ($salario <= 2000) {
    $percentual = 15;
} elseif ($salario <= 3500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = ($salario * $percentual) / 100;
$novoSalario = $salario + $aumento;

echo "Percentual de aumento aplicado: $percentual%<br>";
echo "Valor do aumento: R$ $aumento<br>";
echo "Novo salário após o aumento: R$ $novoSalario<br>";

?>