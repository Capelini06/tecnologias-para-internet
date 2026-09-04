<?php

$qtaAlunos = (int) readline("Insira a quantidade de alunos: ");
$maiorNota = 0;
$menorNota = 100;
$aprovados = 0;
$reprovados = 0;
$somaNotas = 0;
for ($i = 0; $i < $qtaAlunos; $i++) {
    $nome = readline("Insira o nome do aluno: ") . PHP_EOL;
    $nota = (float) readline("Insira a nota do aluno: ") . PHP_EOL;
    if ($maiorNota < $nota) {
        $maiorNota = $nota;
    }

    if ($menorNota > $nota) {
        $menorNota = $nota;
    }

    if ($nota >= 70) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    $somaNotas = $somaNotas + $nota;
}
$media = $somaNotas / $qtaAlunos;
echo "Media geral dos alunos                 : " . number_format($media, 2, ",", ".") . PHP_EOL;
echo "Maior nota                             : " . number_format($maiorNota, 2, ",", ".") . PHP_EOL;
echo "Menor nota                             : " . number_format($menorNota, 2, ",", ".") . PHP_EOL;
echo "Quantidades de alunos reprovados       : {$aprovados}" . PHP_EOL;
echo "Quantidades de alunos aprovados        : {$reprovados}" . PHP_EOL;