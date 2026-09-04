<?php

$numero = (int) readline("Insira um numero: ");

if ($numero < 1) {
    do {
    $numero = (int) readline("O numero deve ser maior doque 0: ");
    } while ($numero < 1);
}

$acumuladora = 0;

for ($i = 0; $i <= $numero; $i++) {
    $acumuladora = $acumuladora + $i;
    echo"{$acumuladora}" . PHP_EOL;
    }


echo"{$acumuladora}";