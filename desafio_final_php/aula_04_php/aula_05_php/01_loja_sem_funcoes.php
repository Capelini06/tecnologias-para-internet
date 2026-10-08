<?php

echo "===================================================================" . PHP_EOL;
echo "                         LOJA SENAC                                " . PHP_EOL;
echo "===================================================================" . PHP_EOL;

/*
    Armazenamento de variaveis
        -Produto
        -Preço
        -Quantidade
    
        subTotal = preço * quantidade

        Se o valor for maior ou igual a 500,00 -> 10% de desconto
        Se for menor sem desconto

        total = subTotal - desconto
*/

$produto        = readline("Insira o nome do produto: ");
$preco          = (float) readline("Insira o preço do produto: ");
$quantidade     = (int) readline("Insira a quantidade: ");

$subTotal = $preco * $quantidade;

if ($subTotal >= 500) {
    $desconto = $subTotal * 0.10;
}
else {
    $desconto = 0;
}

$total = $subTotal - $desconto;


echo "===================================================================" . PHP_EOL;
echo "                       RELATORIO VENDA                             " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Produto: {$produto}". PHP_EOL; 
echo "Quantidade: {$quantidade}". PHP_EOL; 
echo "Valor sem desconto: ". number_format($subTotal, 2 , ",", ".") . PHP_EOL; 
echo "Desconto: ". number_format($desconto, 2 , ",", ".") . PHP_EOL; 
echo "Valor total: ". number_format($total, 2 , ",", ".") . PHP_EOL; 
echo "===================================================================" . PHP_EOL;