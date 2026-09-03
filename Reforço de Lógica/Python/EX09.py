lista = []
usuario = -1

while usuario != 0:
    usuario = int(input("Insira um valor ou 0 para sair: "))
    lista.append(usuario)

soma = sum(lista)
print(lista)

print(f"A soma desses números resulta em: {soma}")