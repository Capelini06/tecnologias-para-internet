<?php

$alunos = [];

$quantidade = (int) readline("Quantos alunos voce vai cadastrar? ");

for ($i = 0; $i < $quantidade; $i++) {
    $nome = readline("Nome do aluno:");
    $alunos[] = $nome;
}

for ($i = 0; $i < $quantidade; $i++) {
    echo $alunos[$i] . PHP_EOL;
}