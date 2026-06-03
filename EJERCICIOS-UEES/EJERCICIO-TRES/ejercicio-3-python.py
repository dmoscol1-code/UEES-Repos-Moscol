import random

import time
start = time.time()
sucursales = [f"Sucursal {i+1}" for i in range(25)]
ventas = [round(random.uniform(5000, 50000), 2) for _ in range(25)]

prom_ventas = sum(ventas) / len(ventas)

print("Ventas por sucursal:")
for sucursal, venta in zip(sucursales, ventas):
    print(f"{sucursal}: ${venta:,.2f}")

print("\nPromedio de ventas: ", prom_ventas)

print("\nSucursales con ventas mayores a promedio:")
for sucursal, venta in zip(sucursales, ventas):
    if venta > prom_ventas:
        print(f"- {sucursal}: ${venta:,.2f}")
        

print("Time:", time.time() - start)
