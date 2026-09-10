<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05 | Analisar Número Real</title>
</head>
<body>
    <h1>Analisar Número Real</h1>

    <form action="" method="POST">
        <label for="numero">Insira um número real: </label>
        <input type="number" name="numero" id="numero" step="0.001">
        <br>
        <input type="submit" value="Analisar">
    </form>

    <?php 
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        
    }

    ?>
</body>
</html>