temperatura = int(input("Digite a temperatura em graus celsius: "))

if temperatura > 27:
    print("\033[31mEstá quente.\033[m")
elif temperatura < 15:
    print("\033[34mEstá frio.\033[m")
else:
    print("\033[32mEstá agradável.\033[m")