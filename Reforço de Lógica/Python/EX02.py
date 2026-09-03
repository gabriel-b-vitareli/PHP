num1 = int(input("Digite o primeiro número: ")) # Pedindo o primeiro número
num2 = int(input("Digite o segundo número: ")) # Pedindo o segundo número

# Se o número um for maior que o número dois, dizemos que o 1 é maior:
if num1 > num2:
    print(f"{num1} é maior que {num2}")
# Se o segundo número for maior que o primeiro, dizemos que o 2 é maior:
elif num2 > num1:
    print(f"{num2} é maior que {num1}")
# Se não, só sobra a possibilidade deles serem iguais:
else:
    print(f"{num1} é igual a {num2}")