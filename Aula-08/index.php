<?php 

// Cria uma função para dar bom dia:
function bomDia(){
    return "\033[1;33mBom dia!\033[m\n";
};

echo bomDia();

echo "—————————————————————————\n\n";

// Cria uma função para somar números:
function somar($um,$dois){
    return $um + $dois;
}

// Pedindo os números para realizar somas:
$um = readline("\nDigite o primeiro número: ");
$dois = readline("\nDigite o segundo número: ");

// Retornando a soma usando a função somar:
echo "\nSoma de $um + $dois = " .somar($um,$dois);

?>