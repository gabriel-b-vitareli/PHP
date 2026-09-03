dividendo = int(input("Digite o dividendo: "))
divisor = int(input("Digite o disivor: "))

if dividendo % divisor == 0:
    print("\033[;32mEsses números são divisíveis.\033[m")
elif divisor == 0:
    print("\033[;31mNão é possível dividir por 0. \033[m")
else:
    print("\033[;31mEsses números não são divisíveis.\033[m")