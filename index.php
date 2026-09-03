<<?php 


// Variáveis guardando o nome do funcionário e o da empresa:
$funcionario = "Gabriel Braga Vitareli";
$empresa = "XYZ";

// ------- //

// Variáveis para guardar informações:
$salarioMinimo = 1621; // Salário mínimo atual
$contratadoEm = 2022; // Ano em que o funcionário foi contratado
$anoAtual = 2026; // Ano atual

// Essa função realiza um echo dizendo Bem-vindo ao funcionário e dizendo o nome da empresa:
function boasVindas($emp,$func) {
    echo "<h2>Bem-vindo, $func! | Painel de Funcionário da Empresa $emp</h2><br><hr><br>";
}

// Essa função calcula o salário do funcionário
function calcSalario($salarioMin,$anoContratado,$anoAtual) {
    $anosTotais = $anoAtual - $anoContratado; // Primeiro, calcula-se quantos anos o funcionário tem de empresa ao subtrair o ano atual pelo ano em que foi contratado

    if ($anosTotais > 2) {
        return $salarioMin * ($anosTotais / 2); // Se o funcionário tiver mais que dois anos de empresa, ele recebe um salário equivalente ao salário mínimo multiplicado pela quantidade de anos trabalhados dividido por 2. Ou seja, ele recebe um aumento a cada 2 anos.
    } 
    else {
        return $salarioMin; // Se o funcionário tiver menos de dois anos de empresa, ele recebe apenas um salário mínimo.
    }
}

// Chamando a função de Boas Vindas, que usa echo:
boasVindas($empresa,$funcionario);

// Utilizando a função para calcular o salário, que usa um return:
echo "<strong>Seu salário atual é de:</strong> R$" .calcSalario($salarioMinimo,$contratadoEm,$anoAtual) . "<br>";


// Footer da página mostrando "estatísticas" do funcionário:

echo "<br><hr><br><h5>$funcionario, você foi contratado em $contratadoEm e conta com ". $anoAtual-$contratadoEm . " anos de empresa.</h5>";

// Reutilizando a função de calcular salário para mostrar ao funcionário o quanto ele recebe, medido em "salários mínimos", indo até três salários mínimos.
echo "<h6>Isso equivale a ";
switch (calcSalario($salarioMinimo,$contratadoEm,$anoAtual)) {
    case 1621:
        echo "um salário mínimo.</h6>";
        break;
    case 3242:
        echo "dois salários mínimos.</h6>";
        break;
    case 4863:
        echo "três salários mínimos. Isso já é mais que a média brasileira atual.</h6>";
        break;
    default:
        echo "um salário considerado alto para o padrão brasileiro.</h6>";
        break;

}

?>