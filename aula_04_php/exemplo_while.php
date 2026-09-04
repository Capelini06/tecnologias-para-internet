<?php

// solicita ao usuario um numero inicial
$inicio = (int) readline("Insira um numero inicial: ");

// solicita ao usuario o numero final
$final = (int) readline("Insira o numero final: ");

// cria um contador começando pelo numero inicial
$contador = $inicio;

// enquanto o contador for menor ou igual ao numero final, o bloco sera repetido
while ($contador <= $final) {
    // exibe o valor atual do contador
    echo "Contador          : {$contador}" . PHP_EOL;

    // soma 1 ao contador
    $contador++;
}

echo"Fim da contagem :)". PHP_EOL;