<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Empresa | S3_R1_AT1</title>
</head>
<body>
    <?php 
    // Variáveis:

    $nomeEmp = "XYZ"; //Nome da empresa, em uma variável do tipo String
    $valorMerc = 12987.48; // Valor de mercado da empresa, em uma variável do tipo Float
    $numFunc = 67; // Quantidade de funcionários da empresa, variável do tipo Inteiro
    $trabalhando = true; // Se a empresa está no horário de funcionamento, variável do tipo booleano
    $anoFund = 1987; // Ano de fundação da empresa, variável do tipo Inteiro

    // Mostrando os valores na página:

    echo "<h1>Bem-vindo à página inicial da empresa $nomeEmp. </h1><br><br><br>"; //"Título" da página


    echo "Nossa empresa tem um valor de mercado atual de R$$valorMerc <br><br>"; // Meio da página, mostrando o valor de mercado da empresa (linha 1)

    echo "Contamos com uma equipe de $numFunc funcionários. <br><br>"; // Meio da página, mostrando a quantidade de funcionários da empresa (linha 2)

    echo "Estamos no nosso horário de trabalho? "; // Meio da página, apenas cria uma linha simples com a pergunta
    echo $trabalhando ? "Sim": "Não"; // Troca o 1 e 0 da variável booleana por Sim e Não, respondendo a pergunta da linha passada


    echo "<br><br><br><br><h6>Desde $anoFund</h6>" // Final/"Footer" da página com o ano de fundação da empresa
    
    ?>
</body>
</html>