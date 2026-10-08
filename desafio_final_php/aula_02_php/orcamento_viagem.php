<?php


echo "==================================================================" . PHP_EOL;
echo "                         ENTRADA DE DADOS                         " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$nomeCliente = readline("Informe o seu nome: ");
$cidadeOrigem = readline("Informe a cidade de origem: ");
$cidadeDestino = readline("Informe a cidade de destino da viagem: ");
$pessoas = (int) readline("Informe quantas pessoas vão viajar: ");
$dias = (int) readline("Informe de quantos dias sera a viagem: ");
$valorPassagem = (float) readline("Informe o valor da passagem: ");
$valorDiaria = (float) readline("Informe ao valor da diaria da hospedagem: ");
$valorDiarioAlimentcao = (float) readline("Informe o valor diario da alimentação: ");
$valorDiarioTransporte = (float) readline("Informe o valor diario do transporte: ");
$valorPasseio = (float) readline("Informe o valor do passeio: ");
echo "==================================================================" . PHP_EOL;


$totalPassagens = $pessoas * $valorPassagem;
$totalHospedagem = $valorDiaria * $dias;
$totalAlimentação = ($valorDiarioAlimentcao * $pessoas) * $dias;
$totalTransporte = $valorDiarioTransporte * $dias;
$totalPasseios = $valorPasseio * $pessoas;
$totalViagem = $totalPassagens + $totalHospedagem +
    $totalAlimentação + $totalTransporte + $totalPasseios;
$valorViajante = $totalViagem / $pessoas;

$codigoOrcamento = rand(1000, 9999);

//data
$data = date("d/m/y");


echo "==================================================================" . PHP_EOL;
echo "                             ORCAMENTO                            " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
echo "Codigo do orçamento                   : {$codigoOrcamento}" . PHP_EOL;
echo "Data                                  : {$data}" . PHP_EOL;
echo "Nome do cliente                       : {$nomeCliente}" . PHP_EOL;
echo "Trajeto                               : {$cidadeOrigem} até {$cidadeDestino}" . PHP_EOL;
echo "Quantidade de pessoas                 : {$pessoas}" . PHP_EOL;
echo "Quantidade de dias                    : {$dias}" . PHP_EOL;
echo "Valor total das passagens             : R$" . number_format($totalPassagens, 2, ",", ".") . PHP_EOL;
echo "Valor total da hospedagem             : R$" . number_format($totalHospedagem, 2, ",", ".") . PHP_EOL;
echo "Valor total da alimentação            : R$" . number_format($totalAlimentação, 2, ",", ".") . PHP_EOL;
echo "Valor total do transporte             : R$" . number_format($totalTransporte, 2, ",", ".") . PHP_EOL;
echo "Valor total dos passeios              : R$" . number_format($totalPasseios, 2, ",", ".") . PHP_EOL;
echo "Valor total da viagem                 : R$" . number_format($totalViagem, 2, ",", ".") . PHP_EOL;
echo "Valor por pessoa                      : R$" . number_format($valorViajante, 2, ",", ".") . PHP_EOL;
echo "==================================================================" . PHP_EOL;