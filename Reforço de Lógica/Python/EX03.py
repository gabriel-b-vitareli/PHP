dividendo = int(input("Digite o dividendo: ")) # Pedindo o dividendo da operação
divisor = int(input("Digite o disivor: ")) # Pedindo o divisor da operação

# Se a divisão resultar em 0 sobra, eles são divisíveis:
if dividendo % divisor == 0:
    print("\033[;32mEsses números são divisíveis.\033[m")
# Se o divisor for 0, avisamos que é impossível dividir por zero:
elif divisor == 0:
    print("\033[;31mNão é possível dividir por 0. \033[m")
# Se não, só sobra a possibilidade dos números não serem divisíveis:
else:
    print("\033[;31mEsses números não são divisíveis.\033[m")