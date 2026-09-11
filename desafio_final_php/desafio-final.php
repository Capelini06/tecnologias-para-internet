<?php

$codigo = rand(1000, 999999);
$data = date("d/m/Y");

$qtaProdutosDiferentes = 0;
$qtaTotalUnidades = 0;
$valorBrutoCompra = 0;
$produtoMaiorPreco = null;
$produtoMenorPreco = null;
$produtos = [];
$clientes = [];
$desconto = 0;
$formaPagamento = '';
$valorTotal = 0;

function exibirCabecalho()
{
    echo "==============================================" . PHP_EOL;
    echo "                  LOJA SENAC                  " . PHP_EOL;
    echo "==============================================" . PHP_EOL;
}

function inserirInformacoesClientes(&$clientes)
{
    echo "==============================================" . PHP_EOL;
    echo "                   CLIENTES                   " . PHP_EOL;
    echo "==============================================" . PHP_EOL;
        $nome = trim(readline("Digite o nome do cliente (ou 'ENCERRAR' para encerrar): "));

        do {
            $idade = (int) readline("Digite a idade do cliente: ");
            if ($idade <= 0) {
                echo "Idade inválida. Digite um valor maior que zero." . PHP_EOL;
            }
        } while ($idade <= 0);

        $classificacao = trim(readline("Digite a classificação do cliente: "));

        $clientes[] = [
            'nome' => $nome,
            'idade' => $idade,
            'classificacao' => $classificacao
        ];
    }


function inserirInformacoesProdutos(&$produtos, &$qtaProdutosDiferentes, &$qtaTotalUnidades)
{
    echo "==============================================" . PHP_EOL;
    echo "                   PRODUTOS                   " . PHP_EOL;
    echo "==============================================" . PHP_EOL;

    while (true) {
        $nome = trim(readline("Digite o nome do produto (ou 'ENCERRAR' para encerrar): "));

        if (strtoupper($nome) === "ENCERRAR") {
            break;
        }

        $categoria = trim(readline("Digite a categoria do produto: "));

        do {
            $preco = (float) readline("Digite o preço do produto: ");
            if ($preco <= 0) {
                echo "Preço inválido. Digite um valor maior que zero." . PHP_EOL;
            }
        } while ($preco <= 0);

        do {
            $qta = (int) readline("Digite a quantidade de unidades do produto: ");
            if ($qta <= 0) {
                echo "Quantidade inválida. Digite um valor maior que zero." . PHP_EOL;
            }
        } while ($qta <= 0);

        $qtaTotalUnidades += $qta;
        $qtaProdutosDiferentes++;

        $valorPorProduto = $preco * $qta;

        $produtos[] = [
            'nome' => $nome,
            'categoria' => $categoria,
            'preco' => $preco,
            'quantidade' => $qta,
            'valor' => $valorPorProduto
        ];
    }
}

function inserirFormaPagamento()
{
    return trim(readline("Forma de pagamento: "));
}

function calcularValorBrutoCompra($produtos)
{
    $valorBrutoCompra = 0;

    foreach ($produtos as $produto) {
        $valorBrutoCompra += $produto['valor'];
    }

    return $valorBrutoCompra;
}

function encontrarProdutoMaiorPreco($produtos)
{
    $produtoMaiorPreco = null;

    foreach ($produtos as $produto) {
        if ($produtoMaiorPreco === null || $produto['preco'] > $produtoMaiorPreco['preco']) {
            $produtoMaiorPreco = $produto;
        }
    }

    return $produtoMaiorPreco;
}

function encontrarProdutoMenorPreco($produtos)
{
    $produtoMenorPreco = null;

    foreach ($produtos as $produto) {
        if ($produtoMenorPreco === null || $produto['preco'] < $produtoMenorPreco['preco']) {
            $produtoMenorPreco = $produto;
        }
    }

    return $produtoMenorPreco;
}

