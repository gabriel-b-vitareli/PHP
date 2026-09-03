<?php 
// Pedindo a nota:
$nota = readline("Digite sua nota: ");

// Se a nota for maior ou igual a 7, ele passou:
if ($nota >= 7){ 
    echo "\033[32mVocê passou na média com sua nota $nota.\033[m";
} 

// Se não (for menor que 7), ele reprovou:
else{
    echo "\033[31mVocê foi reprovado com sua nota $nota.\033[m";
}

?>