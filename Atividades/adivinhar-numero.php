<?php 
echo "Adivinhe o número de 0 a 10!\n";
$numero = 7; // <- Número que o usuário deve acertar
$usuario = 0; // Declarando a variável que armazena a tentativa do usuário

while($usuario != $numero){ // Executa o código abaixo enquanto o usuário não acertar o número

    // Input para ler e guardar a tenativa do usuário:
    $usuario = readline("Insira o número da sorte: ");

    // Exibe a mensagem de erro quando o usuário não acertar:
    if($usuario != $numero){echo "Errou! Tente novamente.\n";}
}

// Exibe a mensagem de acerto quando o usuário acertar o número e sair do loop while:
echo "Acertou.";
?>