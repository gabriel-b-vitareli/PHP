<?php 
// Perguntando os números para a comparação:
$primeiroNum = readline("Digite o primeiro número: ");
$segundoNum = readline("\nDigite o segundo número: ");

if ($primeiroNum > $segundoNum){ // Se o primeiro for maior que o segundo:
    echo "$primeiroNum é maior que $segundoNum.";
} elseif($segundoNum > $primeiroNum){ // Se o segundo for maior que o primeiro:
    echo "$segundoNum é maior que $primeiroNum.";
} else{ // Se não, só podem ser iguais:
    echo "$primeiroNum é igual a $segundoNum.";
}

?>