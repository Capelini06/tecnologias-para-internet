<?php

echo "==================================================================" . PHP_EOL;
echo "                      CALCULADORA DE COMPRAS                      " . PHP_EOL;
echo "==================================================================" . PHP_EOL;


// variaveis
$produto = readline("Informe o nomde do produto: ");
$valorUnitario = (float) readline("Informe o valor unitario do produto: R$ ");
$quantidade = (int) readline("Informe a quantidade: ");
$desconto = (float) readline("Informe o percentual desconto do produto: ");
$frete = (float) readline("Informe o preço do frete: R$ ");
$parcelas = (int) readline("Informe a quantidade de parcelas: (1-12)");


// calculos
$subtotal = $valorUnitario * $quantidade;
$valorDesconto = $subTotal * ($desconto / 100);
$totalDesconto = $subtotal - $valorDesconto;
$totalFinal = $totalDesconto + $frete;
$valorParcelado = $totalFinal / $parcelas;

//valor aleatorio
$codigoPedido = rand(1000, 9999);

//data
$dataCompra = date("d/m/y");

echo PHP_EOL;

echo "==================================================================" . PHP_EOL;
echo "                      RESUMO DA COMPRAS                      " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
echo "Codigo Do Pedido          : {$codigoPedido}" . PHP_EOL;
echo "Data do Pedido            : {$dataCompra}" . PHP_EOL;
echo "Nome do Podruto           : {$nomeproduto}" . PHP_EOL;
echo "Subtotal                  : " . number_format($subtotal, 2, ",", ".") . PHP_EOL;
echo "Valor Com Desconto        : " . number_format($valorDesconto, 2, ",", ".") . PHP_EOL;
echo "Total Com Desconto        : " . number_format($totalDesconto, 2, ",", ".") . PHP_EOL;
echo "Total Final               : " . number_format($totalFinal, 2, ",", ".") . PHP_EOL;
echo "Quantidade De Parcela     : {$nomePedido}" . PHP_EOL;
echo "Valor Parcelado           : " . number_format($valorParcelado, 2, ",", ".") . PHP_EOL;
echo "==================================================================" . PHP_EOL;