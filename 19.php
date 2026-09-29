<?php

$velocidade = 12;
$cansada = true;
$chovendo = false;

if ($velocidade < 10 || $velocidade > 20) {
    echo "Velocidade inadequada";
} elseif ($cansada && $velocidade > 15) {
    echo "Velocidade inadequada";
} elseif ($chovendo && $velocidade > 12) {
    echo "Velocidade inadequada";
} else {
    echo "Velocidade adequada";
}

?>