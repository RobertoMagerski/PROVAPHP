<?php

$meses = [
    1 => "Janeiro", 
    2 => "Fevereiro", 
    3 => "Março", 
    4 => "Abril",
    5 => "Maio", 
    6 => "Junho", 
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro", 
    10 => "Outubro",
    11 => "Novembro", 
    12 => "Dezembro"
];

$numeroMes = 9; 
if (isset($meses[$numeroMes])) {
    echo "Mês correspondente: " . $meses[$numeroMes] . "<br>";
} else {
    echo "Não existe mês com este número<br>";
}
?>