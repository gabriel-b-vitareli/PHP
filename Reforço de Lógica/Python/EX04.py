# ------------------- Verifica a Temperatura ------------------- #

temperatura = int(input("Digite a temperatura em graus celsius: ")) # Pedindo a temperatura

if temperatura > 27: # Se a temperatura for maior que 27 graus, está quente:
    print("\033[31mEstá quente.\033[m")

elif temperatura < 15: # Se a temperatura for menor que 15 graus, está frio:
    print("\033[34mEstá frio.\033[m")

else: # Se não estiver nem maior que 27 graus e nem menor que 15, está agradável:
    print("\033[32mEstá agradável.\033[m")