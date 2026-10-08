<?php

// solicita ao usuario quantas repetições deseja executar
$quantidade = (int) readline("Quantas vezes voce deseja repetir?: ");
 
/*
o for possui tres partes
    1. $i = i => valor inicial do contador
    2. i <= quantidade => condição para continuar
    3. i++ => incremento realizado no final de cada repretição
*/

for ($i = 0; $i <= $quantidade; $i++) {
        echo" Repetição numero {$i}" . PHP_EOL;
}

echo "Concluido" . PHP_EOL;
 