<?php 
// Declarando as variáveis que usaremos:
$lista = [];
$usuario = -1;

// Loop para registrar os números fornecidos pelo usuário até que ele digite 0:
while($usuario != 0){
    $usuario = readline("Insira um valor ou 0 para sair: \n");
    array_push($lista,$usuario);
}

// Somar a lista:
$soma = array_sum($lista);
// Mostrando a lista:
print_r($lista);
// Mostrando a soma da lista:
echo "A soma desses números resulta em: $soma";
?>