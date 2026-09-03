from time import sleep

contador = int(input("Iniciar a contagem regressiva de quantos segundos? "))

print("\n")

while contador > 0:
    print(contador)
    contador -= 1
    sleep(1)

print("\n---------------------FIM!---------------------")