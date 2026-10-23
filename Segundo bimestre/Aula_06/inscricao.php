<?php
$nome = "";
$email = "";
$cidade = "";
$idade = "";
$curso = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $cidade = trim($_POST["cidade"] ?? "");
    $idade = (int) ($_POST["idade"] ?? "");
    $curso = trim($_POST["cursos"] ?? "");


    if ($nome === "") {
        $mensagem = "O campo nome está vazio!!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "E-mail vazio ou invalido!!";
    } else if ($idade < 16) {
        $mensagem = "Você deve ter 16 anos ou mais!!";
    } else if ($cidade === "") {
        $mensagem = "O campo cidade está vazio!!";
    } else if ($curso === "") {
        $mensagem = "Nenhum curso selecionado!!";
    } else {
        $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
        $emailSeguro = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
        $cidadeSeguro = htmlspecialchars($cidade, ENT_QUOTES, "UTF-8");
        $idadeSeguro = htmlspecialchars($idade, ENT_QUOTES, "UTF-8");
        $cursoSeguro = htmlspecialchars($curso, ENT_QUOTES, "UTF-8");
        $mensagem = "Inscrição realizada com sucesso!!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrição Eventos</title>
</head>

<body>
    <h1>IINCRIÇÃO PARA EVENTO</h1>
    <form method="POST">
        <label for="nome">NOME: </label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($nome) ?>">

        <br><br>

        <label for="email">E-MAIL: </label>
        <input type="text" name="email" id="email" value="<?= htmlspecialchars($email) ?>">

        <br><br>

        <label for="idade">IDADE: </label>
        <input type="number" name="idade" id="idade" value="<?= htmlspecialchars($idade) ?>">

        <br><br>

        <label for="cidade">CIDADE: </label>
        <input type="text" name="cidade" id="cidade" value="<?= htmlspecialchars($cidade) ?>">

        <br><br>

        <label for="cursos">CURSO: </label>
        <select name="cursos" id="cursos-select">
            <option value="">--Por favor escolha um curso--</option>
            <option value="dog">Desenvolvimento Web</option>
            <option value="cat">Banco de Dados</option>
            <option value="hamster">Inteligência Artificial</option>
        </select>

        <br><br>

        <button type="submit">CADASTRAR</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<p><strong>{$mensagem}</strong></p>";
    }
    ?>
</body>

</html>