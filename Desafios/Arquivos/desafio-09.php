<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09 | Médias Aritméticas</title>
</head>
<body>
    <h1>Médias Aritméticas</h1>
    <hr>
    <form action="" method="POST">
        <label for="nota1">Primeira nota: </label>
        <input type="number" name="nota1" id="nota1" step="0.01"><br>

        <label for="peso1">Peso da primeira nota: </label>
        <input type="number" name="peso1" id="peso1" step="0.01"><br>

        <label for="nota2">Segunda nota: </label>
        <input type="number" name="nota2" id="nota2" step="0.01"><br>

        <label for="peso2">Peso da segunda nota: </label>
        <input type="number" name="peso2" id="peso2"><br>

        <input type="submit" value="Calcular Médias">
    </form>


    <?php 
    if(isset($_POST['nota1']) and isset($_POST['peso1']) and isset($_POST['nota2']) and isset($_POST['peso2'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $peso1 = $_POST['peso1'];
        $peso2 = $_POST['peso2'];

        $media1 = $nota1*$peso1;
        $media2 = $nota2*$peso2;
        $somaPeso = $peso1 + $peso2;
        $mediaPond = ($media1 + $media2) / ($somaPeso);

        $mediaAritm = ($nota1 + $nota2) / 2;

        echo "<hr>";

        echo "A média Ponderada das suas notas é: <strong>$mediaPond</strong> <br>";
        echo "A média Aritmética das suas notas é: <strong>$mediaAritm</strong>";
    }
    ?>
</body>
</html>