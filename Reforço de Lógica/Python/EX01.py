# Pedindo a idade do usuário:
idade = int(input("Qual sua idade? "))

# Se a idade for menor que 18, ele é menor de idade:
if idade < 18:
    print("\033[;31mVocê é menor de idade.\033[m")
# Se a idade for maior ou igual a 18 mas também for menor que 60, ele é adulto:
elif idade >= 18 and idade < 60:
    print("\033[;32mVocê é um adulto.\033[m")
# Se não, só sobra a possibilidade dele ser um idoso:
else:
    print("\033[;34mVocê é um idoso.\033[m")