from time import sleep

contador = int(input("Até quanto eu devo contar? "))
print("\n")

for i in range(contador):
    print(f"{i}\n")
    sleep(1)

print("\n----------------------------FIM!----------------------------")