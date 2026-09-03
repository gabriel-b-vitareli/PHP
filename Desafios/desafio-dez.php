<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 | Calculadora de Idade</title>
</head>
<body>
    <form action="" method="POST">
    <label for="ano-nasc">Digite seu ano de nascimento:<br></label>
    <input type="number" name="ano-nasc" id="ano-nasc"> <br><br>
    <label for="ano-atual">Digite o ano atual:</label><br>
    <input type="number" name="ano-atual" id="ano-atual"><br><br>
    <input type="submit" value="Enviar">
    </form>

    <?php 
    if(isset($_POST['ano-nasc']) and isset($_POST['ano-atual'])){
        $anonasc = $_POST['ano-nasc'];
        $anoatual = $_POST['ano-atual'];
        $idade = $anoatual - $anonasc;
        if ($idade < 0){
            echo "<br><hr>Idade inválida. Tente novamente.";
            }else{
        echo "<br><hr>";
        echo "Quem nasceu em <strong>$anonasc</strong> terá <strong>$idade</strong> anos em <strong>$anoatual</strong>.";}
    }
    ?>

</body>
</html>