<?php

$codigo = rand(1000, 999999);
$data = date("d/m/Y");

$nomeCliente = readline("Qual o nome do cliente: ");
$produto = readline("Qual o produto: ");
$valorUnitario = readline("Qual o valor unitario do produto: ");
// verifica se o valor é valido, maior que 0
if ($valorUnitario <= 0) {
    do {
        $valorUnitario = readline("O valor unitario dever ser maior que 0. Insira um valor valido: ");
    } while ($valorUnitario <= 0);
}

$quantidade = readline("Qual a quantidade de produtos comprados: ");
// verifica se a quantidade é valido, maior que 0
if ($quantidade <= 0) {
    do {
        $quantidade = readline("A quantidade dever ser maior que 0. Insira um valor valido: ");
    } while ($quantidade <= 0);
}

$formaPagamento = readline("Qual a forma de pagamento: ");

$distanciaQuilometros = readline("Qual a distancia em quilômetros: ");
// verifica se a distancia é valido, maior que 0
if ($distanciaQuilometros <= 0) {
    do {
        $distanciaQuilometros = readline("A distancia não pode ser negativa. Insira um valor valido: ");
    } while ($distanciaQuilometros <= 0);
}

$subTotal = $valorUnitario * $quantidade;

// verifica o valor do frete
if ($distanciaQuilometros <= 3) {
    $valorFrete = 5;
} elseif ($distanciaQuilometros > 3 && $distanciaQuilometros <= 8) {
    $valorFrete = 10;
} else {
    $valorFrete = 18;
}

// verifica o desconto pelo subtotal
if ($subTotal > 200) {
    $desconto = 10;
} elseif ($subTotal < 200 && $subTotal > 100) {
    $desconto = 5;
} else {
    $desconto = 0;
}

if ($formaPagamento === "Pix") {
    $desconto = $desconto + 8;
}

if ($desconto > 0) {
    $valorTotal = ($subTotal + $valorFrete) * (1 - $desconto / 100);
} else {
    $valorTotal = ($subTotal + $valorFrete);
}

$descontoReais = $subTotal - $valorTotal;

echo "===================================================================" . PHP_EOL;
echo "                        APRESENTAÇÃO                               " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Codigo                            : {$codigo}" . PHP_EOL;
echo "Data                              : {$data}" . PHP_EOL;
echo "Nome do cliente                   : {$nomeCliente}" . PHP_EOL;
echo "Produto                           : {$produto}" . PHP_EOL;
echo "Valor unitario                    :" . number_format($valorUnitario, 2, ",", ".") . PHP_EOL;
echo "Quantidade                        : {$quantidade}" . PHP_EOL;
echo "Sub total                         :" . number_format($subTotal, 2, ",", ".") . PHP_EOL;
echo "Distancia                         : {$distanciaQuilometros}KM" . PHP_EOL;
echo "Frete                             :" . number_format($valorFrete, 2, ",", ".") . PHP_EOL;
echo "Forma de pagamento                : {$formaPagamento}" . PHP_EOL;
if ($desconto > 0) {
    $descontoReais = $subTotal - $valorTotal;
    echo "Porcentagem de desconto           : {$desconto}%" . PHP_EOL;
    ;
    echo "Valor do desconto em reais        : R$" . number_format($descontoReais, 2, ",", ".") . PHP_EOL;
}
echo "Valor total                       : R$ " . number_format($valorTotal, 2, ",", ".") . PHP_EOL;