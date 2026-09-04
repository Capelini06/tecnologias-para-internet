<?php
$numero = (int) readline("Insira um numero:");

if ($numero < 1) {
    do {
    $numero = (int) readline("O numero deve ser maior doque 0:");
    } while ($numero < 1);
}
$contador = 1;

while($contador <= $numero) {
    echo"{$contador}" . PHP_EOL;
    $contador++;
}