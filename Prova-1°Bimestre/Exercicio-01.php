<?php

echo "================================================================" . PHP_EOL;
echo "                             TABUADA                            " . PHP_EOL;
echo "================================================================" . PHP_EOL;

$valor = (int) readline("Insira o valor que voce quer ver a tabuada:");
if ($valor > 0){
    for ($i = 1; $i<=10; $i++){
    $resultado = $valor * $i;
    echo "{$valor} * {$i} = {$resultado}" . PHP_EOL;
}
} else {
    echo "Valor invalido";
}