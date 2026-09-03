<?php 
// Recebendo os valores da divisão:
$dividendo = readline("Digite o dividendo: "); 
$divisor = readline("Digite o disivor: ");

if ($dividendo % $divisor == 0){ // Se a sobra da divisão for 0, então são divisíveis:
    echo "\033[;32mEsses números são divisíveis.\033[m";
} elseif ($divisor == 0){ // Se o divisor for 0, evitamos um erro ao lembrar que nenhum número é divisível por 0:
    echo "\033[;31mNão é possível dividir por 0. \033[m";
} else{ // Se não, eles não são divisíveis:
    echo "\033[;31mEsses números não são divisíveis.\033[m";
}
?>