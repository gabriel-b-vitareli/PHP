<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 | Número Antecessor e Sucessor</title>
</head>
<body>
    <!-- Formulário para receber o número escolhido pelo usuário: -->
    <form action="" method="POST">
    <label for="numero">Digite um número:<br></label>
    <input type="number" name="numero" id="numero">
    <input type="submit" value="Enviar">
    </form>

    <?php 
    // Quando o número do usuário for enviado/setado, ele executa o código:
    if(isset($_POST['numero'])){
        $numero = $_POST['numero']; // Guarda o número enviado pelo usuário na variável numero, apenas por organização de código

        echo "<h3>Número Selecionado: $numero</h3><hr>"; // Printa o próprio número escolhido pelo usuário

        echo "<strong>Antecessor: </strong>" .$numero -1 ."<br>"; // Printa o número - 1 (ou seja, antecessor)

        echo "<strong>Sucessor: </strong>" .$numero +1; // Printa o número + 1 (ou seja, sucessor)
    }
    ?>

</body>
</html>