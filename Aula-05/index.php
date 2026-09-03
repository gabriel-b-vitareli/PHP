<?php 

// // if, elseif e else
// $funcionario = 9;

// if ($funcionario > 10) {
//     echo "Empresa grande";
// } elseif ($funcionario > 5) {
//     echo "Empresa média";
// } else {
//     echo "Empresa pequena";
// }

/////////////////////////

// // If e Else sem condições, pois o if já checa de $ativa é True ou False por padrão (sem precisar colocar o == True):
// $ativa = false;
// if ($ativa){
//     echo "A empresa está ativa";
// } else {
//     echo "A empresa está inativa";
// }

////////////////////////

// // Exemplo de Switch Case:

$dia = 6;

switch ($dia){
    case 1:
        echo "Hoje é domingo";
        break;
    case 2:
        echo "Hoje é segunda-feira";
        break;
    case 3:
        echo "Hoje é terça-feira";
        break;
    case 4:
        echo "Hoje é quarta-feira";
        break;
    case 5:
        echo "Hoje é quinta-feira";
        break;
    case 6:
        echo "Hoje é sexta-feira";
        break;
    case 7:
        echo "Hoje é sábado";
        break;
        default:
        echo "Dia inválido";
        break;
}

?>