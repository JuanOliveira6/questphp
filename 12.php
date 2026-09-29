<?php
$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "Peso: $peso kg\n";
echo "Altura: $altura m\n";
echo "IMC: " . number_format($imc, 2, ',', '.') . "\n";

if ($imc < 18.5) {
    echo "Condição: Abaixo do peso";
} elseif ($imc < 25) {
    echo "Condição: Peso normal";
} elseif ($imc < 30) {
    echo "Condição: Acima do peso";
} elseif ($imc < 40) {
    echo "Condição: Obeso";
} else {
    echo "Condição: Obesidade grave";
}
?>