<<?php 

// Array Associativo com os produtos disponíveis:
$produtos = [
    ["nome" => "PlayStation 5", "preco" => 6000, "estoque" => 20],
    ["nome" => "Xbox Series X", "preco" => 5500, "estoque" => 18],
    ["nome" => "Xbox Series S", "preco" => 4000, "estoque" => 12],
    ["nome" => "Nintendo Switch 2", "preco" => 4500, "estoque" => 16],
    ["nome" => "Steam Machine", "preco" => 5800, "estoque" => 3]
];


//Título da Página:
echo "<h1>Painel da Loja | Empresa XYZ</h1>";

// Sobretítulo:
echo "<br><hr><br><h3>Consoles/Videogames Disponíveis:</h3><br><hr><br>";


// Percorrendo o array associativo dos produtos com o foreach
foreach($produtos as $produto) {
    echo "<strong>Videogame:</strong> " .$produto["nome"]. "<br>"; // Mostrando o nome do videogame
    echo "<strong>Preço:</strong> R$" .$produto["preco"]. "<br>"; // Mostrando o preço do videogame
    echo "<strong>Unidades Em Estoque: </strong>" .$produto["estoque"]. "<br>"; // Mostrando o estoque do videogame

    echo "<br><hr><br>";
};
// OBS: O foreach será percorrido e executado uma vez para cada console diferente "catalogado" na variável/array "produtos"

echo "<h6>Fim da Lista.</h6>";

?>