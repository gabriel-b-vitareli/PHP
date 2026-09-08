<<?php 
// Cria um array:

$funcionarios = ["Gabriel","Filipe","Cauê","Fachinello"];

// Cria um for para listar os funcionários:

for ($i = 0; $i <= 4; $i++){
    echo "$funcionarios[$i] <br>";
}

echo "<hr>";

// Usando o foreach para percorrer o array:

foreach($funcionarios as $funcionario){
    echo "$funcionario<br>";
}

echo "<hr>";

// Dicionário:

$colaborador = [
    "nome" => "Gabriel",
    "idade" => "17",
    "cargo" => "Estudante"
];

echo "Nome do Colaborador: " .$colaborador["nome"]."<br>";
echo "Idade do Colaborador: " .$colaborador["idade"]."<br>";
echo "Cargo do Colaborador: " .$colaborador["cargo"]."<br>";

echo "<hr>";


// Criando Matriz:

$colab = [
    ["nome" => "Gabriel", "idade" => "17", "cargo" => "Estudante"],
    ["nome" => "Cauê", "idade" => "16", "cargo" => "Desempregado"],
    ["nome" => "Filipe", "idade" => "17", "cargo" => "Estudante"]
];

echo $colab[2]["cargo"];
echo "<hr>";

// Percorrendo todo o Dicionário:

foreach($colab as $c){
    echo "Nome: " .$c["nome"] ."<br>";
    echo "Idade: " .$c["idade"] ."<br>";
    echo "Cargo: " .$c["cargo"] ."<br>";
    echo "<br>";
};
?>