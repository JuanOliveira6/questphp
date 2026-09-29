<?php
$carne = "Picanha";
$quantidade = 3;
$cartao = true;

if ($carne == "File Duplo") {
    if ($quantidade <= 5) {
        $precoKg = 4.90;
    } else {
        $precoKg = 5.80;
    }
} elseif ($carne == "Alcatra") {
    if ($quantidade <= 5) {
        $precoKg = 5.90;
    } else {
        $precoKg = 6.80;
    }
} elseif ($carne == "Picanha") {
    if ($quantidade <= 5) {
        $precoKg = 6.90;
    } else {
        $precoKg = 7.80;
    }
}

$valorCompra = $quantidade * $precoKg;

if ($cartao == true) {
    $desconto = $valorCompra * 0.05;
} else {
    $desconto = 0;
}

$valorFinal = $valorCompra - $desconto;

echo "HIPERMERCADO QUEROTUDOQUEÉSEU\n";
echo "NOTA FISCAL\n";
echo "Produto: $carne\n";
echo "Quantidade: $quantidade kg\n";
echo "Preço por kg: R$ " . number_format($precoKg, 2, ',', '.') . "\n";
echo "Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "\n";
echo "Desconto do cartão: R$ " . number_format($desconto, 2, ',', '.') . "\n";
echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
echo "Obrigado pela compra!";
?>