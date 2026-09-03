<?php 

// Criando as variáveis:

$empresa = 'XYZ'; // Nome da empresa
$funcionariosTotais = 50; // O número total de funcionários que estão registrados na empresa
$funcionariosON = 30; // A quantidade de funcionários que estão trabalhando no momento

$diaSemana = 3; // O dia da semana (1 à 7)
$diaMes = 10; // Dia do mês
$mes = 8; // Número do mês
$ano = 2026; // Ano
$hora = 12; // Hora atual (sem considerar minutos)


$horaAbrir = 8; //Horário em que a empresa abre
$horaFechar = 18; //Horário em que a empresa fecha
$horaFecharSabado = 14; //Horário em que a empresa fecha especificamente no sábado


// "Fechando" e colocando a quantidade de funcionários trabalhando automaticamente em zero a depender do dia e do horário:

if ($diaSemana == 1) {
    $funcionariosON = 0; // Se for domingo, a empresa está fechada e ninguém está trabalhando.
}

if ($hora < $horaAbrir) {
    $funcionariosON = 0; //Se o horário for menor que o horário em que a empresa abre, ela está fechada e portanto ninguém está trabalhando agora.
} elseif ($hora >= $horaFechar) {
    $funcionariosON = 0; //Se o horário for maior ou igual ao horário em que a empresa fecha, ela está fechada, então ninguém está trabalhando agora.
} elseif ($hora >= $horaFecharSabado and $diaSemana = 7) {
    $funcionariosON = 0; // Se o horário atual for maior ou igual o horário de fechar no sábado E o dia da semana atual for sábado, então a empresa está fechada e ninguém está trabalhando
}

// Início da página:
echo "<h1>Painel de Administração da Empresa $empresa</h1>"; // Título

echo "<h2>Análise de Atividade na Empresa no Dia $diaMes/$mes/$ano, às $hora horas:</h2>"; // Data do relatório

echo "——————————————————————————————————<br><br>"; // Divisão visual

// Switch Case para ver qual o dia da semana:
switch ($diaSemana) {
    case 1:
        echo "Hoje é domingo. A empresa está fechada.<br><br>";
        break;
    case 2:
        echo "Hoje é segunda-feira. Hora de começar a semana!<br><br>";
        break;
    case 3:
        echo "Hoje é terça-feira.<br><br>";
        break;
    case 4:
        echo "Hoje é quarta-feira.<br><br>";
        break;
    case 5:
        echo "Hoje é quinta-feira.<br><br>";
        break;
    case 6:
        echo "Hoje é sexta-feira.<br><br>";
        break;
    case 7:
        echo "Hoje é sábado. A empresa fecha mais cedo.<br><br>";
        break;
}


// Calculando a porcentagem de funcionários que estão trabalhando no momento pelo cálculo de funcionários totais multiplicado pela quantidade de funcionários trabalhando no momento e divididos por 100:
$porcentagemFuncionarios = ($funcionariosON * 100) / $funcionariosTotais;

// Calculando a proporção de funcionários totais para funcionários trabalhando:
if ($funcionariosTotais > $funcionariosON and $funcionariosON > 0) { // Se houverem mais funcionários totais do que funcionários online, ele mostra a seguinte mensagem:
    echo "No momento, <strong>nem todos os funcionários estão trabalhando.</strong> Apenas $funcionariosON estão operantes ($porcentagemFuncionarios%).";
} 

elseif ($funcionariosTotais <= $funcionariosON) { // Se houverem mais (ou a mesma quantidade de) funcionários totais quanto funcionários online, ou seja, se todos estiverem trabalhando, ele mostra a seguinte mensagem:
    echo "A empresa está completamente operante no momento. Todos os $funcionariosON funcionários estão operantes.";
} 

elseif ($funcionariosON == 0) { // Se não houver nenhum funcionário trabalhando, ele mostra essa mensagem:
    echo "Não há ninguém trabalhando no momento.";
} 

else { // Se forem números negativos grandes ou ocorrer algum erro durante a execução dos elseif's, ele mostra essa mensagem:
    echo "Não há dados sobre a quantidade de funcionários.";
}

echo "<br><br>——————————————————————————————————"; // Divisão visual estétitca


echo "<br><br><br><h6>A empresa $empresa conta com $funcionariosTotais funcionários registrados.</h6>"; // Footer que mostra o nome da empresa e a quantidade total de funcionários no final da página
echo "<h6>A Empresa $empresa funciona de segunda a sexta das $horaAbrir às $horaFechar horas e das $horaAbrir até as $horaFecharSabado horas no sábado.</h6>"; //Segunda parte do footer que mostra o horário de funcionamento da empresa nos dias da semana.

?>