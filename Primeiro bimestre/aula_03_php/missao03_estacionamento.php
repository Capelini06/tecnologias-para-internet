<?php

$codigo = rand(1000, 999999);
$data = date("d/m/Y");

echo "==================================================================" . PHP_EOL;
echo "                         DADOS DO CLIENTE                         " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$nomeCliente = readline("Qual o nome do cliente: ");
$placa = readline("Qual a placa do veiculo: ");
$tipoVeiculo = readline("Qual o tipo do veiculo do cliente: ");
// valida se o tipo do veiculo é valido
if ($tipoVeiculo != "SUV" && $tipoVeiculo != "Moto" && $tipoVeiculo != "Carro") {
    do {
        $tipoVeiculo = readline("O tipo do veiculo deve ser SUV, Moto ou Carro. Insira um tipo valido: ");
    } while ($tipoVeiculo != "SUV" && $tipoVeiculo != "Moto" && $tipoVeiculo != "Carro");
}

$horasEstacionada = readline("Por quantas horas o veiuclo vai ficar estacionado: ");
// Valida se as horaas estacionadas é valida, maior que 0
if ($horasEstacionada <= 0) {
    do {
        $horasEstacionada = readline("A quantidade de horas deve ser maior do que 0. Insira um valor valido:");
    } while ($horasEstacionada <= 0);
}

// Verifica o valor por hora em consideração ao tipo de veiculo
if ($tipoVeiculo == "SUV") {
    $valorPorHora = 12;
} else if ($tipoVeiculo == "Moto") {
    $valorPorHora = 5;
} else if ($tipoVeiculo == "Carro") {
    $valorPorHora = 10;
}

$desconto = 0;
$subTotal = $valorPorHora * $horasEstacionada;

// verifica a existencia de desconto
if ($horasEstacionada >= 8) {
    $desconto = 10;
    $valorTotal = $subTotal * (1 - $desconto / 100);
} else {
    $valorTotal = $subTotal;
}

echo "===================================================================" . PHP_EOL;
echo "                        APRESENTAÇÃO                               " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Codigo                            : {$codigo}" . PHP_EOL;
echo "Data                              : {$data}" . PHP_EOL;
echo "Cliente                           : {$nomeCliente}" . PHP_EOL;
echo "Placa do carro                    : {$placa}" . PHP_EOL;
echo "Tipo do veiculo                   : {$tipoVeiculo}" . PHP_EOL;
echo "Horas estacionadas                : {$horasEstacionada}" . PHP_EOL;
echo "Valor po hora                     : R$" . number_format($valorPorHora, 2, ",", ".") . PHP_EOL;
echo "Subtotal                          : R$" . number_format($subTotal, 2, ",", ".") . PHP_EOL;
if ($desconto > 0) {
    $descontoReais = $subTotal - $valorTotal;
    echo "Porcentagem de desconto           : {$desconto}%" . PHP_EOL;
    ;
    echo "Valor do desconto em reais        : R$" . number_format($descontoReais, 2, ",", ".") . PHP_EOL;
}
echo "Valor total                       : R$ " . number_format($valorTotal, 2, ",", ".") . PHP_EOL;