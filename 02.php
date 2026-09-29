<?php
$numero1 = 40;
$numero2 = 6;
$numero3 = 85;

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    $menor = $numero1;
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    $menor = $numero2;
} else {
    $menor = $numero3;
}

echo "Maior: $maior\n";
echo "Menor: $menor";
?>