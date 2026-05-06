import time
start = time.time()


valor_total = 0
contador = 0
for i in range(10):
    valor = int(input("Ingresa un valor: "))
    valor_total += valor
    contador += 1

print("El valor total es:", valor_total)
print("El promedio es:", valor_total/contador)


print("Time:", time.time() - start)