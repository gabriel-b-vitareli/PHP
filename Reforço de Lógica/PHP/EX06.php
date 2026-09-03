<?php 
// Recebendo até quando deve contar:
$contador = readline("Até quanto eu devo contar? ");
echo "\n";
// Adiciona 1 ao contador para contar até o exato número solicitado
$contador++;

// Loop para contar até o número solicitado, de 1 em 1:
for($i = 1; $i < $contador; $i++){
echo "$i\n";
// Espera um segundo:
sleep(1);
}

echo "\n---------------------FIM!---------------------";
?>