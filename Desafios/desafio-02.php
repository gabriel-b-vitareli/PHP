<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 | Sorteio de Número Aleatório</title>
</head>
<body>
    <h1>Sorteio de Número Aleatório</h1>
    <hr>
    <!-- Gerando um número aleatório com PHP usando a função rand(): -->
    <?php 
    $escolhido = rand(1,16); // Gera um número aleatório entre 1 e 100 e guarda na variável "escolhido"

    echo "O número escolhido foi: <strong>$escolhido</strong>"; // Printa o numero escolhido
    ?>

    <!-- Botão de formulário que "recarrega" a página automaticamente e "reescolhe" o número aleatório: -->
    <form action="" method="POST">
        <br>
        <input type="submit" value="Sortear Novamente">
    </form>
</body>
</html>