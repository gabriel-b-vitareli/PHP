<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
    <div align = "center">
    <form action="" method="POST">
        <!-- Input para o Nome: -->
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>

        <!-- Input para a Idade: -->
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade"><br>

        <!-- Input para a Senha: -->
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha"><br>

        <!-- Botão de Enviar: -->
        <input type="submit" value="Enviar">
    </form>
    </div>

    <?php 
    // if que verifica se há dados nas três variáveis antes de prosseguir, assim evitando erro de variáveis indefinidas:
    if (isset($_POST['nome']) and isset($_POST['idade']) and isset($_POST['senha'])) {

        // Variáveis:
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $senha = $_POST['senha'];
        
        // Exibe o resultado de forma limpa
        echo "<hr><p>Olá, <strong>$nome</strong>!<hr>"; 
        echo "Idade: <strong>$idade</strong><br>"; 
        echo "Senha: <strong>$senha</strong><br>"; 
        }
    ?>

</body>
</html>