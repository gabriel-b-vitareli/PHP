# ------------------- Calculadora de Tabuada ------------------- #

numero = int(input("Digite um número para ver sua tabuada: ")) # Pedindo o número que o usuário deseja ver a tabuada

tabuada = int(input("Até que número a tabuada deve ir? ")) # Pedindo qual deve ser o maior multiplicador presente na tabuada

print(f"---------Tabuada do {numero}---------\n")

i = 1 # Declarando a variável iterável "i" inicialmente como 1 para que não comece em 0 (já que todo número multiplicado por 0 é zero)
while i <= tabuada: # Repete um loop enquanto o iterável for menor ou igual ao maior multiplicador fornecido pelo usuário
    print(f"{i} X {numero} = {i*numero}") # Mostrando a multiplicação da linha atual da tabuada
    i += 1 # Aumentando o iterável a cada "rotação" do loop

print("\n-------------------")