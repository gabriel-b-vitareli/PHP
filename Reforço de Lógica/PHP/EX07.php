<?php 
// Recebendo o ponto inicial::
$contador = readline("Iniciar a contagem regressiva de quantos segundos? ");
echo "\n";

// Loop para contar até o número solicitado, de 1 em 1:
for($i = $contador; $i > 0; $i -= 1){
echo "$i\n";
// Espera um segundo:
sleep(1);
}

echo "\n---------------------FIM!---------------------";
?>