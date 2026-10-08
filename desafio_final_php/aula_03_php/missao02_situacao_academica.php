<?php

echo "===================================================================" . PHP_EOL;
echo "                     CALCULADORA DE NOTAS                          " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
$aluno = readline("Qual o nome do aluno:");
$nota1 = (float) readline("Qual a primeira nota do aluno:");
$nota2 = (float) readline("Qual a segunda nota do aluno:");
$frequencia = (int) readline("Qual a frequencia do aluno:");

$media = ($nota1 + $nota2) / 2;

$situacao;

// valida a aprovação
if ($frequencia < 75) {
    $situacao = "Reprovado por frequencia";
} elseif ($media >= 7) {
    $situacao = "Aprovado";
} elseif ($media < 7 && $media >= 4) {
    $situacao = "Em recuperação";
} else {
    $situacao = "Reprovado por nota";
}

echo "===================================================================" . PHP_EOL;
echo "                        APRESENTAÇÃO                               " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Nome          : {$aluno}" . PHP_EOL;
echo "Nota 1        : " . number_format($nota1, 2, ",", ".") . PHP_EOL;
echo "Nota 2        : " . number_format($nota2, 2, ",", ".") . PHP_EOL;
echo "Media         : " . number_format($media, 2, ",", ".") . PHP_EOL;
echo "Situação      : {$situacao}" . PHP_EOL;