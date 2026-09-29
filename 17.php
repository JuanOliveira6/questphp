<?php

$tabela = [
    [1, 2, 3],
    [3, 1, 2],
    [2, 3, 0]
];

$numero = 1;
$linha = 3;
$coluna = 3;

if ($numero < 1 || $numero > 3) {
    echo "Número inválido";
} elseif ($tabela[$linha - 1][0] == $numero || $tabela[$linha - 1][1] == $numero || $tabela[$linha - 1][2] == $numero) {
    echo "Jogada inválida";
} elseif ($tabela[0][$coluna - 1] == $numero || $tabela[1][$coluna - 1] == $numero || $tabela[2][$coluna - 1] == $numero) {
    echo "Jogada inválida";
} else {
    echo "Jogada válida";
}

?>