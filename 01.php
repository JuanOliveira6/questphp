<?php

$numero1 = 16;
$numero2 = 5;
$numero3 = 9;

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    $menor = $numero1;
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    $menor = $numero2;
} else {
    $menor = $numero3;
}
if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

echo "Menor: $menor \n";
echo "Maior: $maior";
?>