<?php

echo "===================================================================" . PHP_EOL;
echo "                    CLASSIFICAÇÃO ETÁRIA                           " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
$nome = readline("Insira o seu nome: ");
$idade = (int) readline("Insira a sua idade: ");

//Essa parte valida a idade e define a classificação
$classificacao;
if ($idade <= 0) {
    echo "Idade invalida" . PHP_EOL;
    ;
} elseif ($idade < 12) {
    $classificacao = "Criança";
} elseif ($idade > 12 && $idade <= 17) {
    $classificacao = "Adolescente";
} elseif ($idade >= 18 && $idade <= 59) {
    $classificacao = "Adulto";
} elseif ($idade >= 60) {
    $classificacao = "Idoso";
}

echo "===================================================================" . PHP_EOL;
echo "                        APRESENTAÇÃO                               " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Nome                  : {$nome}" . PHP_EOL;
echo "Idade                 : {$idade}" . PHP_EOL;
echo "Classificação         : {$classificacao}" . PHP_EOL;