import random as rd

import time
start = time.time()

val_par = 0
val_impar = 0
for i in range(500):
    value = rd.randint(50, 100)
    if value % 2 == 0: val_par +=value
    if value % 2 != 0: val_impar +=value


print(f"Numeros pares: {val_par}")
print(f"Numeros impares: {val_impar}")
print("Time:", time.time() - start)