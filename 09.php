<?php
$resposta1 = "Sim";
$resposta2 = "Não";
$resposta3 = "Sim";
$resposta4 = "Não";
$resposta5 = "Não";

$quantidadeSim = 0;

if ($resposta1 == "Sim") {
    $quantidadeSim++;
}

if ($resposta2 == "Sim") {
    $quantidadeSim++;
}

if ($resposta3 == "Sim") {
    $quantidadeSim++;
}

if ($resposta4 == "Sim") {
    $quantidadeSim++;
}

if ($resposta5 == "Sim") {
    $quantidadeSim++;
}

if ($quantidadeSim == 2) {
    $resultado = "Suspeita";
} elseif ($quantidadeSim == 3 || $quantidadeSim == 4) {
    $resultado = "Cúmplice";
} elseif ($quantidadeSim == 5) {
    $resultado = "Assassino";
} else {
    $resultado = "Inocente";
}

echo "Quantidade de respostas SIM: $quantidadeSim\n";
echo "Classificação: $resultado";
?>