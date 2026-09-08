# ------------------- Soma de Valores em Lista ------------------- #

lista = [] # Declarando uma lista vazia
usuario = -1 # Declarando a variável que armazena o comando do usuário

while usuario != 0: # Enquanto o usuário passar números diferentes de zero, segue com um loop
    usuario = int(input("Insira um valor ou 0 para sair: ")) # Pedindo um número ao usuário
    lista.append(usuario) # Adicionando esse número à lista

soma = sum(lista) # Somando todos os valores presentes na lista
print(lista) # Printando a lista

print(f"A soma desses números resulta em: {soma}") # Printando o resultado da soma da lista