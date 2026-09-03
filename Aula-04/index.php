<?php
    $anoAtual = 2026; // Ano Atual (autoexplicativo)
    $anoFundacao = 2010; // Ano da fundação da empresa

    $idadeEmpresa = $anoAtual - $anoFundacao; // Variável que realiza o cálculo para saber a idade da empresa (não precisa ser usada caso seja feita a concatenação, como foi feita no echo abaixo)

    echo "A empresa tem: " . $anoAtual - $anoFundacao. " anos<br>"; // Realiza o cálculo da idade da empresa dentro do echo (concantenação). Também poderia ser feita da seguinte forma:
    
    // echo "A empresa tem $idadeEmpresa anos."


    // Funciona como um "if" com concatenação 
    echo $idadeEmpresa > 20 ? "Mais que 20": "Menor que 20";
?>