function descontoPorValor($valorBrutoCompra)
{
    if ($valorBrutoCompra > 1000) {
        return 0.15;
    } elseif ($valorBrutoCompra > 500) {
        return 0.10;
    } elseif ($valorBrutoCompra > 200) {
        return 0.05;
    }

    return 0;
}

function descontoPorClassificacao($clientes)
{
    foreach ($clientes as $cliente) {
        if (strtoupper($cliente['classificacao']) === 'PREMIUM') {
            return 0.03;
        }
    }

    return 0;
}

function descontoPorIdade($clientes)
{
    foreach ($clientes as $cliente) {
        if ($cliente['idade'] > 65) {
            return 0.02;
        }
    }

    return 0;
}

function descontoPorFormaPagamento($formaPagamento)
{
    if (strtoupper($formaPagamento) === 'PIX') {
        return 0.02;
    }

    return 0;
}

function calcularDescontoTotal($valorBrutoCompra, $clientes, $formaPagamento)
{
    $desconto = 0;
    $desconto += descontoPorValor($valorBrutoCompra);
    $desconto += descontoPorClassificacao($clientes);
    $desconto += descontoPorIdade($clientes);
    $desconto += descontoPorFormaPagamento($formaPagamento);

    return $desconto;
}

function calcularValorFinal($valorBrutoCompra, $desconto)
{
    return $valorBrutoCompra - ($valorBrutoCompra * $desconto);
}

function exibirResumo(
    $codigo,
    $data,
    $qtaProdutosDiferentes,
    $qtaTotalUnidades,
    $valorBrutoCompra,
    $produtoMaiorPreco,
    $produtoMenorPreco,
    $desconto,
    $valorFinal
) {
    echo "==================================================" . PHP_EOL;
    echo "                 RESUMO DA VENDA                  " . PHP_EOL;
    echo "==================================================" . PHP_EOL;
    echo "Codigo da compra: " . $codigo . PHP_EOL;
    echo "Data da compra: " . $data . PHP_EOL;
    echo "Quantidade de produtos diferentes: " . $qtaProdutosDiferentes . PHP_EOL;
    echo "Quantidade total de unidades: " . $qtaTotalUnidades . PHP_EOL;
    echo "Valor bruto da compra: R$ " . number_format($valorBrutoCompra, 2, ",", ".") . PHP_EOL;

    if ($produtoMaiorPreco !== null) {
        echo "Produto com maior preço: " . $produtoMaiorPreco['nome'] . " - R$ "
            . number_format($produtoMaiorPreco['preco'], 2, ",", ".") . PHP_EOL;
    }

    if ($produtoMenorPreco !== null) {
        echo "Produto com menor preço: " . $produtoMenorPreco['nome'] . " - R$ "
            . number_format($produtoMenorPreco['preco'], 2, ",", ".") . PHP_EOL;
    }

    echo "Desconto aplicado: " . number_format($desconto * 100, 0, ",", ".") . "%" . PHP_EOL;
    echo "Valor concedido de desconto: R$ " . number_format($valorBrutoCompra * $desconto, 2, ",", ".") . PHP_EOL;
    echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ",", ".") . PHP_EOL;
}

exibirCabecalho();

inserirInformacoesClientes($clientes);
inserirInformacoesProdutos($produtos, $qtaProdutosDiferentes, $qtaTotalUnidades);

$formaPagamento = inserirFormaPagamento();

$produtoMaiorPreco = encontrarProdutoMaiorPreco($produtos);
$produtoMenorPreco = encontrarProdutoMenorPreco($produtos);
$valorBrutoCompra = calcularValorBrutoCompra($produtos);
$desconto = calcularDescontoTotal($valorBrutoCompra, $clientes, $formaPagamento);
$valorTotal = calcularValorFinal($valorBrutoCompra, $desconto);

exibirResumo(
    $codigo,
    $data,
    $qtaProdutosDiferentes,
    $qtaTotalUnidades,
    $valorBrutoCompra,
    $produtoMaiorPreco,
    $produtoMenorPreco,
    $desconto,
    $valorTotal
);