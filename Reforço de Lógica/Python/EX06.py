# ------------------- Contadora (conta até um número) ------------------- #

from time import sleep # Importando a biblioteca da função sleep para esperar um segundo entre as linhas de código

contador = int(input("Até quanto eu devo contar? ")) # Pedindo até que número ele deve contar
print("\n")

for i in range(contador): # Percorre um loop cuja duração é o número que o usuário deu
    print(f"{i}\n") # Printa o i (que será o número atual sendo percorrido no loop) e pula uma linha
    sleep(1) # Espera 1 segundo antes de repetir o loop

print("\n----------------------------FIM!----------------------------")