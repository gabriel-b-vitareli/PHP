<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Includes/global.css">
    <title>Desafio 06 | Anatomia de Divisão</title>
</head>
<body>
    <?php include '../Includes/header.php'?>
    <h1>Anatomia de Divisão</h1>
    <hr>
    <form action="" method="POST">
        <label for="dividendo">Dividendo: </label>
        <input type="number" name="dividendo" id="dividendo">
        <br>
        <label for="divisor">Divisor: </label>
        <input type="number" name="divisor" id="divisor">
        <br>
        <input type="submit" value="Analisar">
    </form>

    <?php 
    
    if(isset($_POST['dividendo']) and isset($_POST['divisor'])){
        $dividendo = $_POST['dividendo'];
        $divisor = $_POST['divisor'];

        echo "<hr><h1>Estrutura da Divisão:</h1>";
        echo "<br>Resultado da divisão: " .$dividendo/$divisor;
        echo "<br>Dividendo: $dividendo";
        echo "<br>Divisor: $divisor";
        echo "<br>Quociente: " .intdiv($dividendo,$divisor);
        echo "<br>Sobra: " . $dividendo % $divisor;
    }

    ?>
</body>
</html>