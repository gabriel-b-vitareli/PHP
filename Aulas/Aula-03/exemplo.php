<?php 
// Variável de String:
$empresa = "XYZ";

// Variável de Inteiro:
$numFun = 67;

//Variável de Float:
$valorEmp = 291.50;

//Variável de Booleano:
$ativa = True;

// Echo mostrando os valores das variáveis:
echo "Nome da empresa: $empresa<br>Número de Funcionários: $numFun<br>Valor da Empresa: R$$valorEmp<br>Está Ativa: $ativa";


echo "<br><br>DUMPS DE VARIÁVEIS:<br><br>";

// var_dump: Mostra o tipo da variável e seu valor. Não deve ser deixado no código final
var_dump($empresa);
echo "<br>";
var_dump($numFun);
echo "<br>";
var_dump($valorEmp);
echo "<br>";
var_dump($ativa);
?>