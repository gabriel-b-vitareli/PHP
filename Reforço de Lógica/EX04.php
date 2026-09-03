<?php 
// Pedindo a temperatura:
$temperatura = readline("Digite a temperatura atual em graus celsius: ");

// Se a temperatura for maior que 27, está quente:
if ($temperatura > 27){
    echo "\033[31mEstá quente.\033[m";
// Se for menor que 15, está frio:
} elseif($temperatura < 15){
    echo "\033[34mEstá frio.\033[m";
// Se estiver entre 15 e 17, está agradável:
} else{
    echo "\033[32mEstá agradável.\033[m";
}
?>