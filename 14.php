<?php
$horasTrabalhadas = 45;
$valorHora = 20;

if ($horasTrabalhadas <= 40) {
    $salario = $horasTrabalhadas * $valorHora;
} elseif ($horasTrabalhadas <= 60) {
    $horasExtras = $horasTrabalhadas - 40;
    $salario = (40 * $valorHora) + ($horasExtras * $valorHora * 1.5);
} else {
    $horasExtras = $horasTrabalhadas - 40;
    $salario = (40 * $valorHora) + ($horasExtras * $valorHora * 2);
}

echo "Horas trabalhadas: $horasTrabalhadas\n";
echo "Valor por hora: R$ " . number_format($valorHora, 2, ',', '.') . "\n";
echo "Salário semanal: R$ " . number_format($salario, 2, ',', '.');
?>