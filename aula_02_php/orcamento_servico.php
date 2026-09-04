<?php

$codigoOrcamento = rand(1000, 9999);
$data = date("d/m/y");
echo "==================================================================" . PHP_EOL;
echo "                         DADOS DO CLIENTE                         " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$nomeCliente = readline("Informe o seu nome: ");
$telefoneCliente = readline("Informe o seu telefone: ");
echo "==================================================================" . PHP_EOL;


echo "==================================================================" . PHP_EOL;
echo "                         DADOS DO VEICULO                         " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$modeloveículo = readline("Informe o modelo do veiculo: ");
$marca = readline("Informe a marca: ");
$ano = (int) readline("Informe o ano: ");
$placa = (int) readline("Informe a placa: ");
$quilometragem = (int) readline("Informe a quilometragem: ");
echo "==================================================================" . PHP_EOL;


echo "==================================================================" . PHP_EOL;
echo "                         DADOS DE SERVIÇO                        " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$descriçãoServiço = readline("Descrição do seriviço: ");
$valorHora = (float) readline("Informe o valor do serviço: ");
$quantidadeHoras = (int) readline("Informe a quantidade de horas do serviço: ");
$ValorMãoObra = $valorHora * $quantidadeHoras;
echo "==================================================================" . PHP_EOL;


echo "==================================================================" . PHP_EOL;
echo "                         DADOS DAS PEÇAS                         " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$nomePeCa = readline("Nome da peça: ");
$valorUnitario = (float) readline("Informe o valor unitario da peça: ");
$quantidade = (int) readline("Informe a quantidade de peças: ");

$Custopecas = $valorUnitario * $quantidade;
echo "==================================================================" . PHP_EOL;


echo "==================================================================" . PHP_EOL;
echo "                         DADOS DE MATERIAS ADICIONAIS                    " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
$materiasAdicionais = readline("Materiais adicionais: ");
$valoAdicional = (float) readline("Informe o valor dos materiais adicionais: ");
echo "==================================================================" . PHP_EOL;


// calculo valor total
$custoTotal = $valoAdicional + $ValorMãoObra + $Custopecas;
$custoParcelado = $custoTotal / 3;
echo "==================================================================" . PHP_EOL;
echo "                           COMPROVANTE                          " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
echo "Codigo do orçamento                        : {$codigoOrcamento}" . PHP_EOL;
echo "Data                                       : {$data}" . PHP_EOL;
echo "Nome do cliente                            : {$nomeCliente}" . PHP_EOL;
echo "Telefone do cliente                        : {$telefoneCliente}" . PHP_EOL;
echo "Modelo do veiculo                          : {$modeloveículo}" . PHP_EOL;
echo "Marca do veiculo                           : {$marca}" . PHP_EOL;
echo "Ano do veiculo                             : {$ano}" . PHP_EOL;
echo "Placa do veiculo                           : {$placa}" . PHP_EOL;
echo "Quilometragem do veiculo                   : {$quilometragem}" . PHP_EOL;
echo "Descrição do serviço                       : {$descriçãoServiço}" . PHP_EOL;
echo "Valor da mão de obra                       : R$ " . number_format($ValorMãoObra, 2, ",", ".") . PHP_EOL;
echo "Valor das peças adicionais                 : R$ " . number_format($valoAdicional, 2, ",", ".") . PHP_EOL;
echo "Valor total                                : R$ " . number_format($custoTotal, 2, ",", ".") . PHP_EOL;
echo "Valor parcelado em 3 vezes                 : R$ " . number_format($custoParcelado, 2, ",", ".") . PHP_EOL;
echo "==================================================================" . PHP_EOL;        