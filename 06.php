<?php
$nota1 = 4;
$nota2 = 6;

$media = ($nota1 + $nota2) / 2;

if ($media >= 9) {
    $conceito = "A";
    $resultado = "APROVADO";
} elseif ($media >= 7.5) {
    $conceito = "B";
    $resultado = "APROVADO";
} elseif ($media >= 6) {
    $conceito = "C";
    $resultado = "APROVADO";
} elseif ($media >= 4) {
    $conceito = "D";
    $resultado = "REPROVADO";
} else {
    $conceito = "E";
    $resultado = "REPROVADO";
}

echo "Nota 1: $nota1\n";
echo "Nota 2: $nota2\n";
echo "Média: $media\n";
echo "Conceito: $conceito\n";
echo "$resultado";
?>