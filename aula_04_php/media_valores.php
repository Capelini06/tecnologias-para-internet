<?php
$quantidade = 0;
$acumulador = 0;
while (true) {
    $numero = (int) readline("Insira um valor: ");
    if ($numero == 0) {
        break;
    }
    $quantidade++;
    $acumulador = $acumulador + $numero;
}

if ($quantidade == 0) {
    echo "Quantidade de valores inseridos insuficientes." . PHP_EOL;
} else {
    echo "Quantidade de valores inseridos       : {$quantidade}" . PHP_EOL;
    echo "Soma dos valores inseridos            : {$acumulador}" . PHP_EOL;
    $media = $acumulador / $quantidade;
    echo "Media dos valores inseridos           : " . number_format($media, 2, ",", ".") . PHP_EOL;
}
