<?php

function exibirCabecalho() {
    echo "==============================" . PHP_EOL;
    echo "========= LOJA SENAC =========" . PHP_EOL;
    echo "==============================" . PHP_EOL;
}

function lerProduto() {
    return readline("Nome do produto: ");
}

function lerPreco() {
    return (float) readline("Preco do produto: R$ ");
}

function lerQuantidade() {
    return (int) readline("Quantidade do produto: ");
}

function calcularTotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function calcularDesconto($total) {
    if ($total >= 500) {
        return $total * 0.10;
    }

    return 0;
}

function exibirResumo($produto, $quantidade, $total, $desconto) {
    $totalFinal = $total - $desconto;

    echo "==============================" . PHP_EOL;
    echo "=      RESUMO DA VENDA       =" . PHP_EOL;
    echo "==============================" . PHP_EOL;
    echo "Produto    : $produto" . PHP_EOL;
    echo "Quantidade : $quantidade" . PHP_EOL;
    echo "Valor Bruto: R$ " . number_format($total, 2, ",", ".") . PHP_EOL;
    echo "Desconto   : R$ " . number_format($desconto, 2, ",", ".") . PHP_EOL;
    echo "Total Final: R$ " . number_format($totalFinal, 2, ",", ".") . PHP_EOL;
}

exibirCabecalho();

$produto = lerProduto();
$preco = lerPreco();
$quantidade = lerQuantidade();

$total = calcularTotal($preco, $quantidade);
$desconto = calcularDesconto($total);

exibirResumo($produto, $quantidade, $total, $desconto);
