<?php
$preco = 100;
$formaPagamento = 1;

if ($formaPagamento == 1) {
    $desconto = $preco * 0.10;
    $valorFinal = $preco - $desconto;
    echo "Pagamento: Dinheiro à vista\n";
    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "\n";
    echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.');
} elseif ($formaPagamento == 2) {
    $desconto = $preco * 0.05;
    $valorFinal = $preco - $desconto;
    echo "Pagamento: Cartão à vista\n";
    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "\n";
    echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.');
} elseif ($formaPagamento == 3) {
    $valorParcela = $preco / 3;
    echo "Pagamento: 3 vezes no cartão\n";
    echo "Valor total: R$ " . number_format($preco, 2, ',', '.') . "\n";
    echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.');
} elseif ($formaPagamento == 4) {
    $valorFinal = $preco * 1.10;
    $valorParcela = $valorFinal / 6;
    echo "Pagamento: 6 vezes no cartão\n";
    echo "Valor total: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
    echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.');
}
?>