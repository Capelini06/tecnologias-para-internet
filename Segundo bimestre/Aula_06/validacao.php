    <!--
        ETAPA 01 -> Criação do formulario
        ETAPA 02 -> Criar as variaveis
        ETAPA 03 -> Detecção do formulário via POST
        ETAPA 04 -> Receber as informações e limpar os dados
        ETAPA 05 -> Fazer as validações
        ETAPA 06 -> Prepara e envia a mensagem de sucesso **De forma segura**
        ETAPA 07 -> Devolve os valores para o HTML
    -->

<?php 

// variavéis da aplicação
$nome = "";
$email = "";
$idade = "";

// Variavel responsavel para validar o erro encontrado no formulario
$mensagem = "";

//Verifica se o usuario clicou no botão de cadastrar
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    //Removendo espaços do inicio ou final da variavel
    //Transformando o valor que vem como string em int
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $idade = (int) ($_POST["idade"] ?? "");

    //Valida se nome foi prenchida
    if($nome === ""){
        $mensagem = "Campo nome é obrigatorio!!";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $mensagem = "Informe um email valido!!";
    } else if ($idade <= 0) {
        $mensagem = "Informe uma idade maior que 0!!";
    }else {
        $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
        $emailSeguro = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
        $idadeSeguro = htmlspecialchars($idade, ENT_QUOTES, "UTF-8");
        $mensagem = "Cadastro realizado!!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulario</title>
</head>
<body>
    
    <h1>CADASTRO DE USUARIOS</h1>

    <form method="POST">
        <label for="nome">NOME:</label>
        <input  type="text"
                id="nome"
                name="nome">

        <br><br>

        <label for="email">EMAIL:</label>
        <input  type="text"
                id="email"
                name="email">   
                
        <br><br>

        <label for="idade">IDADE:</label>
        <input  type="number"
                id="idade"
                name="idade"> 

        <br><br>
        
        <button type="submit">CADASTRAR</button>
    </form>

    <?php 
    if($mensagem !== ""){
        echo "<p>{$mensagem}</p>";
    }
    ?>
</body>
</html>