<?php
// inicializando as variaveis
$produto = "";
$preco = "";
$quantidade = "";
$total = null;

// recebendo os dados do post
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

// Covertendo os valores numericos
$precoNumerico = (float) $preco;
$quantidadeNumerico = (int) $quantidade;

$total = $precoNumerico * $quantidadeNumerico;



?>

<!DOCTYPE html>

<head>
    <title>Exemplo formulario com POST</title>
</head>

<body>
    <h1>Calculadora de compras</h1>
    <form action="" method="POST">

        <label>
            Produto:
        </label>
        <input type="text" id="produto" name="produto" required>

        <br><br>

        <label>
            Preço:
        </label>
        <input type="number" id="preco" name="preco" step="0.01" required>

        <br><br>

        <label>
            Quantidade:
        </label>
        <input type="number" id="quantidade" name="quantidade" required>

        <br><br>

        <button type="submit">
            CALCULAR
        </button>
    </form>
    <?php
    echo "<h2>RESULTADO::</h2> <br><br>";
    echo "<h2>Produto: {$produto}</h2> <br><br>";
    if ($precoNumerico > 0 && $quantidadeNumerico > 0) {
        echo "<h2>Total: R$ " . number_format($total, 2, ",", ".") . "</h2> <br><br>";
    }
    
    ?>
</body>