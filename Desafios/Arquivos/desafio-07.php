<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Includes/global.css">
    <title>Desafio 07 | Analisador de Salário</title>
</head>
<body>
    <?php include '../Includes/header.php'?>
    <h1>Analisador de Salário</h1>
    <hr>
    <form action="" method="POST">
        <label for="salario">Salário: </label><br>
        <input type="number" name="salario" id="salario" step="0.01">
        <input type="submit" value="Analisar">
        <br>
        <small>Considerando salário mínimo = R$1621,00</small>
    </form>
    <hr>
    <?php 
    if(isset($_POST['salario'])){
        $salario = $_POST['salario'];
        
        if ($salario > 1621){
            $totalSalarios = intdiv($salario,1621);
            $sobra = ($salario / $totalSalarios) - 1621;
            echo "<h1>Análise do Salário</h1>";
            echo "Quem recebe um salário de <strong>R$$salario</strong><br>";
            echo "Ganha <strong>$totalSalarios</strong> salários mínimos.<br>";
            echo "E sobra: <strong>R$$sobra</strong>";
        } else{
            echo "Você recebe menos que um salário mínimo. Você recebe apenas <strong>" .round(($salario/1621),2) * 100 ."%</strong> de um salário mínimo.";
        }
    }
    ?>

</body>
</html>