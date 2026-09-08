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