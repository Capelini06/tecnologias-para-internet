<?php

echo "================================================================" . PHP_EOL;
echo "                         CALCULADORA                            " . PHP_EOL;
echo "================================================================" . PHP_EOL;
do {
    $valor1 = (int) readline("Insira o primeiro valor: ");
} while ($valor1 <= 0 && $valor1 >= 0);

do {
    $valor2 = (int) readline("Insira o segundo valor: ");
} while ($valor2 <= 0 && $valor2 >= 0);

do {
    $operacao = readline("Escolha a operação que voce quer fazer(+, -, *, /): ");
    if ($operacao === "+" || $operacao === "-" || $operacao === "*" || $operacao === "/") {
        break;
    }
} while (true);





if ($operacao === "+") {
    $resultado = $valor1 + $valor2;
    echo "{$valor1} + {$valor2} = {$resultado}";
} else if ($operacao === "-") {
    $resultado = $valor1 - $valor2;
    echo "{$valor1} - {$valor2} = {$resultado}";
} else if ($operacao === "*") {
    $resultado = $valor1 * $valor2;
    echo "{$valor1} * {$valor2} = {$resultado}";
} else if ($operacao === "/") {
    if ($valor2 != 0) {
        $resultado = $valor1 / $valor2;
        echo "{$valor1}/{$valor2} = {$resultado}";
    } else {
        echo "Divisão por 0 detectada, impossivel prosseguir.";
    }
}

