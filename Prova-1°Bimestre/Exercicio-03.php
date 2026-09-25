<?php

function pegarId()
{
    return rand(0, 100000000000);
}

function pegarData()
{
    return date("d/m/Y");
}

function inserirNome()
{
    return readline("Insira o seu nome: ");
}

function inserirQta()
{
    do {
       $qta = (int) readline("Quantas culturas você quer adicionar: ");
    } while ($qta <= 0);
     return $qta;
}

function inserirCulturas($qtaCulturas, &$cultura)
{
    for ($i = 1; $i <= $qtaCulturas; $i++) {

        $nomeCultura = readline("Insira o nome da cultura: ");

        do {
            $qtaKg = (float) readline("Insira a quantidade produzida da colheita em quilogramas: ");
        } while ($qtaKg<0);

        do {
             $valor = (float) readline("Qual o valor estimado de venda por quilograma? ");
        } while ($valor<0);

        if ($qtaKg <= 0 || $valor <= 0) {

            $validade = "Invalido";

            echo "Quantidade ou valor inválido. A cultura será registrada como inválida." . PHP_EOL;

        } else {

            $validade = "valido";
        }

        $cultura[] = [
            'nome' => $nomeCultura,
            'Kg' => $qtaKg,
            'valor' => $valor,
            'validade' => $validade
        ];
    }
}

function calcularKg($culturas)
{
    $totalKg = 0;

    foreach ($culturas as $cultura) {
        $totalKg += $cultura['Kg'];
    }

    return $totalKg;
}

function calcularValores($culturas)
{
    $culturasValida = 0;
    $culturasInvalidas = 0;
    $valorTotal = 0;

    foreach ($culturas as $cultura) {

        if ($cultura['validade'] === "valido") {

            $culturasValida++;

            $valorProd = $cultura['Kg'] * $cultura['valor'];

            $valorTotal += $valorProd;

        } else {

            $culturasInvalidas++;
        }
    }

    return [
        'valorTotal' => $valorTotal,
        'culturasValidas' => $culturasValida,
        'culturasInvalidas' => $culturasInvalidas
    ];
}

function classificacao($valorTotal)
{
    if ($valorTotal < 5000) {

        return "Pequeno Porte";

    } else if ($valorTotal < 20000) {

        return "Medio Porte";

    } else {

        return "Grande Porte";
    }
}

function Resultado($id,$data, $nome, $culturasValida, $culturasInvalida, $totalKg, $valorTotal, $classificacao) {
    echo "================================================================" . PHP_EOL;
    echo "                         CALCULADORA                            " . PHP_EOL;
    echo "================================================================" . PHP_EOL;

    echo "Codigo da colheita                    : {$id}" . PHP_EOL;
    echo "Data                                  : {$data}" . PHP_EOL;
    echo "Responsavel pela colheita             : {$nome}" . PHP_EOL;
    echo "Quantidade de culturas validas        : {$culturasValida}" . PHP_EOL;
    echo "Quantidade de culturas invalidas      : {$culturasInvalida}" . PHP_EOL;
    echo "Quantidade de quilos totais produzidos: {$totalKg}" . PHP_EOL;
    echo "Valor total estimado da colheita      : R$". number_format($valorTotal, 2, ",", ".") . PHP_EOL;
    echo "Classificacao                         : {$classificacao}" . PHP_EOL;
}

$cultura = [];
$id = pegarId();
$data = pegarData();
$nome = inserirNome();
$qtaCulturas = inserirQta();
inserirCulturas($qtaCulturas, $cultura);
$totalKg = calcularKg($cultura);
$resultado = calcularValores($cultura);
$valorTotal = $resultado['valorTotal'];
$culturasValida = $resultado['culturasValidas'];
$culturasInvalida = $resultado['culturasInvalidas'];
$classificacao = classificacao($valorTotal);
Resultado($id, $data, $nome, $culturasValida, $culturasInvalida, $totalKg, $valorTotal, $classificacao);
