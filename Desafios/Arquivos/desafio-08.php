<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Includes/global.css">
    <title>Desafio 08 | Cálculo de Raízes</title>
</head>
<body>
    <?php include '../Includes/header.php'?>
    <h1>Cálculo de Raízes</h1>
    <hr>
    <form action="" method="POST">
        <label for="raiz">Número: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular Raízes">
    </form>

    <?php 
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        echo "<h1>Raízes:</h1>";
        echo "A raíz quadrada de <strong>$numero</strong> é: <strong>" .$numero**0.5 ."</strong><br>";
        echo "A raíz cúbica de <strong>$numero</strong> é: <strong>" .$numero**(1/3) ."</strong><br>";
    }
    ?>
</body>
</html>