<?php

$forca = 80;
$inteligencia = 50;
$agilidade = 60;

if ($forca == $inteligencia || $forca == $agilidade || $inteligencia == $agilidade) {
    $classe = "Classe híbrida";
} elseif ($forca > $inteligencia && $forca > $agilidade) {
    $classe = "Guerreiro";
} elseif ($inteligencia > $forca && $inteligencia > $agilidade) {
    $classe = "Mago";
} else {
    $classe = "Arqueiro";
}

echo "Força: $forca\n";
echo "Inteligência: $inteligencia\n";
echo "Agilidade: $agilidade \n";
echo "Classe: $classe\n";

?>