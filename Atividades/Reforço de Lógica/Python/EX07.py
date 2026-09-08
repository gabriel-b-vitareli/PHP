# ------------------- Contagem Regressiva ------------------- #

from time import sleep # Importando a biblioteca da função sleep para esperar um segundo entre as linhas de código

contador = int(input("Iniciar a contagem regressiva de quantos segundos? ")) # Pede ao usuário o número inicial da contagem regressiva

print("\n")

while contador > 0: # Enquanto o contador for maior que zero, a contagem regressiva continua
    print(contador) # Mostra o número atual que o contador está
    contador -= 1 # Diminui a variável do contador em -1
    sleep(1) # Espera um segundo antes de seguir o loop

print("\n---------------------FIM!---------------------")