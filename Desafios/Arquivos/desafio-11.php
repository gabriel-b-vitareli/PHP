<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 | Reajustador de Preços</title>
</head>
<body>
    <h1>Reajustador de Preços</h1>
    <hr>

    <form action="" method="POST">
    <label for="preco">Preço Original do Produto: </label>
    <input type="number" name="preco" id="preco" step="0.01">
    <br>
    <label for="reajuste">Percentual de Reajuste: </label>
    <input type="number" name="reajuste" id="reajuste">
    <br>
    <input type="submit" value="Calcular">
    </form>

    <?php 
    if(isset($_POST['preco']) and isset($_POST['reajuste'])){
        $preco = $_POST['preco'];
        $reajuste = $_POST['reajuste'];

        $reajustado = $preco + ($preco * $reajuste) / 100;
        echo "<hr>O produto que custava R$$preco e sofreu um reajuste de $reajuste% agora custará <strong>R$$reajustado</strong>";
    }
    ?>
</body>
</html>