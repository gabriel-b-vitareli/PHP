# ------------------- Verifica se um aluno passou na média ------------------- #

nota = int(input("Digite sua nota: ")) # Pedindo a nota

if nota >= 7: # Se a nota for maior ou igual a 7, ele passou na média
    print(f"\033[32mVocê passou na média com sua nota {nota}.\033[m")
else: # Se não, ele reprovou
    print(f"\033[31mVocê foi reprovado com sua nota {nota}.\033[m")