<?php
$inteiro1 = 10;
$inteiro2 = 20;

echo "Valores iniciais: <br>";
echo "Inteiro 1: " . $inteiro1 . "<br>";
echo "Inteiro 2: " . $inteiro2 . "<br>";

$temp = $inteiro1;
$inteiro1 = $inteiro2;
$inteiro2 = $temp;

echo "<br>Valores após a troca: <br>";
echo "Inteiro 1: " . $inteiro1 . "<br>";
echo "Inteiro 2: " . $inteiro2 . "<br>";
?>