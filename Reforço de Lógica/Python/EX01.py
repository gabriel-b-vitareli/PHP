idade = int(input("Qual sua idade? "))

if idade < 18:
    print("\033[;31mVocê é menor de idade.\033[m")
elif idade >= 18 and idade < 60:
    print("\033[;32mVocê é um adulto.\033[m")
else:
    print("\033[;34mVocê é um idoso.\033[m")