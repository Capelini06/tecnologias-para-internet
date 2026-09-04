<?php

$numero = (int) readline("Insira um numero para ver a tabuada dele: ");

if ($numero < 1) {
    do {
    $numero = (int) readline("O numero deve ser maior doque 0: ");
    } while ($numero < 1);
}

for ($i = 1; $i <= 11; $i++) {
    $resultado = $numero * $contador;
    echo"{$i} * {$contador} = {$resultado}" . PHP_EOL;
    $contador++;
}