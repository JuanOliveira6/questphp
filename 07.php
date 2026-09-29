<?php
$lado1 = 5;
$lado2 = 6;
$lado3 = 9;

if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {
    echo "Não é um triângulo.";
} elseif ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1) {
    echo "Não é um triângulo.";
} elseif ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Triângulo equilátero.";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "Triângulo isósceles.";
} else {
    echo "Triângulo escaleno.";
}
?>