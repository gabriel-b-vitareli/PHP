nota = int(input("Digite sua nota: "))

if nota >= 7:
    print(f"\033[32mVocê passou na média com sua nota {nota}.\033[m")
else:
    print(f"\033[31mVocê foi reprovado com sua nota {nota}.\033[m")