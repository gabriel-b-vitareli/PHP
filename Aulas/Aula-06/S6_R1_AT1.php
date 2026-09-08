<?php 

$numero = 6; // O numero da tabuada
$limite = 20; // Qual o máximo em que a tabuada vai

$paridade = 'par'; //colocar 'par' ou 'impar'. 

if ($paridade == 'par') {
    echo "<h4>——————————Tabuada de pares do número $numero ——————————<br></h4>";
    for ($i=0 ;$i < $limite+1; $i++) {
        if ($i % 2 == 0) {
            echo "<strong>| $numero × $i = </strong>". $numero * $i. "<br>";
        }
    }
    echo "<h4>——————————————————————————————————</h4>";
}
elseif ($paridade == 'impar') {
    echo "<h4>——————————Tabuada de ímpares do número $numero ——————————<br></h4>";
    for ($i=0 ;$i < $limite+1; $i++) {
        if ($i % 2 != 0) {
            echo "<strong>| $numero × $i = </strong>". $numero * $i. "<br>";
        }
    }
    echo "<h4>——————————————————————————————————</h4>";
}
else {
    echo "<h4>——————————Tabuada do número $numero ——————————<br></h4>";
    for ($i=0 ;$i < $limite+1; $i++) {
        echo "<strong>| $numero × $i = </strong>". $numero * $i. "<br>";
    }
    echo "<h4>——————————————————————————————————</h4>";
}
?>