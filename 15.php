<?php
$consumo = 250;

if ($consumo <= 100) {
    $valorKwh = 0.50;
} elseif ($consumo <= 200) {
    $valorKwh = 0.70;
} elseif ($consumo <= 300) {
    $valorKwh = 0.90;
} else {
    $valorKwh = 1.10;
}

$valorTotal = $consumo * $valorKwh;

echo "Consumo: $consumo kWh\n";
echo "Valor do kWh: R$ " . number_format($valorKwh, 2, ',', '.') . "\n";
echo "Valor total da conta: R$ " . number_format($valorTotal, 2, ',', '.');
?>