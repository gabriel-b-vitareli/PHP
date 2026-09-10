<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 | Calculadora de Tempo</title>
</head>
<body>
    <h1>Calculadora de Tempo</h1>
    <hr>
    <form action="" method="POST">
        <label for="segundos">Digite o tempo em segundos: </label>
        <input type="number" name="segundos" id="segundos"> <br>
        <input type="submit" value="Calcular Tempo">
    </form>

    <?php 
    if(isset($_POST['segundos'])){
        $segundos = $_POST['segundos'];
        $minutos = $segundos / 60;
        $horas = $minutos / 60;

        echo "<hr>";

        echo "$segundos segundos equivalem a:<br>";
        echo "<strong>".round($minutos,2)."</strong> Minutos.<br>";
        echo "<strong>".round($horas,6)."</strong> Horas.";
    }
    ?>
</body>
</html>