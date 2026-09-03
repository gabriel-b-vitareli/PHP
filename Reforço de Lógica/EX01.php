<?php 
// Perguntando a idade do usuário:
$idade = readline("Digite sua idade: ");

if ($idade < 18){ // Se for menor que 18, é menor de idade
    echo "\033[;31mVocê é menor de idade.\033[m";
} elseif ($idade >= 18 and $idade < 60){ // Se for maior ou igual a 18, porém menor que 60, é adulto
    echo "\033[;32mVocê é um adulto.\033[m";
} else {
    echo "\033[;34mVocê é um idoso.\033[m"; // Se for maior que 60, é idoso
}
?>