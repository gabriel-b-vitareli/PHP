numero = int(input("Digite um número para ver sua tabuada: "))

tabuada = int(input("Até que número a tabuada deve ir? "))
print(f"---------Tabuada do {numero}---------\n")

i = 1
while i <= tabuada:
    print(f"{i} X {numero} = {i*numero}")
    i += 1

print("\n-------------------")