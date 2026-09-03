<?php 
// Pedindo o número para ver a tabuada dele:
$numero = readline("Digite um número para ver sua tabuada: ");
// Pedindo para ver até quando a tabuada vai:
$tabuada = readline("Até que número a tabuada deve ir? ");

echo "---------Tabuada do $numero---------\n";

// Calculando e mostrando a tabuada:
for ($i = 1;$i <= $tabuada;$i++){
    echo "$i X $numero = " .$i*$numero ."\n";
}
echo "-----------------------------\n";

?>