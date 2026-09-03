<?php 
    echo "<h1>Nossos Faturamentos:</h1>";
    
    $faturamentoPassado = 230; // Valor do faturamento do ano passado
    $faturamentoAtual = 100; // Valor do faturamento do ano atual

    // Mostrando os valores dos faturamentos dos dois anos:

    echo "O faturamento do ano passado foi de R$$faturamentoPassado <br><br>"; 
    echo "O faturamento desse ano foi de R$$faturamentoAtual <br><br>";

    // Travessão e "título" estético para separar os campos:
    echo "—————————————————————————————————————";

    echo "<h2>Estatísticas:</h2>";

    // Usando concatenação para realizar uma subtração entre o faturamento do ano atual e o faturamento do ano passado:
    echo "A diferença entre os faturamentos foi de: <strong>R$" . $faturamentoAtual - $faturamentoPassado ."</strong><br><br>";


    // Usando comparação para saber se o faturamento do ano atual foi maior que o do ano passado e passando uma resposta para True e uma diferente para False:
    echo $faturamentoAtual > $faturamentoPassado ? "<strong>O faturamento desse ano foi maior que o do ano passado</strong>.<br><br>": "<strong>O faturamento do ano passado foi maior que o desse ano.</strong><br><br>";


    // Usando concatenação para realizar uma adição entre os dois anos de faturamento para saber quanto foi faturado no total nos dois anos:
    echo "Somando os faturamentos dos últimos dois anos, arrecadamos R$" . $faturamentoAtual + $faturamentoPassado;

?>
