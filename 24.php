<?php

$plantacaoPronta = true;
$milho = 120;
$maquinaDisponivel = true;
$maquinaReserva = false;
$maquinaManutencao = false;

if ($plantacaoPronta && $milho >= 100 && ($maquinaDisponivel || $maquinaReserva) && !$maquinaManutencao) {
    echo "A máquina pode iniciar a colheita.";
} else {
    echo "A máquina não pode iniciar a colheita.";
}

?>