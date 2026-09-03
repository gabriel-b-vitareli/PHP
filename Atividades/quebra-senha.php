<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebrador de Senhas</title>
</head>
<body>
    <form action="" method='post'>
    <label for="senha">Senha:</label><br>
    <input type="password" name="senha" id="senha">
    <input type="submit" value="Enviar"><hr>
    </form>
    <?php 

        if(isset($_POST['senha'])){
            $senha = $_POST['senha'];
            $atual = 0;

        while($atual != $senha){
            echo "Tentativa de Senha: <i>$atual</i> <br>";
            $atual ++;
            }
            
        echo "<hr><strong>Senha quebrada: $senha</strong>";
        }

    ?>
</body>
</html>