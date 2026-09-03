<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 | Número Antecessor e Sucessor</title>
</head>
<body>
    <form action="" method="POST">
    <label for="numero">Digite um número:<br></label>
    <input type="number" name="numero" id="numero">
    <input type="submit" value="Enviar">
    </form>

    <?php 
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        echo "<h3>Número Selecionado: $numero</h3><hr>";
        echo "<strong>Antecessor: </strong>" .$numero -1 ."<br>";
        echo "<strong>Sucessor: </strong>" .$numero +1;
    }
    ?>

</body>
</html>