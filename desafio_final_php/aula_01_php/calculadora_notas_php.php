<?php

echo "==================================================================" . PHP_EOL;
echo "                      CALCULADORA DE NOTAS                      " . PHP_EOL;
echo "==================================================================" . PHP_EOL;

$nomeAluno = readline("Informe o nome do aluno: ");
$nota1 = (float) readline("Informe a 1° nota: ");
$nota2 = (float) readline("Informe a 2° nota: ");
$nota3 = (float) readline("Informe a 3° nota: ");
$nota4 = (float) readline("Informe a 4° nota: ");

$somaNotas = $nota1 + $nota2 + $nota3 + $nota4;
$media = $somaNotas / 4;

echo PHP_EOL;

echo "==================================================================" . PHP_EOL;
echo "                          BOLETIM                                 " . PHP_EOL;
echo "==================================================================" . PHP_EOL;
echo "Nome do aluno: {$nomeAluno}" . PHP_EOL;
echo "1° nota do aluno: " . number_format($nota1, 1, ",", ".") . PHP_EOL;
echo "2° nota do aluno: " . number_format($nota2, 1, ",", ".") . PHP_EOL;
echo "3° nota do aluno: " . number_format($nota3, 1, ",", ".") . PHP_EOL;
echo "4° nota do aluno: " . number_format($nota4, 1, ",", ".") . PHP_EOL;
echo "Soma das nota do aluno: " . number_format($somaNotas, 1, ",", ".") . PHP_EOL;
echo "Media do aluno: " . number_format($media, 1, ",", ".") . PHP_EOL;
echo "==================================================================" . PHP_EOL;