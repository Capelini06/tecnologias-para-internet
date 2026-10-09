<?php

// Verificar se o parametro nome foi enviado pela URL
if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
} else {
    $nome = "";
}

?>

<!DOCTYPE html>

<head>
    <title>Exemplo formulario com Get</title>
</head>

<body>
    <h1>Formulario com GET</h1>
    <form action="" method="GET">
        <label>
            Nome
        </label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>">
        <button type="submit">
            ENVIAR
        </button>
    </form>
    <?php 
        // Verifica se o nome foi informado
        if($nome != ""){
            echo "<h2>Ola meu querido, {$nome}!<h2>";
        }
    ?>
</body>