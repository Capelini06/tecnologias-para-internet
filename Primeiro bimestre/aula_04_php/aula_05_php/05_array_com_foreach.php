<?php

$alunos = [];

$quantidade = (int) readline("Quantos alunos voce vai cadastrar? ");

for ($i = 0; $i < $quantidade; $i++) {
    $nome = readline("Nome do aluno:");
    $alunos[] = $nome;
}

echo"=================================================================". PHP_EOL;
echo"                         LISTA ALUNOS                            ". PHP_EOL;
echo"=================================================================". PHP_EOL;
foreach ($alunos as $aluno) {
    echo $aluno . PHP_EOL;
}