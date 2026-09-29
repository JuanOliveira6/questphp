<?php
$saque = 256;

if ($saque < 10 || $saque > 600) {
    echo "O saque deve estar entre R$ 10 e R$ 600.";
} else {
    $notas100 = intdiv($saque, 100);
    $resto = $saque % 100;

    $notas50 = intdiv($resto, 50);
    $resto = $resto % 50;

    $notas10 = intdiv($resto, 10);
    $resto = $resto % 10;

    $notas5 = intdiv($resto, 5);
    $resto = $resto % 5;

    $notas1 = $resto;

    echo "Saque: R$ $saque\n";
    echo "Notas de R$ 100: $notas100\n";
    echo "Notas de R$ 50: $notas50\n";
    echo "Notas de R$ 10: $notas10\n";
    echo "Notas de R$ 5: $notas5\n";
    echo "Notas de R$ 1: $notas1";
}
?>