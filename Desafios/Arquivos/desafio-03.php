<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Includes/global.css">
    <title>Desafio 03 | Conversor de Moedas</title>
</head>
<body>
    <?php include '../Includes/header.php'?>
    <h1>Conversor de Moedas</h1>
    <hr>
    <form action="" method="POST">
        <label for="dolar">Valor do Dólar: </label>
        <input type="number" name="dolar" id="dolar" step="0.01">
        <br>
        <label for="real">Quantos reais converter?</label>
        <input type="number" name="real" id="real" step="0.01">
        <br>
        <input type="submit" value="Converter">
    </form>

    <?php 
    if(isset($_POST['real'])){
        $real = $_POST['real'];
        if(isset($_POST['dolar'])){
            $dolar = $_POST['dolar'];
        } else {
            $dolar = 5.10;
        }

    $convertido = round($real / $dolar,2);

    echo "R$$real reais equivalem a U$$convertido dólares.";
    }
    ?>
</body>
</html>