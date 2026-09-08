# ------------------- Verifica se um aluno passou na média ------------------- #

nota = float(input("Digite sua nota: ")) # Pedindo a nota

if nota >= 7 and nota < 10: # Se a nota for maior ou igual a 7 E menor que 10, ele passou na média
    print(f"\033[32mVocê passou na média com sua nota {nota}.\033[m")
elif nota > 0 and nota < 7: # Se não, se a nota dele for maior que zero (mas menor que 7), ele reprovou
    print(f"\033[31mVocê foi reprovado com sua nota {nota}.\033[m")
else: # Se não, a única opção que sobra é que sua nota é um número inválido, como negativo ou maior que 10
    print(f"\033[31mSua nota {nota} é inválida.\033[m") 