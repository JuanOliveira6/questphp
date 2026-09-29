<?php
$numero1 = 16;
$numero2 = 5;
$numero3 = 9;

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
    if ($numero2 >= $numero3) {
        $meio = $numero2;
        $menor = $numero3;
    } else {
        $meio = $numero3;
        $menor = $numero2;
    }
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
    if ($numero1 >= $numero3) {
        $meio = $numero1;
        $menor = $numero3;
    } else {
        $meio = $numero3;
        $menor = $numero1;
    }
} else {
    $maior = $numero3;
    if ($numero1 >= $numero2) {
        $meio = $numero1;
        $menor = $numero2;
    } else {
        $meio = $numero2;
        $menor = $numero1;
    }
}

echo "Ordem decrescente: $maior, $meio, $menor";
?>