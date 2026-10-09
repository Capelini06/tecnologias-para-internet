<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
} else {
    $nome = "";
}

if (isset($_POST["nota1"])) {
    $nota1 = $_POST["nota1"];
} else {
    $nota1 = "";
}

if (isset($_POST["nota2"])) {
    $nota2 = $_POST["nota2"];
} else {
    $nota2 = "";
}

$nota1Conv = (float) $nota1;
$nota2Conv = (float) $nota2;

$media = ($nota1Conv + $nota2Conv) / 2;

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de media</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nome</label>
        <input  type="text" 
                id="nome" 
                name="nome" 
                required 
                value="<?= $nome ?>">

        <br><br>

        <label for="">Primeira nota</label>
        <input  type="number" 
                id="nota1"
                name="nota1" 
                required 
                value="<?= $nota1 ?>">
        <br><br>

        <label for="">Segunda nota</label>
        <input  type="number" 
                id="nota2"
                name="nota2" 
                required 
                value="<?= $nota2 ?>">
        <br><br>

        <button type="submit">CADASTRAR</button>
    </form>
    <?php 
    echo "<h2>RESULTADO</h2>";
    if(($nota1 >= 0 && $nota1 <= 10) && ($nota2 >= 0 && $nota2 <= 10)){
        echo "<h2>Nome: {$nome}</h2>";
        echo "<h2>Media: {$media}</h2>";
        if ($media >= 7) {
            echo "<h2>Situação: Aprovado</h2>";
        } else {
            echo "<h2>Situação: Reprovado</h2>";
        }
    } else {
        echo "<h2>Notas invalidas inseridas. Insira um valor maior que 0 e menor que 10</h2>";
    }
    ?>
</body>

</html>