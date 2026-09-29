<?php
$valorHora = 20;
$horasTrabalhadas = 160;

$salarioBruto = $valorHora * $horasTrabalhadas;
$fgts = $salarioBruto * 0.11;
$sindicato = $salarioBruto * 0.03;

if ($salarioBruto <= 900) {
    $ir = 0;
} elseif ($salarioBruto <= 1500) {
    $ir = $salarioBruto * 0.05;
} elseif ($salarioBruto <= 2500) {
    $ir = $salarioBruto * 0.10;
} else {
    $ir = $salarioBruto * 0.20;
}

$salarioLiquido = $salarioBruto - $sindicato - $ir;

echo "Salário bruto: R$ " . number_format($salarioBruto, 2, ',', '.') . "\n";
echo "FGTS: R$ " . number_format($fgts, 2, ',', '.') . " (não descontado)\n";
echo "Sindicato: R$ " . number_format($sindicato, 2, ',', '.') . "\n";
echo "Imposto de renda: R$ " . number_format($ir, 2, ',', '.') . "\n";
echo "Salário líquido: R$ " . number_format($salarioLiquido, 2, ',', '.');
?>