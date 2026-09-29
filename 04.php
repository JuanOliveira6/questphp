<?php
$salario = 200;

if ($salario <= 280) {
    $aumento = 20;
} elseif ($salario <= 700) {
    $aumento = 15;
} elseif ($salario <= 1500) {
    $aumento = 10;
} else {
    $aumento = 5;
}

$valorAumento = $salario * $aumento / 100;
$novoSalario = $salario + $valorAumento;

echo "Salário anterior: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Aumento: $aumento%\n";
echo "Valor do aumento: R$ " . number_format($valorAumento, 2, ',', '.') . "\n";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.');
?>