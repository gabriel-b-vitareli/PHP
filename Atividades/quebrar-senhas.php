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
        
        // Easter Egg
        if($senha == 150){
            echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.2323752704206!2d-47.304921!3d-22.756755999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c899e923df3883%3A0x5b4229e39f71fc4b!2sR.%20J%C3%BApiter%2C%20150%20-%20Jardim%20Alvorada%2C%20Americana%20-%20SP%2C%2013479-160!5e0!3m2!1spt-BR!2sbr!4v1787082719342!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>';
        }else{
            while($atual != $senha){
                echo "Tentativa de Senha: <i>$atual</i> <br>";
                $atual ++;
                }
            
            echo "<hr><strong>Senha quebrada: $senha</strong>";
            }
        }

    ?>
</body>
</html>