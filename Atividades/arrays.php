<?php
echo "Vamos exibir arrays na tela: \n";

// Lista/array com frutas:
$frutas = ["maçã","banana","morango","kiwi"];

// print_r para exibir o array (Um echo causaria um erro):
print_r($frutas);

// Exibe o morango:
echo "Fruta selecionada: $frutas[2]\n";

// Loop para mostrar todas as frutas:
foreach($frutas as $fruta){
    echo "Fruta: $fruta\n";
}

echo "\n\n————————————————————————————————————————\n\n";

// Registrando os alunos:
$alunos = [["Jorge","I1D35","37"],["Cauê","I1D35","16"],["Braga","I1D35","17"]];

// Exibindo a idade do Cauê:
echo $alunos[1][2] ."\n";

echo "\n";

// Exibindo os alunos e suas informações:
foreach($alunos as $aluno){
    echo "Nome: ". $aluno[0] ."\n";
    echo "Sala: ". $aluno[1] ."\n";
    echo "Idade: ". $aluno[2] ."\n";
    echo "\n";
}
?>