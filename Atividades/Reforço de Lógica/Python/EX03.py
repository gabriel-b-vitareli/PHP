# ------------------- Verifica se números são divisíveis ------------------- #

dividendo = int(input("Digite o dividendo: ")) # Pedindo o dividendo da operação
divisor = int(input("Digite o disivor: ")) # Pedindo o divisor da operação

# Se o divisor for 0, avisamos que é impossível dividir por zero:
if divisor == 0:
    print("\033[;31mNão é possível dividir por 0. \033[m")
# Se a divisão resultar em 0 sobra, eles são divisíveis:
elif dividendo % divisor == 0:
    print(f"\033[;32mEsses números são divisíveis. O resultado dessa divisão é {int(dividendo/divisor)}.\033[m")
# Se não, só sobra a possibilidade dos números não serem divisíveis:
else:
    print("\033[;31mEsses números não são divisíveis.\033[m")