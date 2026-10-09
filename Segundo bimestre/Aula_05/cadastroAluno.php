<?php 

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
} else {
    $nome = "";
}

if (isset($_POST["idade"])) {
    $idade = $_POST["idade"];
} else {
    $idade = "";
}

if (isset($_POST["curso"])) {
    $curso = $_POST["curso"];
} else {
    $curso = "";
}

$idadeConv = (int) $idade;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<body>
    <form action="" method="post">
        <label>NOME:</label>
        <input  type="text"
                name="nome"
                id="nome"
                required
                value="<?= $nome ?>">
        <br><br>

        <label>IDADE:</label>
        <input  type="number"
                name="idade"
                id="idade"
                required
                value="<?= $idade ?>">
        <br><br>

        <label>CURSO:</label>
        <input  type="text"
                name="curso"
                id="curso"
                required
                value="<?= $curso ?>">
        <br><br>
        <button type="submit">
            CADASTRAR
        </button>
    </form>
    <?php 
        if($idade <= 0){
            echo "<h2>Idade igual ou menor a 0, insira um valor valido</h2>";
        } else {
            echo "<h2>ALUNO CADASTRADO</h2>";
            echo "<h3>NOME: {$nome}</h3>";
            echo "<h3>IDADE: {$idadeConv}</h3>";
            echo "<h3>CURSO: {$curso}</h3>";
        }
    ?>
</body>
</html>